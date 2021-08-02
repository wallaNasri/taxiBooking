<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutoAddressController extends Controller
{
    public function googleAutoAddress()
    {
        $dir=Direction::where('user_id',Auth::id())->latest()->take(1)->first();
        
    	return view('direction',[
            'dir'=>$dir,
        ]);
    }
}
