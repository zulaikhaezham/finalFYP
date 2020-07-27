<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Vehicle;
use App\Car;
use App\Motorcycle;
use App\Payment;
use App\Admin;
use DB;
class Student extends Authenticatable
{
    public $timestamps = false;
    use Notifiable;
    protected $guard = 'student';
    
    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
    public function cars() {
        return $this->hasOne(Car::class);
    }
    public function motorcycles() {
        return $this->hasOne(Motorcycle::class);
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'password', 'matric_no',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
