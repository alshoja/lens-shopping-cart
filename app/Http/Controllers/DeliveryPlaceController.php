<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPlace;
use Illuminate\Http\Request;
use DB;

class DeliveryPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delivary = DeliveryPlace::all();
        return view('stock-settings.delivery.delivery',compact('delivary'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $delivary = new DeliveryPlace;
        $delivary->state = $request->state;
        $delivary->district = $request->district;
        $delivary->pincode = $request->pincode;
        $delivary->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryPlace  $deliveryPlace
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryPlace $deliveryPlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeliveryPlace  $deliveryPlace
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryPlace $deliveryPlace,$id)
    {
        $delivary = DeliveryPlace::Findorfail($id);
        return view('stock-settings.delivery.editdelivery',compact('delivary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeliveryPlace  $deliveryPlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryPlace $deliveryPlace,$id)
    {
        $delivary =  DeliveryPlace::Findorfail($id);
        $delivary->state = $request->state;
        $delivary->district = $request->district;
        $delivary->pincode = $request->pincode;
        $delivary->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveryPlace  $deliveryPlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryPlace $deliveryPlace,$id)
    {
        $delivary =  DeliveryPlace::destroy($id);
        return back();

    }

    public function search(Request $request)
    {

        if ($request->ajax()) {
            $output = "";
            $msg = "Available Delivery Places";
            $places = DB::table('delivery_places')->where('pincode', 'LIKE', '%' . $request->search . "%")->get();
            if ($places) {
                foreach ($places as $key => $place) {
                    $output .= '<br>'.$msg.'<br>'.'<li>' . $place->pincode .'&nbsp'.$place->district. '</li>' ;

                }

            } else if($output === ""){
                $output = "Not avialable";
            }
            return Response($output);
        }
    }
}
