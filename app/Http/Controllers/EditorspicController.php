<?php

namespace App\Http\Controllers;

use App\Models\Editorspic;
use Illuminate\Http\Request;

class EditorspicController extends Controller
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
        $editorspic = Editorspic::all();
        return view('web-settings.EditorPic.editorpic',compact('editorspic'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editorspic = new Editorspic;
        if (request()->file('image')) {
            $file = request()->file('image')->store('uploads');
        }
        $editorspic->heading = $request->heading;
        $editorspic->image = $file;
        $editorspic->hover_data = $request->hover_data;
        $editorspic->is_active = $request->is_active;
        $editorspic->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editorspic  $editorspic
     * @return \Illuminate\Http\Response
     */
    public function show(Editorspic $editorspic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editorspic  $editorspic
     * @return \Illuminate\Http\Response
     */
    public function edit(Editorspic $editorspic,$id)
    {
        $editorspic = Editorspic::Findorfail($id);
        return view('web-settings.EditorPic.editeditorpic',compact('editorspic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editorspic  $editorspic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editorspic $editorspic,$id)
    {
        $editorspic = Editorspic::findOrfail($id);

        if (request()->file('image')) {
            $file = request()->file('image')->store('uploads');
        }
        else {
            $file = $editorspic->image;
        }
        $editorspic->heading = $request->heading;
        $editorspic->image = $file;
        $editorspic->hover_data = $request->hover_data;
        $editorspic->is_active = $request->is_active;
        $editorspic->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editorspic  $editorspic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editorspic $editorspic,$id)
    {
        $editorspic = Editorspic::destroy($id);
        return back();
    }

    public function MakeActive(Editorspic $editorspic, $id)
    {
        $editorspic = Editorspic::where('id', $id)->update(['is_active' => '1']);
        $editorspic = Editorspic::where('id', '!=', $id)->update(['is_active' => '0']);
        return back();
    }
}
