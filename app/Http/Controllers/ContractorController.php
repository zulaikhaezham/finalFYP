<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Contractor;
use Auth;

class ContractorController extends Controller
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
    public function create($contractor_no)
    {
        // select * from staffs where staff_no = $contractor_no and find the first matched data
        return view('contractors.create', ['contractor' => Contractor::where('contractor_no', $contractor_no)->first()]);
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
        $contractor = Contractor::find(Auth::guard('contractor')->id());
        $contractor->address = $request->address;
        $contractor->postcode = $request->postcode;
        $contractor->city = $request->city;
        $contractor->state = $request->state;
        $contractor->phone_no = $request->phone_no;
        $contractor->email = $request->email;
        $contractor->save();
        
        Alert::success('Profile Update', 'Your Profile is Updated');    
        return view('contractors.show')->with('success', 'Profile updated successfully')
                                                ->with('contractor', $contractor);
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
