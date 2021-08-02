<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Veichle;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required|min:3',
             'email'=>'required|email',
             'phone'=>'required|regex:/^05[96][-]\d{7}$/',
             'passenger'=>'required|numeric|min:1|max:10'
        ]);

        $cart=Cart::where('cart_id',Cookie::get('cart_id'))->first();
         $vei_id=$cart->veichle_id;

         $v=Veichle::findOrFail($vei_id);
         $pricePerKm=$v->price;

         $dir1=$cart->direction->pick_up_location;         
         $dir2=$cart->direction->drop_off_location;
         $dis=$cart->direction->distance;
         $pickup_time=$cart->direction->booking_time;
         $price=$pricePerKm*$dis/1000;


       

         

              $request->merge([
                'user_id'=>Auth::id(),
                'veichle_id'=>$vei_id,
                'pick_up_location'=>$dir1,
                'drop_off_location'=>$dir2,
                'price'=>$price,
                'booking_time'=>$pickup_time,
            ]);

            $wallet=Wallet::where('user_id',Auth::id())->first();
         $balance=$wallet->balance;
         $balance=$balance-$price;
         if($balance<0)
         {
            return redirect()->back()->with('error','You have no balace enough')->withInput();

         }

         $wallet->update([
             'balance'=>$balance,
         ]);
         $wallet->save();

        $order=Order::create($request->all());
     
        
        $cart=Cart::where('cart_id',Cookie::get('cart_id'))->delete();

        return redirect()->route('payment');


}
}
