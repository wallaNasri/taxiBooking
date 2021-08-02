<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaccountController extends Controller
{
    public function index()
    {
        $orders=Order::where('user_id',Auth::id())->get();
        return view('font.my-account',[
            'orders'=>$orders,
        ]);
    }
}
