@extends('layouts.app4')
@section('content')

<div class="container">
  
    <!-- Staff Details -->
    <div class="container">
        <br><br>
        <div class="form_title"><h3>Particulars for Student</h3></div>

        <div class="Student_info">
            
                @csrf
                @foreach ($result['motorcycle'] as $row)
                <!-- Name -->
                <div class="form-group row mt-5">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{$row->name}}" disabled>
                    </div>
                </div>

                <!-- Staff No & Passport NO/IC-->
                <div class="form-group row">
                    <label for="matric_no" class="col-sm-2 col-form-label">Matric No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="staff_no" value="{{$row->matric_no}}" disabled>
                    </div>

                    <label for="ic_passport" class="col-sm-2 col-form-label">IC/Passport No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="ic_passport" value="{{$row->ic_passport}}" disabled>
                    </div>
                </div>
                <!-- Department -->
                <div class="form-group row">
                    <label for="kuliyyah" class="col-sm-2 col-form-label">Kuliyyah</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="dept" value="{{$row->kuliyyah}}" disabled>
                    </div>

                </div>
                
                <!-- Address -->
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        name="address" placeholder="Current Address"
                        value="{{$row->address }}" disabled>

                    </div>
                </div>
                <!-- Postcode,City,State -->
                <div class="form-group row">
                    <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" 
                        name="postcode" placeholder="postcode" 
                        value="{{$row->postcode}}" disabled>
                       
                    </div>

                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" 
                        name="city" placeholder="city" 
                        value="{{$row->city}}" disabled >

                    </div>

                    <label for="state" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" 
                        name="state" placeholder="state" 
                        value="{{$row->state}}" disabled>
                    </div>
                </div>
                <!-- Phone No & Email-->
                <div class="form-group row">
                    <label for="phone_no" class="col-sm-2 col-form-label">Phone No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" 
                        name="phone_no" placeholder="without (-)" 
                        value="{{$row->phone_no}}" disabled>
                    </div>

                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" 
                        name="email" placeholder="email" 
                        value="{{$row->email}}" disabled>
                    </div>
                </div>

        </div>
    </div>

    
<br><br>

<!--vehicles info-->

<div class="container">

            <div class="form_title"><h3>Particulars for Vehicle</h3></div>
            
                @csrf
                <div class="Vehicle_info">
                   
                  
                        <!-- plate no -->
                        <div class="form-group row">
                            <label for="plate_no" class="col-sm-2 col-form-label">Plate No</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                name="plate_no" value="{{$row->plate_no}}" disabled>
                            </div>
                        </div>
                        <!-- motorcycle model -->
                        <div class="form-group row">
                            <label for="model" class="col-sm-2 col-form-label">Vehicle Model</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                name="model" value="{{$row->model}}" disabled>
                            </div>
                        </div>
                        <!-- motorcycle color -->
                        <div class="form-group row">
                            <label for="color" class="col-sm-2 col-form-label">Vehicle Color</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                name="color" value="{{$row->color}}" disabled>
                            </div>
                        </div>
                    
                        <!-- license upload -->
                        <div class="form-group row">
                            <label for="upload_license" class="col-sm-2 col-form-label">Driving License</label>
                            <div class="col-sm-4" >
                                <input type="text" class="form-control"
                                name="upload_license" value="{{$row->upload_license}}" disabled>                               
                            </div>
                        </div>
                        <!-- roadtax upload -->
                        <div class="form-group row">
                            <label for="upload_roadtax" class="col-sm-2 col-form-label">Roadtax</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" 
                                name="upload_roadtax" value="{{$row->upload_roadtax}}" disabled>                               
                            </div>
                        </div>
                        
                    </div>
                    <br></br>
                </div>
            
        </div>

<!--Payments info-->

<div class="container">
            <div class="form_title"><h3>Particulars for Payment</h3></div>
            
                @csrf
                <div class="Vehicle_info">
                   
                        <!-- amount -->
                        <div class="form-group row">
                            <label for="amount" class="col-sm-2 col-form-label">Amount sticker paid</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" 
                                name="plate_no" value="{{$row->amount}}" disabled>
                            </div>
                        </div>
                        <!-- receipt -->
                        <div class="form-group row">
                            <label for="upload_receipt" class="col-sm-2 col-form-label">Receipt</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                name="upload_receipt" value="{{$row->upload_receipt}}" disabled>
                            </div>
                        </div>
                        
                        
                    </div>
                    <br></br>
                </div>
            
                <a href="{{ route('adminsstudent.showstudent') }}">
                <button type="submit" class="done">Back</button>
                </a>   
        </div>
       

    

</div>

@endforeach
</div>
@endsection