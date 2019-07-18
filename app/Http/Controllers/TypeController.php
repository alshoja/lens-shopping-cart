<?php

namespace App\Http\Controllers;
use App\Models\Type;
use Illuminate\Http\Request;
use Auth;
use App\Models\Categorie;
class TypeController extends Controller
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
        $type = Type::with('category')->get();
        $category = Categorie::all();
        //return response()->json($type, 200);
        return view('stock-settings.type.type',compact('type','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type;
        $type->name = $request->name;
        $type->category_id = $request->category_id;
        $type->user_id = Auth::user()->id;
        $type->save();
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
        $type = Type::with('category')->findorFail($id);
        $category = Categorie::all();
        return view('stock-settings.type.edittype',compact('type','category'));
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
        $type = Type::findorFail($id);
        
        if ($request->category_id) {
            $type->category_id = $request->category_id;
        } else {
            $type->category_id = $type->category_id;
        }
        
        $type->name = $request->name;
        $type->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::destroy($id);
        return back();
    }
}
