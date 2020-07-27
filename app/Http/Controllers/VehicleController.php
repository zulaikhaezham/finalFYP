<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Vehicle;
use App\Car;
use App\Motorcycle;


class VehicleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(){   
        if (Auth::guard('student')->check()) {
            Alert::info('Info', 'Students are only allowed to register for 1 Car or 1 Motorcycle');
            return view('vehicles.create', ['student_level' => request('student_level')]);
            
        } if (Auth::guard('staff')->check()){
            return view('vehicles.create', ['dept_company' => request('staff_dept')]);
        }else{
            return view('vehicles.create', ['dept_company' => request('dept_company')]);
        }
    }

    public function store (Request $request) {

        if (Auth::guard('student')->check()) { //student
             if($request->type =='car'){ //student request for car
                $exist = Car::where('student_id',Auth::guard('student')->id())->exists();
                if($exist == true){
                    Alert::error('Oopss', 'You have reached your registration limit. Please proceed to payment');
                    return view('vehicles.limit_regist');
                } else {
                    $car = $this->store_car(Auth::guard('student')->id(), $staff = false, $student = true);
                    Alert::success('Vehicle Registration', 'Your Vehicle is Registered');
                    return view('vehicles.show_car', ['car'=> $car])->with('success', 'Vehicle Created Successfully');
                }

             } else { //student request for motorcycle
                 $exist = Motorcycle::where('student_id',Auth::guard('student')->id())->exists();
                 if($exist == true){
                    Alert::error('Oopss', 'You have reached your registration limit. Please proceed to payment');
                    return view('vehicles.limit_regist');

                 } else { 
                    $motorcycle = $this->store_motorcycle(Auth::guard('student')->id(), $staff = false, $student = true);
                    Alert::success('Vehicle Registration', 'Your Vehicle is Registered');
                    return view('vehicles.show_motorcycle', ['motorcycle'=> $motorcycle])->with('success', 'Vehicle Created Successfully');
                 
                }
             } 
                
        } elseif (Auth::guard('staff')->check()) { //staff
            if($request->type =='car') { //staff request for car
                $times = Car::where('staff_id', Auth::guard('staff')->id())->count();
                if($times > 1){
                    Alert::error('Oopss', 'You have reached your registration limit for car. 
                    Please proceed to payment');
                    return view('vehicles.limit_regist');
                } else {
                    $car = $this->store_car(Auth::guard('staff')->id(), $staff = true, $student = false);
                    return view('vehicles.show_car', ['car'=> $car])->with('success', 'Vehicle Created Successfully');

                }   
            } else { //staff request for motorcycle
                $times = Motorcycle::where('staff_id', Auth::guard('staff')->id())->count();
                if($times > 1){
                    Alert::error('Oopss', 'You have reached your registration limit for motorcycle. 
                    Please proceed to payment');
                    return view('vehicles.limit_regist');
                } else {
                    $motorcycle = $this->store_motorcycle(Auth::guard('staff')->id(), $staff = true, $student = false);
                    return view('vehicles.show_motorcycle', ['motorcycle'=> $motorcycle])->with('success', 'Vehicle Created Successfully');

                    
                }   
            }
         } else { // contractor 
            if($request->type =='car') { //contractor request for car
                $times = Car::where('contractor_id', Auth::guard('contractor')->id())->count();
                // dump($times);
                // dump(($times > 1));
                if($times > 1){
                    Alert::error('Oopss', 'You have reached your registration limit for car. 
                    Please proceed to payment');
                    return view('vehicles.limit_regist');
                } else {
                    $car = $this->store_car(Auth::guard('contractor')->id(), $staff = false, $student = false);
                    Alert::success('Vehicle Registration', 'Your Vehicle is Registered');
                    return view('vehicles.show_car', ['car'=> $car])->with('success', 'Vehicle Created Successfully');

                }   
            } else { //contractor request for motorcycle
                $times = Motorcycle::where('contractor_id', Auth::guard('contractor')->id())->count();
                // dump($times);
                // dump(($times > 1));
                if($times > 1){
                    Alert::error('Oopss', 'You have reached your registration limit for motorcycle. 
                    Please proceed to payment');
                    return view('vehicles.limit_regist');
                } else {
                    $motorcycle = $this->store_motorcycle(Auth::guard('contractor')->id(), $staff = false, $student = false);
                    Alert::success('Vehicle Registration', 'Your Vehicle is Registered');
                    return view('vehicles.show_motorcycle', ['motorcycle'=> $motorcycle])->with('success', 'Vehicle Created Successfully');
                }   
            }
        }    
    }

    public function store_car($id, $staff, $student){
        $car = Car::create(request()->all());
        $car->upload_license = basename(request('upload_license')->store('public/images')); //public/images
        $car->upload_roadtax = basename(request('upload_roadtax')->store('public/images'));
        $car->created_at = now();
        if($staff) {
            $car->staff_id = $id;  
        } elseif ($student) {
            $car->student_id = $id;  
        } else {
            $car->contractor_id = $id;  
        }
        $car->save();
        return $car;
    }

    public function store_motorcycle($id, $staff, $student){
        $motorcycle = Motorcycle::create(request()->all());
        $motorcycle->upload_license = basename(request('upload_license')->store('public/images'));
        $motorcycle->upload_roadtax = basename(request('upload_roadtax')->store('public/images'));
        $motorcycle->created_at = now();
        if($staff) {
            $motorcycle->staff_id = $id;  
        } elseif ($student) {
            $motorcycle->student_id = $id;  
        } else {
            $motorcycle->contractor_id = $id;  
        }
        $motorcycle->save();
        return $motorcycle;
    }


}
 
 
// return view('vehicles.show', ['vehicle'=> $vehicle])->with('success', 'Vehicle Created Successfully');
        // dd(request()->all()); //to see what you just input
        //$vehicle = Vehicle::create(request()->all()); //mass assignment
        // $path = request('upload_docs')->store('uploads');    
        // $vehicle = new Vehicle; //instentiate   
        //  $vehicle->type = request('type');
        // $vehicle->plate_no = request('plate_no');
        // $vehicle->model = request('model');
        // $vehicle->color = request('color');
        // $vehicle->created_at = now();
        // $vehicle->upload_docs = basename($path);

        // if (Auth::guard('student')->check()) {
        //     $vehicle->student_id =  Auth::guard('student')->id();
        // } elseif (Auth::guard('staff')->check()){
        //     $vehicle->staff_id =  Auth::guard('staff')->id();
        // } else {
        //     $vehicle->contractor_id =  Auth::guard('contractor')->id();
        // }
        // $vehicle->save();
        

        // return redirect()->back(); tak guna




//         ada 2 model

// 1 - Model User 
// 1 user hanya akan ada 1 kereta

// user.id = car.user_id

// 1- Model Car

// kalau dpt collection dri user


// $users = User::where('user_id', 1);

// boleh trus dapat data kereta dari situ


// $car_model = $user->thecar->model