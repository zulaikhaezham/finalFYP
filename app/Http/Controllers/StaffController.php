<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Staff;
use Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($staff_no)
    {
        // select * from staffs where staff_no = $staff_no and find the first matched data
        return view('staffs.create', ['staff' => Staff::where('staff_no', $staff_no)->first()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $staff = Staff::find(Auth::guard('staff')->id());
        $staff->address = $request->address;
        $staff->postcode = $request->postcode;
        $staff->city = $request->city;
        $staff->state = $request->state;
        $staff->phone_no = $request->phone_no;
        $staff->email = $request->email;
        $staff->save();
        
        Alert::success('Profile Update', 'Your Profile is Updated');    
        return view('staffs.show')->with('success', 'Pofile updated successfully')
                                                ->with('staff', $staff);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
