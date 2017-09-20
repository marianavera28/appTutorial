<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    protected $fillable = ['name','email','password','type'];

    protected $hidden = ['password','remember_token'];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}
