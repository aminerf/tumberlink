<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function register(){
        return $this->belongsTo('App\User');
    }
}
