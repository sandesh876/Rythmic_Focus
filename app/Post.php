<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        'toppings' => 'array'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
