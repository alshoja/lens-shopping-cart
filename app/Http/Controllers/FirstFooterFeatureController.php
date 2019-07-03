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
        return view('web-settings.Features.feature');
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
    public function edit(FirstFooterFeature $firstFooterFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FirstFooterFeature  $firstFooterFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirstFooterFeature $firstFooterFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstFooterFeature  $firstFooterFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstFooterFeature $firstFooterFeature)
    {
        //
    }
}
