<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{
    public function post(){
        return $this->hasMany('App\Post');
    }
}
