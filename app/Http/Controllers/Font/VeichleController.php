<?php

namespace App\Http\Controllers\Font;

use App\Http\Controllers\Controller;
use App\Models\Veichle;
use Illuminate\Http\Request;

class VeichleController extends Controller
{
    public function show($id)
    {
        $veichle=Veichle::findOrFail($id);

        return view('font.booking',[
            'veichle'=>$veichle,

        ]);
    }
}
