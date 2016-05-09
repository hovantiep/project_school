<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['title','content','user_id','images','files'];

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
