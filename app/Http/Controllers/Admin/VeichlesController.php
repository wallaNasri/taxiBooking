<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Carmodel;
use App\Models\Veichle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VeichlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veichles=Veichle::with('carmodel')->paginate();
        return view('admin.veichles.index',[
            'veichles'=>$veichles,
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
        $carmodels=Carmodel::all();
        return view('admin.veichles.create',[
            'brands'=>$brands,
            'carmodels'=>$carmodels,

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
            'model_id'=>'required|exists:carmodels,id',
            'image'=>'image',
            'car_number'=>'required',
            'color'=>'required',
            'price'=>'required|numeric',
            'license_number'=>'required',
            'license_end_date'=>'required|date',
            'vin_number'=>'required|size:17|unique:veichles,vin_number',
            'owner_id_card'=>'required',
        ]);
           
        $data=request()->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $data['image']=$file->store('/image','uploads');
        }

        $veichles=Veichle::create($data);

        return redirect()->route('veichles.index')->with('success','Veichle added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands=Brand::all();
        $carmodels=Carmodel::all();

        $veichle=Veichle::FindOrFail($id);
        return view('admin.veichles.edit',[
            'veichle'=>$veichle,
            'brands'=>$brands,
            'carmodels'=>$carmodels,
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
        $veichle=Veichle::FindOrFail($id);

        $request->validate([
            'model_id'=>'required|exists:carmodels,id',
            'image'=>'image',
            'car_number'=>'required',
            'color'=>'required',
            'price'=>'required|numeric',
            'license_number'=>'required',
            'license_end_date'=>'required|date',
            'vin_number'=>"required|unique:veichles,vin_number,$id",
            'owner_id_card'=>'required',
        ]);

        $previous=false;
        $data=request()->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
 
            $image=$file->store('/image','uploads');
 
            $previous=$veichle->image; 
            $data['image']=$image;
  
        }

        $veichle->update($data);

        if($previous){
            Storage::disk('uploads')->delete($previous);
        }
       

        return redirect()->route('veichles.index')->with('success','Veichle updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veichle=Veichle::FindOrFail($id);
        $veichle->delete();
        if($veichle->image){
            Storage::disk('uploads')->delete($veichle->image);
        }

        return redirect()->route('veichles.index')
       ->with('success',"Veichle deleted!");
    }
}
