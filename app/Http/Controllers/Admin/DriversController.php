<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\DriverProfile;
use App\Models\Veichle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles=DriverProfile::with('user','area','veichle')->paginate();
        return view('admin.driverProfiles.index',[
            'profiles'=>$profiles,
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
        $areas=Area::all();
        return view('admin.driverProfiles.create',[
            'areas'=>$areas,
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
            'full_name'=>'required|min:10|unique:profiles,full_name',
            'id_number'=>'required|size:9|unique:driver_profiles,id_number',
            'driving_license_number'=>'required|size:7',
            'driving_license_expiry_date'=>'required|date',
            'mobile'=>'required|regex:/05[96][-]\d{7}/|unique:profiles,mobile',
            'area_id'=>'required|exists:areas,id',
            'adresss'=>'required',
            'avatar'=>'image',
        ]);

        request()->merge([
            
            'user_id'=>Auth::user()->id,
        ]);

        $data=request()->all();
       if($request->hasFile('avatar')){
           $file=$request->file('avatar');
           $data['avatar']=$file->store('/image','uploads');
       }

        
        $user=Auth::user();
        $profile=DriverProfile::create($data);
        $profile->user()->associate($user);
        $profile->user()->update([
            'type'=>'driver',
      ]);
        $profile->save();

        return redirect()->route('drivers.index')->with('success','Profile for driver added');

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
        $cities=City::all();
        $areas=Area::all();  

        $profile=DriverProfile::where('user_id',$id)->first();
        return view('admin.driverProfiles.edit',[
            'profile'=>$profile,
            'areas'=>$areas,
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
        $profile=DriverProfile::where('user_id',$id)->first();
        $avatar=$profile->avatar;

        $request->validate([
           
                Rule::unique('driver_profiles','full_name')->ignore($profile->id, 'user_id'),
                Rule::unique('driver_profiles','mobile')->ignore($profile->id, 'user_id'),
                Rule::unique('driver_profiles','id_number')->ignore($profile->id, 'user_id'),


           
                'full_name'=>'required|min:10',
                'id_number'=>'required|size:9',
                'driving_license_number'=>'required|size:7',
                'driving_license_expiry_date'=>'required|date',
                'mobile'=>'required|regex:/05[96][-]\d{7}/',
                'area_id'=>'required|exists:areas,id',
                'adresss'=>'required',
                'avatar'=>'image',
                
        ]);

       

        $previous=false;
       if($request->hasFile('avatar')){
           $file=$request->file('avatar');

           $avatar=$file->store('/image','uploads');

           $previous=$profile->avatar;   
       }
       
       $profile->user_id=Auth::user()->id;
       $profile->full_name=$request->full_name;
       $profile->mobile=$request->mobile;
       $profile->area_id=$request->area_id;
       $profile->adresss=$request->adresss;

       $profile->id_number=$request->id_number;
       $profile->driving_license_number=$request->driving_license_number;
       $profile->driving_license_expiry_date=$request->driving_license_expiry_date;

       $profile->avatar=$avatar;
       $profile->save();

        if($previous){
            Storage::disk('uploads')->delete($previous);
        }
       

        return redirect()->route('drivers.index')->with('success','Profile of driver updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile=DriverProfile::where('user_id',$id)->first();
        $profile->delete();

        if($profile->avatar){
            Storage::disk('uploads')->delete($profile->avatar);
        }

        return redirect()->route('drivers.index')
       ->with('success',"Profile of driver deleted!");
    }
}
