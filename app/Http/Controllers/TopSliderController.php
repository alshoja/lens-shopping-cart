<?php

namespace App\Http\Controllers;

use App\Models\TopSlider;
use Illuminate\Http\Request;

class TopSliderController extends Controller
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
        $sliders = TopSlider::paginate(5);
        return view('web-settings.Homeslider.slider',compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider =  new TopSlider;
        $file = request()->file('image')->store('uploads');
        $slider->main_heading = $request->title;
        $slider->image = $file;
        $slider->sub_heading = $request->sub_title;
        $slider->button_value = $request->button_value;
        $slider->order = 1;
        $slider->isActive = 0;
        $slider->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function show(TopSlider $topSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(TopSlider $topSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopSlider $topSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopSlider  $topSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopSlider $topSlider)
    {
        //
    }
}
