<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuccessfulMail;
use App\Mail\CancelMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcomepage');
});

Route::get('adminwelcome', function () {
    return view('adminwelcome');
});



Auth::routes();

//student punya
Route::get('students/login_form', 'StudentLoginController@login_form')->name('students.login_form');
Route::post('students/login', 'StudentLoginController@login')->name('students.login');
Route::get('students/create/{matric_no}', 'StudentController@create')->name('students.create');
Route::patch('students/update', 'StudentController@update')->name('students.update');

//staff punya
Route::get('staffs/login_form', 'StaffLoginController@login_form')->name('staffs.login_form');    
Route::post('staffs/login', 'StaffLoginController@login')->name('staffs.login');   
Route::get('staffs/create/{staff_no}', 'StaffController@create')->name('staffs.create');
Route::patch('staffs/update', 'StaffController@update')->name('staffs.update');      

//contractor punya
Route::get('contractors/login_form', 'ContractorLoginController@login_form')->name('contractors.login_form');    
Route::post('contractors/login', 'ContractorLoginController@login')->name('contractors.login');
Route::get('contractors/create/{contractor_no}', 'ContractorController@create')->name('contractors.create');
Route::patch('contractors/update', 'ContractorController@update')->name('contractors.update');
     

//admin punya student punya motor
Route::get('adminsstudent/showstudent', 'AdminController@showstudent')->name('adminsstudent.showstudent');
Route::get('adminsstudent/show_detailstudent/{id}', 'AdminController@show_detailstudent')->name('adminsstudent.show_detailstudent');
Route::get('adminsstudent/showroadtaxmotorcyclestudent/{id}', 'AdminController@showroadtaxmotorcyclestudent')->name('adminsstudent.showroadtaxmotorcyclestudent');
Route::get('adminsstudent/showlicensemotorcyclestudent/{id}', 'AdminController@showlicensemotorcyclestudent')->name('adminsstudent.showlicensemotorcyclestudent');
Route::get('adminsstudent/showreceiptmotorcyclestudent/{id}', 'AdminController@showreceiptmotorcyclestudent')->name('adminsstudent.showreceiptmotorcyclestudent');


//admin punya student punya car

Route::get('adminsstudent/show_detailstudentcar/{id}', 'AdminController@show_detailstudentcar')->name('adminsstudent.show_detailstudentcar');
Route::get('adminsstudent/showroadtaxcarstudent/{id}', 'AdminController@showroadtaxcarstudent')->name('adminsstudent.showroadtaxcarstudent');
Route::get('adminsstudent/showlicensecarstudent/{id}', 'AdminController@showlicensecarstudent')->name('adminsstudent.showlicensecarstudent');
Route::get('adminsstudent/showreceiptcarstudent/{id}', 'AdminController@showreceiptcarstudent')->name('adminsstudent.showreceiptcarstudent');

//send email student
Route::get('adminsstudent/showsuccessstudent/{id}', 'AdminController@showsuccessstudent')->name('adminsstudent.showsuccessstudent');
Route::get('adminsstudent/showcancelstudent/{id}', 'AdminController@showcancelstudent')->name('adminsstudent.showcancelstudent');


//admin punya tengok staff
Route::get('admins/login_form', 'AdminLoginController@login_form')->name('admins.login_form');    
Route::post('admins/login', 'AdminLoginController@login')->name('admins.login');
Route::get('admins/create/{admin_no}', 'AdminController@create')->name('admins.create');
Route::get('admins/show', 'AdminController@show')->name('admins.show');

//send email staff
Route::get('admins/showsuccess/{id}', 'AdminController@showsuccess')->name('admins.showsuccess');
Route::get('admins/showcancel/{id}', 'AdminController@showcancel')->name('admins.showcancel');

//show untuk motor staff
Route::get('admins/show_detail/{id}', 'AdminController@show_detail')->name('admins.show_detail');
Route::get('admins/showroadtaxmotorcycle/{id}', 'AdminController@showroadtaxmotorcycle')->name('admins.showroadtaxmotorcycle');
Route::get('admins/showlicensemotorcycle/{id}', 'AdminController@showlicensemotorcycle')->name('admins.showlicensemotorcycle');
Route::get('admins/showreceiptmotorcycle/{id}', 'AdminController@showreceiptmotorcycle')->name('admins.showreceiptmotorcycle');

//show untuk car staff
Route::get('admins/show_detailcar/{id}', 'AdminController@show_detailcar')->name('admins.show_detailcar');
Route::get('admins/showroadtaxcar/{id}', 'AdminController@showroadtaxcar')->name('admins.showroadtaxcar');
Route::get('admins/showlicensecar/{id}', 'AdminController@showlicensecar')->name('admins.showlicensecar');
Route::get('admins/showreceiptcar/{id}', 'AdminController@showreceiptcar')->name('admins.showreceiptcar');


//admin punya contractor punya motor
Route::get('adminscontractor/showcontractor', 'AdminController@showcontractor')->name('adminscontractor.showcontractor');
Route::get('adminscontractor/show_detailcontractor/{id}', 'AdminController@show_detailcontractor')->name('adminscontractor.show_detailcontractor');
Route::get('adminscontractor/showroadtaxmotorcyclecontractor/{id}', 'AdminController@showroadtaxmotorcyclecontractor')->name('adminscontractor.showroadtaxmotorcyclecontractor');
Route::get('adminscontractor/showlicensemotorcyclecontractor/{id}', 'AdminController@showlicensemotorcyclecontractor')->name('adminscontractor.showlicensemotorcyclecontractor');
Route::get('adminscontractor/showreceiptmotorcyclecontractor/{id}', 'AdminController@showreceiptmotorcyclecontractor')->name('adminscontractor.showreceiptmotorcyclecontractor');


//admin punya contractor punya car

Route::get('adminscontractor/show_detailcontractorcar/{id}', 'AdminController@show_detailcontractorcar')->name('adminscontractor.show_detailcontractorcar');
Route::get('adminscontractor/showroadtaxcarcontractor/{id}', 'AdminController@showroadtaxcarcontractor')->name('adminscontractor.showroadtaxcarcontractor');
Route::get('adminscontractor/showlicensecarcontractor/{id}', 'AdminController@showlicensecarcontractor')->name('adminscontractor.showlicensecarcontractor');
Route::get('adminscontractor/showreceiptcarcontractor/{id}', 'AdminController@showreceiptcarcontractor')->name('adminscontractor.showreceiptcarcontractor');

//send email contractor
Route::get('adminscontractor/showsuccesscontractor/{id}', 'AdminController@showsuccesscontractor')->name('adminscontractor.showsuccesscontractor');
Route::get('adminscontractor/showcancelcontractor/{id}', 'AdminController@showcancelcontractor')->name('adminscontractor.showcancelcontractor');




























//vehicle punya
Route::get('vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('vehicles/store', 'VehicleController@store')->name('vehicles.store');
Route::get('vehicles/show', 'VehicleController@show')->name('vehicles.show');



//payment
Route::get('payments/create', 'PaymentController@create')->name('payments.create');
Route::post('payments/store', 'PaymentController@store')->name('payments.store');
Route::post('payments/show', 'PaymentController@show')->name('payments.show');
Route::patch('payments/update', 'PaymentController@update')->name('payments.update');

//debit
Route::get('debits/create', 'DebitController@create')->name('debits.create');
Route::post('debits/store', 'DebitController@store')->name('debits.store');
Route::post('debits/show', 'DebitController@show')->name('debits.show');
Route::get('confirmation', function(){
    return View('confirmation'); 
});

Route::get('adminlogout', function(){
    return View('adminlogout'); 
});
