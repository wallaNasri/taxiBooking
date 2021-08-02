<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['user_id','veichle_id','full_name','email','phone',
    'passenger','message','pick_up_location','drop_off_location','price','return_time','booking_time'];

    protected $casts=[
        'passenger'=>'int',
        'price'=>'float',
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function veichle()
    {
        return $this->belongsTo(Veichle::class)->withDefault();
    }
}
