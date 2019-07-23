<?php

namespace App\Http\Controllers;

use App\Models\Product_image;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Session;

class ProductImageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $productType,$id)
    {
        $image = Product_image::where('product_id',$id)->first();
        if ($request->hasFile('photo')) {
            $allowedfileExtension = ['pdf', 'jpg', 'png'];
            $file = $request->file('photo');

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {

                $filename = $file->store('productImages');
                Session::flash('message', "Stock updated Succesfully");
            } else {

                Session::flash('message', "Problem with your File size  or something went wrong");
            }

        }
        $image->update(['image' => $filename]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType,$id)
    {
        $image = Product_image::destroy($id);
        return back();
    }
}
