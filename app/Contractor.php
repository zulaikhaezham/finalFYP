<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Vehicle;
use App\Payment;
use App\Admin;
use DB;

// use Illuminate\Database\Eloquent\Model;

class Contractor extends Authenticatable
{
    public $timestamps = false;
    use Notifiable;

    protected $guard = 'contractor';
    
    protected $guarded = [];

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
