<?php

namespace App\Http\Controllers;
use Auth;
use App\Staff;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:staff');
    }

    public function login_form() {
    	return view('auth.staff-login');
    } 

    public function login (Request $request) {
    	request()->validate([
            
            'staff_no' => 'required',
            'password' => 'required|min:4'
    	]);
    	
        $credentials = request()->only('staff_no','password');
        

        if(Auth::guard('staff')->attempt($credentials)){            
            return redirect()->intended(route('staffs.create', request('staff_no') ));
        } 
        else
            return redirect()->back()->withInput(request()->only('staff_no'))->with('error', 'Unmatched Credentials');
    }
    
}
