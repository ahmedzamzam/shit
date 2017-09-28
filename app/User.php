<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use \Illuminate\Auth\Authenticatable;

    public function services(){
        return $this->hasMany('App\Ser');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }
}
