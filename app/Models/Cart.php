<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=['cart_id','veichle_id','direction_id','user_id'];

    public function veichle()
    {
        return $this->belongsTo(Veichle::class,'veichle_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id')->withDefault();
    }

    
    public function direction()
    {
        return $this->belongsTo(Direction::class,'direction_id','id')->withDefault();
    }
}
