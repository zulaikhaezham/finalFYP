@extends('layouts.app2')
@section('content')
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($student))
    <div class="container">
            <br>
            <!-- progress bar -->
            <div class="container">
                <ul class="progress_bar">
                    <li class="active">Profile</li>
                    <li>Vehicle Information</li>
                    <li>Payment</li>
                    <li>Confirmation</li>
                    
                </ul>
            </div>
            <br><br><br><br>
        <div class="form_title"><h3>Particulars for Student</h3></div>

        <div class="Student_info">
            <h4>Your Profile is Completed</h4>
            <form action="{{route('students.update')}}" method="post">
                @csrf
                @method('PATCH')
                <!-- Name -->
                <div class="form-group row mt-5">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="name" value="{{$student->name}}" disabled>
                    </div>
                </div>

                <!-- Matric No & Passport NO/IC-->
                <div class="form-group row">
                    <label for="matric_no" class="col-sm-2 col-form-label">Matric No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="matric_no" value="{{$student->matric_no}}" disabled>
                    </div>

                    <label for="ic_passport" class="col-sm-2 col-form-label">IC/Passport No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="ic_passport" value="{{$student->ic_passport}}" disabled>
                    </div>
                </div>
                <!-- Kuliyyah & Level-->
                <div class="form-group row">
                    <label for="kuliyyah" class="col-sm-2 col-form-label">Kuliyyah</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="kuliyyah" value="{{$student->kuliyyah}}" disabled>
                    </div>

                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="level" value="{{$student->level}}" disabled>
                    </div>
                </div>
                <!-- Address -->
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="address" value="{{$student->address }}" >
                    </div>
                </div>
                <!-- Postcode,City,State -->
                <div class="form-group row">
                    <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="postcode" value="{{$student->postcode}}" >
                    </div>

                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="city" value="{{$student->city}}" >
                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="state" value="{{$student->state}}">
                    </div>
                </div>
                <!-- Phone No & Email-->
                <div class="form-group row">
                    <label for="phone_no" class="col-sm-2 col-form-label">Phone No</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="phone_no" value="{{$student->phone_no}}">
                    </div>

                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                        name="email" value="{{$student->email}}">
                    </div>
                </div>
                
                <!-- button-->
                <div class="form-group row" style="margin-left:270px;margin-right:-160px;">
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-info">Edit</button>
                    </div>
                    
                    <div class="col-md-3">
                    {{Session::put('student_level', $student->level)}}
                    <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a> 
                    </div>
                </div>
            </form>
            <!-- <form action="{{route('vehicles.create')}}" method="get">
                {{Session::put('student_level', $student->level)}}
                <input type="hidden" name="student_level" value="{{$student->level}}">
                <button class="btn btn-info" type="submit">Add Vehicle</button>
            </form> -->
            
        </div>
    </div>
        
</div>
    @else
        NO STUDENT DATA
    @endif
@endsection