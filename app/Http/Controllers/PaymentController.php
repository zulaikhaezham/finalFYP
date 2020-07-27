<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Payment;


class PaymentController extends Controller
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
            return view('payments.create', ['student_level' => request('student_level')]);
        } if (Auth::guard('staff')->check()){
            return view('payments.create', ['dept_company' => request('staff_dept')]);
        }else{
            return view('payments.create', ['dept_company' => request('dept_company')]);
        }
    }

    public function store () {
        // dd(request()->all()); //to see what you just input
        $path = request('upload_receipt')->store('public/images');
        //
        $payment = new Payment; //instentiate   
        $payment->amount = request('amount');
        $payment->created_at = now();
        $payment->upload_receipt = basename($path);
        if (Auth::guard('student')->check()) {
            $payment->student_id =  Auth::guard('student')->id();
        } elseif (Auth::guard('staff')->check()){
            $payment->staff_id =  Auth::guard('staff')->id();
        } else {
            $payment->contractor_id =  Auth::guard('contractor')->id();
        }
        $payment->save();


        // $payment= Payment::create(request()->all()); // mass assignment 
        // return redirect()->back();
        Alert::success('Payment Success', 'Your Payment is Successful');  
        return view('payments.show', ['payment'=> $payment])->with('success', 'Payment Successfull');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
