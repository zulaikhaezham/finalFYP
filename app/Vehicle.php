<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Admin;
use DB;

class Vehicle extends Model
{
    public $timestamps = false;
    protected $guarded=[];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class);
    }

    public function contractor(){
        return $this->belongsTo(Contractor::class);
    }


}
