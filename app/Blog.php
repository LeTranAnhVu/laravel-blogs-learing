<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
//    name of the table in sql
    protected $table = 'blogs';
    public function user (){
        return $this->belongsTo('App\User', 'author');
    }
}
