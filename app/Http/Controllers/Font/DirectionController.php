<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use App\View\Components\GuestLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DirectionController extends Controller
{
   public function store(Request $request)
   {
       $request->validate([
        'pick_up_location'=>'required',
        'drop_off_location'=>'required',
        'booking_time'=>'required',

       ]);
      if(!Auth::check()){
return redirect()->route('register');
      }
       $request->merge([
                'user_id'=>Auth::id(),
                'distance'=>1,
                'booking_time'=>$request->booking_time,
                
       ]);
       $direction=Direction::create($request->all());
       return redirect()->route('dir');
       
   }
}
