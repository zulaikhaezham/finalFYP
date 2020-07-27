<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Debit;


class DebitController extends Controller
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
    public function create()
    {   if (Auth::guard('student')->check()) {
            return view('debits.create', ['student_level' => request('student_level')]);
        } if (Auth::guard('staff')->check()){
            return view('debits.create', ['dept_company' => request('staff_dept')]);
        }else{
            return view('debits.create', ['dept_company' => request('dept_company')]);
        }
    }

    public function store () {
        $debit = new Debit; //instentiate   
        $debit->name = request('name');
        $debit->cvv = request('cvv');
        $debit->card_no = request('card_no');
        $debit->expiration_date = request('expiration_date');
        $debit->created_at = now();
    
        if (Auth::guard('student')->check()) {
            $debit->student_id =  Auth::guard('student')->id();
        } elseif (Auth::guard('staff')->check()){
            $debit->staff_id =  Auth::guard('staff')->id();
        } else {
            $debit->contractor_id =  Auth::guard('contractor')->id();
        }
        $debit->save();


        // $debit= Debit::create(request()->all()); // mass assignment 
        // return redirect()->back();
        
        Alert::success('Payment Success', 'Your Payment is Successful');  
        return view('debits.show', ['debit'=> $debit])->with('success', 'Payment Successfull');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   //not a mass assignment
        $debit = Debit::find(Auth::guard('debit')->id());
        
        $debit->save();
        
            
        return view('debits.show')->with('success', 'Transaction ID updated successfully')
                                                ->with('debit', $debit);
    }
}
