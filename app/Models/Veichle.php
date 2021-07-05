<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veichle extends Model
{
    use HasFactory;

    protected $fillable=['model_id','image','car_number','color','license_number',
    'license_end_date','vin_number','status','owner_id_card','price'];
    
    protected $cast=[
        'price'=>'float',

    ];

    public function carmodel(){
        return $this->belongsTo(Carmodel::class,'model_id','id')->withDefault();
    }

    public function driver()
    {
        return $this->hasOne(DriverProfile::class,'veichle_id','id')->withDefault();
    }


    public function getImageUrlAttribute(){
        
        if($this->image)
        {
            if(strpos($this->image,'http')===0){
                return $this->image;
            }
            return asset('uploads/'.$this->image);
        }
        return asset('images/defoult.jpg');
    }
}
