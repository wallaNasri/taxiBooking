<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable=['name','status','city_id'];

    public function city()
    {
        return $this->belongsTo(City::class,'city_id','id')->withDefault();
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class,'area_id','id');
    }
}


