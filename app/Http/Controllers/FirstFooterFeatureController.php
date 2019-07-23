<?php

namespace App\Http\Controllers;

use App\Models\FirstFooterFeature;
use Illuminate\Http\Request;

class FirstFooterFeatureController extends Controller
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
        $feature = FirstFooterFeature::all();
        return view('web-settings.Features.feature', compact('feature'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feature = new FirstFooterFeature;
        $feature->heading = $request->heading;
        $feature->description = $request->description;
        $feature->icon = $request->icon;
        $feature->button_value = $request->button_value;
        $feature->url = $request->url;
        if ($request->feature_div) {
            $feature->feature_div = $request->feature_div;
        } else {
            $feature->feature_div = 1;
        }
        $feature->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstFooterFeature  $firstFooterFeature
     * @return \Illuminate\Http\Response
     */
    public function show(FirstFooterFeature $firstFooterFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirstFooterFeature  $firstFooterFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstFooterFeature $firstFooterFeature,$id)
    {
        $feature = FirstFooterFeature::findorFail($id);
        return view('web-settings.Features.editfeatures', compact('feature'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FirstFooterFeature  $firstFooterFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirstFooterFeature $firstFooterFeature,$id)
    {
        $feature = FirstFooterFeature::Findorfail($id);
        $feature->heading = $request->heading;
        $feature->description = $request->description;
        $feature->icon = $request->icon;
        $feature->button_value = $request->button_value;
        $feature->url = $request->url;
        if ($request->feature_div) {
            $feature->feature_div = $request->feature_div;
        } else {
            $feature->feature_div = 1;
        }
        $feature->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstFooterFeature  $firstFooterFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstFooterFeature $firstFooterFeature,$id)
    {
        $feature = FirstFooterFeature::destroy($id);
        return back();
    }
}
