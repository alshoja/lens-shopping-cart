<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Tzsk\Payu\Facade\Payment;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Product;
use Auth;
use Session;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $paye = $request->all();
        $data = $request->json;
        $shippingAddress_1 = $paye['address'] . ' Name:' . $paye['name'] . ' Mobile:' . $paye['mobile'] . ' Landmark:' . $paye['landmark'] . ' Town/City:' . $paye['city'] . 'Pin:' . $paye['pin'];
        $shippingAddress_2 = $paye['address'];
        $shipping_address = 'Primary Address' . $shippingAddress_1 . 'Secondary Address' . $shippingAddress_2;

        $order = new Order;
        $order->customer_id = Auth::user()->id;
        $order->shipping_address = $shipping_address;
        $order->order_amount = $request->final_amount;
        $order->order_method = $request->order_method;
        $order->save();

        $orderdetails = new Orderdetail;
        $cart_items =json_decode($data, true);
        $total = 0;
        foreach ($cart_items as $key => $value) {
            $product = Product::findorFail($value['item_id']);
            $total += $product->amount * $value['quantity']; 
            $orderdetails->create(['order_id'=>$order->id,'product_id' =>$value['item_id'],'quantity' =>$value["quantity"],'item_amount'=>$product->amount]);      
        } 
      
        $attributes = [
            'txnid' => strtoupper(str_random(8)), # Transaction ID.
            'amount' => $total, # Amount to be charged.
            'productinfo' => $data,
            'firstname' => $paye['name'], # Payee Name.
            'email' => Auth::user()->email, # Payee Email Address.
            'phone' => $paye['mobile'], # Payee Phone Number.
        ];
        
        Session::put('order_id',$order->id);
        return Payment::make($attributes, function ($then) {
            $then->redirectTo('payment/status');

        });
    }


        public function status()
        {
   
            $payment = Payment::capture();
            $payment->isCaptured();
            if ($payment->unmappedstatus == "userCancelled") {
                $order = Order::findorFail(Session::get('order_id'));
                $order->order_status = 'userCancelled';
                $order->save();
            }
            return redirect('home');
    
        }
    }

   


