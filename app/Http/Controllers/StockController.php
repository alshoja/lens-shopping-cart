<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Product_image;
use Auth;
use Session;
use Illuminate\Http\Request;

class StockController extends Controller
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
        $stocks = Product::with('user', 'categorie', 'images', 'reviews', 'productImage')->orderby('id', 'desc')->paginate(5);
        $category = Categorie::all();
        // return  response()->json($stocks);
        return view('web-settings.ManageStock.manageStock', compact('stocks', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'photos'=>'required',
            ]);
        
        $stock = new Product;
        $stock->name = $request->name;
        $stock->amount = $request->amount;
        $stock->old_price = $request->old_price;
        $stock->description = $request->description;
        $stock->star = 0;
        $stock->user_id = Auth::user()->id;
        $stock->category_id = $request->category_id;
        $stock->stock = $request->stock;
        if ($request->in_flashSale) {
            $stock->in_flashSale = $request->in_flashSale;
        } else {
            $stock->in_flashSale = 0;
        }

        if ($request->in_Featured_sale) {
            $stock->in_Featured_sale = $request->in_Featured_sale;
        } else {
            $stock->in_Featured_sale = 0;
        }

        if ($request->is_inDeals) {
            $stock->is_inDeals = $request->is_inDeals;
        } else {
            $stock->is_inDeals = 0;
        }

        $stock->enable_type = 0;
        $stock->save();

        if ($request->hasFile('photos')) {
            $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
            $files = $request->file('photos');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);

                if ($check) {
                   
                        $filename = $file->store('productImages');
                        Product_image::create([
                            'product_id' => $stock->id,
                            'image' => $filename,
                            'user_id' => Auth::user()->id,
                        ]);
                        Session::flash('message', "Uploaded");
                } else {
                        Session::flash('message', "File Size is too high or something went wrong");
                }
            }
        }
       
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
