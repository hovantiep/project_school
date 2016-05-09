<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title','summary','content','image','status','keywords','category_id','user_id'];

    public function category()
    {
        return $this->hasOne('App/Category','id','category_id');
    }

    public function user()
    {
        return $this->hasOne('App/User','id','user_id');
    }
}
