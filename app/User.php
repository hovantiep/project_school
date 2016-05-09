<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function news()
    {
        return $this->hasMany('App\News','user_id','id');
    }

    public function notifications()
    {
        return $this->hasMany('App\Notification','user_id','id');
    }

    public function documents()
    {
        return $this->hasMany('App\Document','user_id','id');
    }
}
