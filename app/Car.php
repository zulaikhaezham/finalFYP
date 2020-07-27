<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Admin;

class Car extends Model
{
    public $timestamps = false;
    protected $guarded=[];
    protected $fillable = [
        'plate_no','model','color','upload_id_card','upload_license','upload_roadtax',
   ];

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
