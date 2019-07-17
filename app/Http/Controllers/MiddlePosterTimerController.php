<?php

namespace App\Http\Controllers;

use App\Models\MiddlePosterTimer;
use Illuminate\Http\Request;

class MiddlePosterTimerController extends Controller
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
        $timer = MiddlePosterTimer::first();
        return view('web-settings.Hometimer.hometimer',compact('timer'));
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
     * @param  \App\Models\MiddlePosterTimer  $middlePosterTimer
     * @return \Illuminate\Http\Response
     */
    public function show(MiddlePosterTimer $middlePosterTimer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MiddlePosterTimer  $middlePosterTimer
     * @return \Illuminate\Http\Response
     */
    public function edit(MiddlePosterTimer $middlePosterTimer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MiddlePosterTimer  $middlePosterTimer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MiddlePosterTimer $middlePosterTimer)
    {
        $timer = MiddlePosterTimer::first();
        if (request()->file('poster_image')) {
            $file = request()->file('poster_image')->store('uploads');
        } else {
            $file = $timer->poster_image;
        }
        $timer->poster_image = $file;
        $timer->title = $request->title;
        $timer->timestamp = $request->timestamp;
        $timer->save();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MiddlePosterTimer  $middlePosterTimer
     * @return \Illuminate\Http\Response
     */
    public function destroy(MiddlePosterTimer $middlePosterTimer)
    {
        //
    }
}
