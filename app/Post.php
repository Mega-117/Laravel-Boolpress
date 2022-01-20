<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'text', 
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->hasMany('App\Category');
    }
}
