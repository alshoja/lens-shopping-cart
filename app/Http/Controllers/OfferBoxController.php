<?php

namespace App\Http\Controllers;

use App\Models\OfferBox;
use Illuminate\Http\Request;

class OfferBoxController extends Controller
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
        $offer = OfferBox::first();
        return view('web-settings.offerbox.offer', compact('offer'));
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
     * @param  \App\Models\OfferBox  $offerBox
     * @return \Illuminate\Http\Response
     */
    public function show(OfferBox $offerBox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfferBox  $offerBox
     * @return \Illuminate\Http\Response
     */
    public function edit(OfferBox $offerBox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfferBox  $offerBox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferBox $offerBox)
    {
        $offer = OfferBox::first();
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->textbox_label = $request->textbox_label;
        $offer->button_value = $request->button_value;
        $offer->href_tittle = $request->href_tittle;
        $offer->href_url = $request->href_url;
        if ($request->isActive == null) {
            $offer->isActive = 0;
        } else {
            $offer->isActive = 1;
        }

        $offer->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfferBox  $offerBox
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferBox $offerBox)
    {
        //
    }
}
