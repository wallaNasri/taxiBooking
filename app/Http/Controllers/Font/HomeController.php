<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Veichle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {     
        $veichles=Veichle::all();

         return view('font.home',[
            'veichles'=>$veichles,

         ]);
    }

}
