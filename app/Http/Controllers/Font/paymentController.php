<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paymentController extends Controller
{
    public function store()
    {
        $order=Order::where('user_id',Auth::id())->latest()->take(1)->first();
        $wallet=Wallet::where('user_id',Auth::id())->first();
        $price=$order->price;
        $balance=$wallet->balance;

        return view('font.payment',[
             'balance'=>$balance,
             'price'=>$price,
        ]);
    }
}
