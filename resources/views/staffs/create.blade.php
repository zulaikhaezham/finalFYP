@extends('layouts.app2')

@section('content')

@if(isset($staff))

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
            
        <!-- Staff Details -->
        <div class="form_title"><h3>Particulars for Staff</h3></div>

        <div class="Staff_info">
            <h4>Complete your Profile</h4>
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
                        name="address" placeholder="Current Address"
                        value="{{ old('address') }}" required autocomplete="address" autofocus>

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
                        name="postcode" placeholder="postcode" 
                        value="{{old('postcode') }}" required autocomplete="postcode" autofocus>
                            
                        @error('postcode')
                        <p class="help is-danger">{{$errors->first('postcode')}}</p>
                        @enderror
                    </div>

                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('city') is-danger @enderror" 
                        name="city" placeholder="city" 
                        value="{{old('city') }}" required autocomplete="city" autofocus>

                        @error('city')
                        <p class="help is-danger">{{$errors->first('city')}}</p>
                        @enderror
                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control @error('state') is-danger @enderror" 
                        name="state" placeholder="state" 
                        value="{{old('state') }}" required autocomplete="state" autofocus>

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
                        name="phone_no" placeholder="without (-)" 
                        value="{{old('phone_no') }}" required autocomplete="phone_no" autofocus>

                        @error('phone_no')
                        <p class="help is-danger">{{$errors->first('phone_no')}}</p>
                        @enderror
                    </div>

                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control @error('email') is-danger @enderror" 
                        name="email" placeholder="email" 
                        value="{{old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Update</button>
            </form>
        </div>
    </div>
    <br>
            
@else
NO STAFF 
@endif
@endsection