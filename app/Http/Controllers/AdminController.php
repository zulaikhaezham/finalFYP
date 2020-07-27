<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\SuccessfulMail;
use App\Mail\CancelMail;
use Illuminate\Http\Request;
use App\Admin;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Payment;
use App\Car;
use App\Motorcycle;
use App\Vehicle;
use Auth;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_detail($id)
    {

        $result=array();
        $motorcycle = DB::table('staffs')
        ->join ('motorcycles', 'staffs.id', '=', 'motorcycles.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'motorcycles.staff_id')
        ->where('staffs.id',$id)
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        return view('admins\show_detail')->with('result',$result);
    }

    public function show_detailstudent($id)
    {

        $result=array();
        $motorcycle = DB::table('students')
        ->join ('motorcycles', 'students.id', '=', 'motorcycles.student_id')
        ->join ('payments', 'payments.student_id', '=', 'motorcycles.student_id')
        ->where('students.id',$id)
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        return view('adminsstudent\show_detailstudent')->with('result',$result);
    }

    public function show_detailcontractor($id)
    {

        $result=array();
        $motorcycle = DB::table('contractors')
        ->join ('motorcycles', 'contractors.id', '=', 'motorcycles.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'motorcycles.contractor_id')
        ->where('contractors.id',$id)
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        return view('adminscontractor\show_detailcontractor')->with('result',$result);
    }

    public function show_detailcar($id)
    {
       
   
        $result=array();
        $car = DB::table('staffs')
        ->join ('cars', 'staffs.id', '=', 'cars.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'cars.staff_id')
        ->where('staffs.id',$id)
        ->get()->toArray();
    
        $result['car']=$car;
        return view('admins\show_detailcar')->with('result',$result);
    }

    public function show_detailstudentcar($id)
    {
        $result=array();
        $car = DB::table('students')
        ->join ('cars', 'students.id', '=', 'cars.student_id')
        ->join ('payments', 'payments.student_id', '=', 'cars.student_id')
        ->where('students.id',$id)
        ->get()->toArray();
    
        $result['car']=$car;
        return view('adminsstudent\show_detailstudentcar')->with('result',$result);
    }

    public function show_detailcontractorcar($id)
    {
        $result=array();
        $car = DB::table('contractors')
        ->join ('cars', 'contractors.id', '=', 'cars.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'cars.contractor_id')
        ->where('contractors.id',$id)
        ->get()->toArray();
    
        $result['car']=$car;
        return view('adminscontractor\show_detailcontractorcar')->with('result',$result);
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        
    }

    public function show()
    {
        $result=array();
        $motorcycle = DB::table('staffs')
        ->join ('motorcycles', 'staffs.id', '=', 'motorcycles.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'motorcycles.staff_id')
        ->select('staffs.name','staffs.id', 'staffs.dept','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
         $car = DB::table('staffs')
        ->join ('cars', 'staffs.id', '=', 'cars.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'cars.staff_id')
        ->select('staffs.name','staffs.id', 'staffs.dept','cars.upload_license', 'cars.upload_roadtax', 'payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
       return view('admins\show')->with('result',$result);
        
        
    }

    public function showstudent()
    {
        $result=array();
        $motorcycle = DB::table('students')
        ->join ('motorcycles', 'students.id', '=', 'motorcycles.student_id')
        ->join ('payments', 'payments.student_id', '=', 'motorcycles.student_id')
        ->select('students.name','students.id', 'students.kuliyyah','students.level','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
         $car = DB::table('students')
        ->join ('cars', 'students.id', '=', 'cars.student_id')
        ->join ('payments', 'payments.student_id', '=', 'cars.student_id')
        ->select('students.name','students.id', 'students.kuliyyah','students.level','cars.upload_license', 'cars.upload_roadtax', 'payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
       return view('adminsstudent\showstudent')->with('result',$result);
        
        
    }

    public function showcontractor()
    {
        $result=array();
        $motorcycle = DB::table('contractors')
        ->join ('motorcycles', 'contractors.id', '=', 'motorcycles.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'motorcycles.contractor_id')
        ->select('contractors.name','contractors.id', 'contractors.dept_company','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
         $car = DB::table('contractors')
        ->join ('cars', 'contractors.id', '=', 'cars.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'cars.contractor_id')
        ->select('contractors.name','contractors.id', 'contractors.dept_company','cars.upload_license', 'cars.upload_roadtax', 'payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
       return view('adminscontractor\showcontractor')->with('result',$result);
        
        
    }

    public function showcancel($id)
    { $result=array();
        $motorcycle = DB::table('staffs')
        ->join ('motorcycles', 'staffs.id', '=', 'motorcycles.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'motorcycles.staff_id')
        ->select('staffs.name','staffs.id', 'staffs.dept','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
         $car = DB::table('staffs')
        ->join ('cars', 'staffs.id', '=', 'cars.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'cars.staff_id')
        ->select('staffs.name','staffs.id', 'staffs.dept','cars.upload_license', 'cars.upload_roadtax', 'payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
       //dump($result);
        $staffs = Staff::find($id);
        Mail::to($staffs->email)->send(new CancelMail());
        return view('admins\showcancel')->with('result',$result);
        
        
    }

    public function showcancelstudent($id)
    { $result=array();
        $motorcycle = DB::table('students')
        ->join ('motorcycles', 'students.id', '=', 'motorcycles.student_id')
        ->join ('payments', 'payments.student_id', '=', 'motorcycles.student_id')
        ->select('students.name','students.id', 'students.kuliyyah','students.level','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $car = DB::table('students')
        ->join ('cars', 'students.id', '=', 'cars.student_id')
        ->join ('payments', 'payments.student_id', '=', 'cars.student_id')
        ->select('students.name','students.id', 'students.kuliyyah','students.level','cars.upload_license', 'cars.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
       //dump($result);
        $students = Student::find($id);
        Mail::to($students->email)->send(new CancelMail());
        return view('adminsstudent\showcancelstudent')->with('result',$result);
        
        
    }

    public function showcancelcontractor($id)
    {
        $result=array();
        $motorcycle = DB::table('contractors')
        ->join ('motorcycles', 'contractors.id', '=', 'motorcycles.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'motorcycles.contractor_id')
        ->select('contractors.name','contractors.id', 'contractors.dept_company','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
         $car = DB::table('contractors')
        ->join ('cars', 'contractors.id', '=', 'cars.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'cars.contractor_id')
        ->select('contractors.name','contractors.id', 'contractors.dept_company','cars.upload_license', 'cars.upload_roadtax', 'payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
        $contractors = Contractor::find($id);
        Mail::to($contractors->email)->send(new CancelMail());
        return view('adminscontractor\showcancelcontractor')->with('result',$result);
        
        
    }

    public function showsuccess($id)
    {
        
        $result=array();
        $motorcycle = DB::table('staffs')
        ->join ('motorcycles', 'staffs.id', '=', 'motorcycles.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'motorcycles.staff_id')
        ->select('staffs.name','staffs.id', 'staffs.dept','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
         $car = DB::table('staffs')
        ->join ('cars', 'staffs.id', '=', 'cars.staff_id')
        ->join ('payments', 'payments.staff_id', '=', 'cars.staff_id')
        ->select('staffs.name','staffs.id', 'staffs.dept','cars.upload_license', 'cars.upload_roadtax', 'payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
       //dump($result);
        $staffs = Staff::find($id);
        Mail::to($staffs->email)->send(new SuccessfulMail());
        return view('admins\showsuccess')->with('result',$result);
         
    }

    public function showsuccessstudent($id)
    {
        
        $result=array();
        $motorcycle = DB::table('students')
        ->join ('motorcycles', 'students.id', '=', 'motorcycles.student_id')
        ->join ('payments', 'payments.student_id', '=', 'motorcycles.student_id')
        ->select('students.name','students.id', 'students.kuliyyah','students.level','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $car = DB::table('students')
        ->join ('cars', 'students.id', '=', 'cars.student_id')
        ->join ('payments', 'payments.student_id', '=', 'cars.student_id')
        ->select('students.name','students.id', 'students.kuliyyah','students.level','cars.upload_license', 'cars.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
       //dump($result);
        $students = Student::find($id);
        Mail::to($students->email)->send(new SuccessfulMail());
        return view('adminsstudent\showsuccessstudent')->with('result',$result);
         
    }

    public function showsuccesscontractor($id)
    {
        $result=array();
        $motorcycle = DB::table('contractors')
        ->join ('motorcycles', 'contractors.id', '=', 'motorcycles.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'motorcycles.contractor_id')
        ->select('contractors.name','contractors.id', 'contractors.dept_company','motorcycles.upload_license', 'motorcycles.upload_roadtax','payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
         $car = DB::table('contractors')
        ->join ('cars', 'contractors.id', '=', 'cars.contractor_id')
        ->join ('payments', 'payments.contractor_id', '=', 'cars.contractor_id')
        ->select('contractors.name','contractors.id', 'contractors.dept_company','cars.upload_license', 'cars.upload_roadtax', 'payments.amount', 'payments.upload_receipt')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle;
        $result['car']=$car;
        $contractors = Contractor::find($id);
        Mail::to($contractors->email)->send(new SuccessfulMail());
        return view('adminscontractor\showsuccesscontractor')->with('result',$result);
        
        
    }


    public function showroadtaxcar($id)
    {
      
        $car = DB::table('staffs')
        ->join ('cars', 'staffs.id', '=', 'cars.staff_id')
        ->select('cars.upload_roadtax')
        ->get()->toArray();
        $result['car']=$car[0]->upload_roadtax;
        return view('admins.showroadtaxcar')->with('result',$result);
     
    }

    public function showroadtaxcarstudent($id)
    {
      
        $car = DB::table('students')
        ->join ('cars', 'students.id', '=', 'cars.student_id')
        ->select('cars.upload_roadtax')
        ->get()->toArray();
        $result['car']=$car[0]->upload_roadtax;
        return view('adminsstudent.showroadtaxcarstudent')->with('result',$result);
     
    }

    public function showroadtaxcarcontractor($id)
    {
      
        $car = DB::table('contractors')
        ->join ('cars', 'contractors.id', '=', 'cars.contractor_id')
        ->select('cars.upload_roadtax')
        ->get()->toArray();
        $result['car']=$car[0]->upload_roadtax;
        return view('adminscontractor.showroadtaxcarcontractor')->with('result',$result);
     
    }

    public function showroadtaxmotorcycle($id)
    {
        $motorcycle = DB::table('staffs')
        ->join ('motorcycles', 'staffs.id', '=', 'motorcycles.staff_id')
        ->select('motorcycles.upload_roadtax')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle[0]->upload_roadtax;
        return view('admins.showroadtaxmotorcycle')->with('result',$result);
        
    }

    public function showroadtaxmotorcyclestudent($id)
    {
        $motorcycle = DB::table('students')
        ->join ('motorcycles', 'students.id', '=', 'motorcycles.student_id')
        ->select('motorcycles.upload_roadtax')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle[0]->upload_roadtax;
        return view('adminsstudent.showroadtaxmotorcyclestudent')->with('result',$result);
        
    }

    public function showroadtaxmotorcyclecontractor($id)
    {
        $motorcycle = DB::table('contractors')
        ->join ('motorcycles', 'contractors.id', '=', 'motorcycles.contractor_id')
        ->select('motorcycles.upload_roadtax')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle[0]->upload_roadtax;
        return view('adminscontractor.showroadtaxmotorcyclecontractor')->with('result',$result);
        
    }

    public function showreceiptcar($id)
    {
        $payment = DB::table('staffs')
        ->join ('payments', 'staffs.id', '=', 'payments.staff_id')
        ->select('payments.upload_receipt')
        ->get()->toArray();
        $result['payment']=$payment[0]->upload_receipt;
        return view('admins.showreceiptcar')->with('result',$result);

    }

    public function showreceiptcarstudent($id)
    {
        $payment = DB::table('students')
        ->join ('payments', 'students.id', '=', 'payments.student_id')
        ->select('payments.upload_receipt')
        ->get()->toArray();
        $result['payment']=$payment[0]->upload_receipt;
        return view('adminsstudent.showreceiptcarstudent')->with('result',$result);

    }

    public function showreceiptcarcontractor($id)
    {
        $payment = DB::table('contractors')
        ->join ('payments', 'contractors.id', '=', 'payments.contractor_id')
        ->select('payments.upload_receipt')
        ->get()->toArray();
        $result['payment']=$payment[0]->upload_receipt;
        return view('adminscontractor.showreceiptcarcontractor')->with('result',$result);

    }


    public function showreceiptmotorcycle($id)
    {
        $payment = DB::table('staffs')
        ->join ('payments', 'staffs.id', '=', 'payments.staff_id')
        ->select('payments.upload_receipt')
        ->get()->toArray();
        $result['payment']=$payment[0]->upload_receipt;
        return view('admins.showreceiptmotorcycle')->with('result',$result);

    }

    public function showreceiptmotorcyclestudent($id)
    {
        $payment = DB::table('students')
        ->join ('payments', 'students.id', '=', 'payments.student_id')
        ->select('payments.upload_receipt')
        ->get()->toArray();
        $result['payment']=$payment[0]->upload_receipt;
        return view('adminsstudent.showreceiptmotorcyclestudent')->with('result',$result);

    }

    public function showreceiptmotorcyclecontractor($id)
    {
        $payment = DB::table('contractors')
        ->join ('payments', 'contractors.id', '=', 'payments.contractor_id')
        ->select('payments.upload_receipt')
        ->get()->toArray();
        $result['payment']=$payment[0]->upload_receipt;
        return view('adminscontractor.showreceiptmotorcyclecontractor')->with('result',$result);

    }

    public function showlicensecar($id)
    {
    
        $car = DB::table('staffs')
        ->join ('cars', 'staffs.id', '=', 'cars.staff_id')
        ->select('cars.upload_license')
        ->get()->toArray();
        $result['car']=$car[0]->upload_license;
        return view('admins.showlicensecar')->with('result',$result);
    }

    public function showlicensecarstudent($id)
    {
    
        $car = DB::table('students')
        ->join ('cars', 'students.id', '=', 'cars.student_id')
        ->select('cars.upload_license')
        ->get()->toArray();
        $result['car']=$car[0]->upload_license;
        return view('adminsstudent.showlicensecarstudent')->with('result',$result);
    }
    
    public function showlicensecarcontractor($id)
    {
    
        $car = DB::table('contractors')
        ->join ('cars', 'contractors.id', '=', 'cars.contractor_id')
        ->select('cars.upload_license')
        ->get()->toArray();
        $result['car']=$car[0]->upload_license;
        return view('adminscontractor.showlicensecarcontractor')->with('result',$result);
    }

    public function showlicensemotorcycle($id)
    {
    
        $motorcycle = DB::table('staffs')
        ->join ('motorcycles', 'staffs.id', '=', 'motorcycles.staff_id')
        ->select('motorcycles.upload_license')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle[0]->upload_license;
        return view('admins.showlicensemotorcycle')->with('result',$result);
    }

    public function showlicensemotorcyclestudent($id)
    {
    
        $motorcycle = DB::table('students')
        ->join ('motorcycles', 'students.id', '=', 'motorcycles.student_id')
        ->select('motorcycles.upload_license')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle[0]->upload_license;
        return view('adminsstudent.showlicensemotorcyclestudent')->with('result',$result);
    }

    public function showlicensemotorcyclecontractor($id)
    {
    
        $motorcycle = DB::table('contractors')
        ->join ('motorcycles', 'contractors.id', '=', 'motorcycles.contractor_id')
        ->select('motorcycles.upload_license')
        ->get()->toArray();
        $result['motorcycle']=$motorcycle[0]->upload_license;
        return view('adminscontractor.showlicensemotorcyclecontractor')->with('result',$result);
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
    public function update($id)
    {   //not a mass assignment
    
    }


  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }


    
}