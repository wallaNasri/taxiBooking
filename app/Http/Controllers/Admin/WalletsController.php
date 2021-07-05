<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets=Wallet::with('user')->paginate();
        return view('admin.wallets.index',[
           'wallets'=>$wallets,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('admin.wallets.create');
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
            'name'=>'required',
        ]);
        $user=User::when($request->name,function($query,$value){
            $query->where('name','LIKE',"%$value%");
        })->first();
        if($user){
        $request->merge([
            'user_id'=>$user->id,
        ]);

        $wallet=Wallet::create($request->all());
        return redirect()->route('wallets.index')->with('success','wallet added');
    }
    else{
        return redirect()->back()->withInput()->with('error','Invalid user name ');
    }
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
        $wallet=Wallet::findOrFail($id);
        return view('admin.wallets.edit',[
            'wallet'=>$wallet
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
        $wallet=Wallet::findOrFail($id);
        $request->validate([
            'name'=>'required',
        ]);

        $user=User::when($request->name,function($query,$value){
            $query->where('name','LIKE',"%$value%");
        })->first();
        if($user){
        $request->merge([
            'user_id'=>$user->id,
        ]);

        $wallet->update($request->all());
        return redirect()->route('wallets.index')->with('success','wallet updated');
    }
    else{
        return redirect()->back()->withInput()->with('error','Invalid user name ');
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wallet=Wallet::findOrFail($id);
          $wallet->delete();
          return redirect()->route('wallets.index')->with('success','wallet deleted');


    }
}
