<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $this->authorize('view-any',Role::class);

        $roles=Role::paginate();
        return view('admin.roles.index',[
         'roles'=>$roles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
        return view('admin.roles.create',[
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
      //  $this->authorize('create',Role::class);

       $request->validate([
           'name'=>'required|unique:roles,name',
           'abilities'=>'required|array',
       ]);
       $role=Role::create($request->all());
       $id= $role->id;

       if($request->names){

       $user=User::when($request->names,function($query,$value){
        $query->where('users.name','LIKE',"%$value%");
    })->first();
    $user->roles()->attach($id);}
    
    if($request->user_type){
    $users=User::when($request->user_type,function($query,$value){
        $query->where('users.type',$value);
    })->get();
    
    foreach($users as $user){
        $user->roles()->attach($id);

    }}
    
       return redirect()->route('roles.index')->with('success','Role created');
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
        $role=Role::findOrFail($id);
      //  $this->authorize('update',$role);

        return view('admin.roles.edit',[
            'role'=>$role,
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
        $role=Role::findOrFail($id);
      //  $this->authorize('update',$role);

        $request->validate([
            'name'=>'required',
            'abilities'=>'required|array',
        ]);
        $role->update($request->all());
        return redirect()->route('roles.index')->with('success','Role updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::findOrFail($id);
        //$this->authorize('delete',$role);
        $role->users()->detach();
        $role->delete();
        return redirect()->route('roles.index')->with('success','Role deleted');

    }
}
