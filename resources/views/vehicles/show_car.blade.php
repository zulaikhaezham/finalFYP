@extends('layouts.app2')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(isset($car))
    <div class="container"> 
        <br>
            <!-- progress bar -->
            <div class="container">
                <ul class="progress_bar">
                    <li>Profile</li>
                    <li class="active">Vehicle Information</li>
                    <li>Payment</li>
                    <li>Confirmation</li>
                </ul>
            </div>
            <br><br><br><br>
        <!-- Vehicle Details -->
        <center><div class="form_title_veh"><h3>Particulars for Vehicle</h3></div></center>
            <div class="Vehicle_info" style="margin-left:165px;">
                <form action="{{route('vehicles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                        <div class="Vehicle_info_form">
                            <!-- car Type -->
                            <div class="form-group row">
                                <label for="type" class="col-sm-2 col-form-label" name="type">Vehicle Type</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                                    name="type" placeholder="Car" disabled>
                                </div>
                            </div>
                            <!-- plate no -->
                            <div class="form-group row">
                                <label for="plate_no" class="col-sm-2 col-form-label">Plate No</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                                    name="plate_no" value="{{$car->plate_no}}" disabled>
                                </div>
                            </div>
                            <!-- car model -->
                            <div class="form-group row">
                                <label for="model" class="col-sm-2 col-form-label">Vehicle Model</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                                    name="model" value="{{$car->model}}" disabled>
                                </div>
                            </div>
                            <!-- car color -->
                            <div class="form-group row">
                                <label for="color" class="col-sm-2 col-form-label">Vehicle Color</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                                    name="color" value="{{$car->color}}" disabled>
                                </div>
                            </div>
                            <!-- license upload -->
                            <div class="form-group row">
                                <label for="upload_license" class="col-sm-2 col-form-label">Driving License</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                                    name="upload_license" value="{{$car->upload_license}}" disabled>                               
                                </div>
                            </div>
                            <!-- roadtax upload -->
                            <div class="form-group row">
                                <label for="upload_roadtax" class="col-sm-2 col-form-label">Roadtax</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" style="background-color:rgb(173, 209, 223);"
                                    name="upload_roadtax" value="{{$car->upload_roadtax}}" disabled>                               
                                </div>
                            </div>
                            <!-- buttons -->
                            <div class="form-group row  ">
                                <div class="col-md-3">
                                <a class="btn btn-info" href="{{route('vehicles.create')}}">Add Vehicle</a>
                                
                                </div>
                                <div class="col-md-3">
                                <a class="btn btn-info" href="{{route('payments.create')}}">Proceed to Payment</a> </div>
                            </div>
                        </div>
                        <br></br>
                </form>
            </div>
        @else
            NO VEHICLE DATA
        @endif
    </div>    
@endsection