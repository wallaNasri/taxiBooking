<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view-any',Profile::class);
        $profiles=Profile::with('user','area')->paginate();
        return view('admin.profiles.index',[
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
        $this->authorize('create',Profile::class);
        $cities=City::all();
        $areas=Area::all();
        return view('admin.profiles.create',[
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
        $this->authorize('create',Profile::class);
        $request->validate([
            'full_name'=>'required|min:10|unique:profiles,full_name',
            'mobile'=>'required|regex:/05[96][-]\d{7}/|unique:profiles,mobile',
            'area_id'=>'required|exists:areas,id',
            'adresss'=>'required',
            'avatar'=>'image',
            'account_status'=>'required',
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
        $profile=Profile::create($data);
        $profile->user()->associate($user);
        $profile->user()->update([
              'type'=>'user',
        ]);
        $profile->user->roles()->attach(2);
        $profile->save();

       
      
        

        return redirect()->route('profiles.index')->with('success','Profile added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile=Profile::where('user_id',$id)->first();
        $this->authorize('view',$profile);
        return $profile;
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

        $profile=Profile::where('user_id',$id)->first();
        $this->authorize('update',$profile);
        return view('admin.profiles.edit',[
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
        $profile=Profile::where('user_id',$id)->first();
        $this->authorize('update',$profile);

         $avatar=$profile->avatar;

        $request->validate([
           
                Rule::unique('profiles','full_name')->ignore($profile->id, 'user_id'),
                Rule::unique('profiles','mobile')->ignore($profile->id, 'user_id'),

           
            'mobile'=>'required|regex:/05[96][-]\d{7}/',
            'area_id'=>'required|exists:areas,id',
            'adresss'=>'required',
            'avatar'=>'image',
            'account_status'=>'required',
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
       $profile->account_status=$request->account_status;
       $profile->avatar=$avatar;
       $profile->save();

        if($previous){
            Storage::disk('uploads')->delete($previous);
        }
       

        return redirect()->route('profiles.index')->with('success','Profile updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile=Profile::where('user_id',$id)->first();
        $this->authorize('delete',$profile);

        $profile->delete();

        if($profile->avatar){
            Storage::disk('uploads')->delete($profile->avatar);
        }

        return redirect()->route('profiles.index')
       ->with('success',"Profile deleted!");

    }
}
