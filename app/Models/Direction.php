<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;
    protected $fillable=['user_id','pick_up_location','drop_off_location','distance','booking_time'];
    protected $casts=[
        'distance'=>'float'

    ];

    public function user()
    {
        return $this->belongsTo(Direction::class,'user_id','id')->withDefault();
    }
}
