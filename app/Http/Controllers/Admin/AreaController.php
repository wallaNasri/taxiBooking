<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=Area::with('city')->get();
        return view('admin.areas.index',[
            'areas'=>$areas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::all();
        return view('admin.areas.create',[
            'cities'=>$cities,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|max:255|min:3|unique:areas,name",
            'city_id'=>'required|exists:cities,id',
            'status'=>'required'
        ]);
       $area=Area::create($request->all());
        return redirect()->route('areas.index')->with('success','Area added');
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
        $area=Area::findOrFail($id);
        $cities=City::all();

        return view('admin.areas.edit',[
            'area'=>$area,
            'cities'=>$cities,
        ]);
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
        $area=Area::findOrFail($id);
        $request->validate([
            'name'=>"required|max:255|min:3|unique:areas,name,$id",
            'city_id'=>'required|exists:cities,id',
            'status'=>'required'
        ]);
       $area->update($request->all());
        return redirect()->route('areas.index')->with('success','Area updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area=Area::findOrFail($id);
        $area->delete();
        return redirect()->route('areas.index')->with('success','Area deleted');
    }
}
