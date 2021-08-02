<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverProfile extends Model
{
    use HasFactory;

    protected $fillable=['user_id','full_name','mobile','adresss','area_id','avatar','id_number',
    'driving_license_number','driving_license_expiry_date'];


    protected $primaryKey='user_id';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id')->withDefault();
    }

    public function area()
    {
        return $this->belongsTo(Area::class,'area_id','id')->withDefault();
    }

    



    public function getAvatarUrlAttribute(){
        
        if($this->avatar)
        {
            if(strpos($this->avatar,'http')===0){
                return $this->avatar;
            }
            return asset('uploads/'.$this->avatar);
        }
        return asset('images/defoult.jpg');
    }
}
