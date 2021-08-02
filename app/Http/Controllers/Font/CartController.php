<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Direction;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;


class CartController extends Controller
{
     public function store($id)
     {
            $cid=Cookie::get('cart_id');
        
            if(!$cid){
                $cid=Str::uuid();
                Cookie::queue('cart_id',$cid,60*24*30);
                
            }

            $direction=Direction::where('user_id',Auth::id())->latest()->take(1)->first();
            $dir_id=$direction->id;

            $cart=Cart::create([
                'user_id'=>Auth::id(),
                'veichle_id'=>$id,
                'cart_id'=>$cid,
                'direction_id'=>$dir_id,
            ]);

            return redirect()->route('info');
      
     }

     public function index()
     {
        $cart=Cart::where('cart_id',Cookie::get('cart_id'))->first();
        $direction=Direction::where('user_id',Auth::id())->latest()->take(1)->first();


         return view('font.info',[
            'cart'=>$cart,
            'direction'=>$direction,
  
        ]);
     }
}
