<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','alias','order','parent_id','keywords','description'];

    public function news(){
        return $this->hasMany('App/News','category_id','id');
    }
}
