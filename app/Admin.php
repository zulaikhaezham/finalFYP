<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Admin;
use DB;

// use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    public $timestamps = false;
    use Notifiable;

    protected $guard = 'admin';
    
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
