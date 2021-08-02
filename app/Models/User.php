<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class,'user_id','id')->withDefault();
    }

    public function wallet()
    {
           return $this->hasOne(Wallet::class,'user_id','id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id','id','id');
    }

    public function directions()
    {
        return $this->hasMany(Direction::class,'user_id','id');
    }

    public function hasAbility($ability){
        foreach($this->roles as $role){
            if(in_array($ability,$role->abilities)){
                return true;
            }
        }
        return false;
    
    }
}
