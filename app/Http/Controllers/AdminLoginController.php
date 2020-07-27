<?php

namespace App\Http\Controllers;
use Auth;
use App\Admin;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function login_form() {

    	return view('auth.admin-login');
    } 

    public function login (Request $request) {
    	request()->validate([
        
            'admin_no' => 'required',
            'password' => 'required|min:4'
    	]);
    
        $credentials = request()->only('admin_no','password');

        if(Auth::guard('admin')->attempt($credentials)){           
            return redirect()->intended(route('admins.show', request('admin_no') ));
        } 
        else
            return redirect()->back()->withInput(request()->only('admin_no'))->with('error', 'Unmatched Credentials');
    }
    
}
