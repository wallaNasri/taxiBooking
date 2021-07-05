<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=['name','image'];

    public function carmodels()
    {
        return $this->hasMany(Carmodel::class,'brand_id','id');
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
