<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Alert;

class PartnerController extends Controller
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

        $team = Partner::all();
        return view('web-settings.OurTeam.teams',compact('team'))->with('success', 'Profile updated!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Partner;
        if (request()->file('image')) {
            $file = request()->file('image')->store('uploads');
        }
        $team->name = $request->name;
        $team->image = $file;
        $team->position = $request->position;
        $team->fb_link = $request->fb_link;
        $team->twitter_link = $request->twitter_link;
        $team->insta_link = $request->insta_link;
        $team->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner,$id)
    {
        $team = Partner::Findorfail($id);
        return view('web-settings.OurTeam.editteam',compact('team'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner,$id)
    {
        $team = Partner::findorFail($id);
        if (request()->file('image')) {
            $file = request()->file('image')->store('uploads');
        } else {
            $file = $team->image;
        }
        $team->name = $request->name;
        $team->image = $file;
        $team->position = $request->position;
        $team->fb_link = $request->fb_link;
        $team->twitter_link = $request->twitter_link;
        $team->insta_link = $request->insta_link;
        $team->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner,$id)
    {
        $team = Partner::destroy($id);
        return back();
    }
}
