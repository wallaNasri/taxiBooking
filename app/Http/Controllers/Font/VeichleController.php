<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Direction;
use App\Models\Order;
use App\Models\Veichle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class VeichleController extends Controller
{
    public function show()
    {
        global $veichles;
        $veichles = array();
        
        $direction=Direction::where('user_id',Auth::id())->latest()->take(1)->first();
       // $veichles=Veichle::all();
       $pickup_time=$direction->booking_time;
      
       $veiichles=Veichle::all();
      foreach($veiichles as $veichle){
        $order= $veichle->orders()->latest()->take(1)->first();
        if($order->return_time < $pickup_time){
            $veichles[]= ($order->veichle()->first());
        }
        
          
    }
        
    

        return view('font.booking',[
            'veichles'=>$veichles,
            'direction'=>$direction, 

        ]);
    }
}
