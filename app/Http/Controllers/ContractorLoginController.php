<?php

namespace App\Http\Controllers;
use Auth;
use App\Contractor;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContractorLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:contractor');
    }

    public function login_form() {

    	return view('auth.contractor-login');
    } 

    public function login (Request $request) {
    	request()->validate([
        
            'contractor_no' => 'required',
            'password' => 'required|min:4'
    	]);
    
        $credentials = request()->only('contractor_no','password');

        if(Auth::guard('contractor')->attempt($credentials)){           
            return redirect()->intended(route('contractors.create', request('contractor_no') ));
        } 
        else
            return redirect()->back()->withInput(request()->only('contractor_no'))->with('error', 'Unmatched Credentials');
    }
    
}
