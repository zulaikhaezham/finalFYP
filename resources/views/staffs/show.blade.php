@extends('layouts.app2')
@section('content')
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($staff))
    <!-- Staff Details -->
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
        <div class="form_title"><h3>Particulars for Staff</h3></div>

        <div class="Staff_info">
            <h4>Your Profile is Completed</h4>
            <form action="{{route('staffs.update')}}" method="post">
                @csrf
                @method('PATCH')
                <!-- Name -->
                <div class="form-group row mt-5">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        style="background-color:rgb(173, 209, 223);border-color:white;"
                        name="name" value="{{$staff->name}}" disabled>
                    </div>
                </div>

                <!-- Staff No & Passport NO/IC-->
                <div class="form-group row">
                    <label for="staff_no" class="col-sm-2 col-form-label">Staff No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" 
                        style="background-color:rgb(173, 209, 223);border-color:white;"
                        name="staff_no" value="{{$staff->staff_no}}" disabled>
                    </div>

                    <label for="ic_passport" class="col-sm-2 col-form-label">IC/Passport No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" 
                        style="background-color:rgb(173, 209, 223);border-color:white;"
                        name="ic_passport" value="{{$staff->ic_passport}}" disabled>
                    </div>
                </div>
                <!-- Department -->
                <div class="form-group row">
                    <label for="dept" class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" 
                        style="background-color:rgb(173, 209, 223);border-color:white;"
                        name="dept" value="{{$staff->dept}}" disabled>
                    </div>

                </div>
                <!-- USER NEED TO INPUT THEIR INFO -->
                <!-- Address -->
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('address') is-danger @enderror" 
                        name="address" style="background-color:rgb(173, 209, 223);border-color:white;"
                        value="{{$staff->address }}" required autocomplete="address">

                        @error('address')
                        <p class="help is-danger">{{$errors->first('address')}}</p>
                        @enderror
                    </div>
                </div>
                <!-- Postcode,City,State -->
                <div class="form-group row">
                    <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('postcode') is-danger @enderror" 
                        name="postcode" style="background-color:rgb(173, 209, 223);border-color:white;" 
                        value="{{$staff->postcode}}" required autocomplete="postcode">
                            
                        @error('postcode')
                        <p class="help is-danger">{{$errors->first('postcode')}}</p>
                        @enderror
                    </div>

                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('city') is-danger @enderror" 
                        name="city" style="background-color:rgb(173, 209, 223);border-color:white;" 
                        value="{{$staff->city}}" required autocomplete="city">

                        @error('city')
                        <p class="help is-danger">{{$errors->first('city')}}</p>
                        @enderror
                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('state') is-danger @enderror" 
                        name="state" style="background-color:rgb(173, 209, 223);border-color:white;"
                        value="{{$staff->state}}" required autocomplete="state">

                        @error('state')
                        <p class="help is-danger">{{$errors->first('state')}}</p>
                        @enderror
                    </div>
                </div>
                <!-- Phone No & Email-->
                <div class="form-group row">
                    <label for="phone_no" class="col-sm-2 col-form-label">Phone No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control @error('phone_no') is-danger @enderror" 
                        name="phone_no" style="background-color:rgb(173, 209, 223);border-color:white;" 
                        value="{{$staff->phone_no}}" required autocomplete="phone_no">

                        @error('phone_no')
                        <p class="help is-danger">{{$errors->first('phone_no')}}</p>
                        @enderror
                    </div>

                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control @error('email') is-danger @enderror" 
                        name="email" style="background-color:rgb(173, 209, 223);border-color:white;"
                        value="{{$staff->email}}" required autocomplete="email">

                        @error('email')
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>
                <!-- button-->
                <div class="form-group row" style="margin-left:270px;margin-right:-160px;">
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-info">Edit</button>
                    </div>
                    
                    <div class="col-md-3">
                    {{Session::put('staff_dept', $staff->dept)}}
                    <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a> 
                    </div>
                </div>
                
            </form>
            <!-- <form action="{{route('vehicles.create')}}" method="get">
                {{Session::put('staff_dept' , $staff->dept)}}
                <input type="hidden" name="staff_dept" value="{{$staff->dept}}">
                <button class="btn btn-info" type="submit">Add Vehicle</button>
            </form> -->
        </div>
    </div>

    
</div>
    @else
        NO STAFF DATA
    @endif
@endsection