<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('admin.brands.index',[
            'brands'=>$brands,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.brands.create');

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
            'name'=>"required|max:255|min:3|unique:brands,name",
            'image'=>'image'
        ]);
        $data=request()->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $data['image']=$file->store('/image','uploads');
        }
       $brand=Brand::create($data);
        return redirect()->route('brands.index')->with('success','Brand added');
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
        $brand=Brand::findOrFail($id);

        return view('admin.brands.edit',[
            'brand'=>$brand,
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
        $brand=Brand::findOrFail($id);
        $request->validate([
            'name'=>"required|max:255|min:3|unique:brands,name,$id",
            'image'=>'image'
        ]);

        $previous=false;
        if($request->hasFile('image')){
            $file=$request->file('image');
 
            $image=$file->store('/image','uploads');
 
            $previous=$brand->image;
        }

        $brand->update($request->all());
        $brand->image=$image;
        $brand->save();

        if($previous){
            Storage::disk('uploads')->delete($previous);
        }
        return redirect()->route('brands.index')->with('success','Brand updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::findOrFail($id);
        $brand->delete();
        if($brand->image){
            Storage::disk('uploads')->delete($brand->image);
        }
        return redirect()->route('brands.index')->with('success','Brand deleted');


    }
}
