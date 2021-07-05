<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    use HasFactory;
    protected $fillable=['brand_id','name','fuel_type','motor_type','seats','year'];

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id')->withDefault();
    }


    public function veichles(){
        return $this->hasMany(Veichle::class,'model_id','id');
    }

}
