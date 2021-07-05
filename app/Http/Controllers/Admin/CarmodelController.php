<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Carmodel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarmodelController extends Controller
{
    public function index()
    {
        $carmodels=Carmodel::with('brand')->get();
        return view('admin.carmodels.index',[
            'carmodels'=>$carmodels,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        return view('admin.carmodels.create',[
            'brands'=>$brands,
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
            'name'=>"required|max:255|min:3|unique:carmodels,name",
            'brand_id'=>'required|exists:brands,id',
            'year'=>['required','numeric','gte:2000',function($attr,$value,$fail){
                $year=Carbon::now()->year;
                if($value>=$year){
                    $fail(':attribute must be less than' .$year);
                }

            }],
            'seats'=>'required|numeric|lte:10'
        ]);
       $carmodel=Carmodel::create($request->all());
        return redirect()->route('carmodels.index')->with('success','Car Model added');
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
        $carmodel=Carmodel::findOrFail($id);
        $brands=Brand::all();

        return view('admin.carmodels.edit',[
            'carmodel'=>$carmodel,
            'brands'=>$brands,
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
        $carmodel=Carmodel::findOrFail($id);
        $request->validate([
            'name'=>"required|max:255|min:3|unique:carmodels,name,$id",
            'brand_id'=>'required|exists:brands,id',
            'year'=>['required','numeric','gte:2000',function($attr,$value,$fail){
                $year=Carbon::now()->year;
                if($value>=$year){
                    $fail(':attribute must be less than' .$year);
                }

            }],
            'seats'=>'required|numeric|lte:10'
        ]);
       $carmodel->update($request->all());
        return redirect()->route('carmodels.index')->with('success','Car Model updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carmodel=Carmodel::findOrFail($id);
        $carmodel->delete();
        return redirect()->route('carmodels.index')->with('success','Car Model deleted');
    }
}
