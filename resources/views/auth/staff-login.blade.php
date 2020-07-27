@extends('layouts.app1')
@section('content')
<link rel="stylesheet" href="{{URL::asset('css/login.css')}}" type="text/css" /><!-- Style-CSS -->
<!-- /form-26-section -->
    <section class="form-26">        
        <div class="form-26-mian">
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
            
            <div class="layer">
                <div class="wrapper">
                    <div class="form-inner-cont">
                            
                        <div class="forms-26-info">
                            <h2>IIUM Vehicle Registration System</h2>
                            <p>Login as Staff</p>
                        </div>

                        <div class="form-right-inf">
                            <form method="POST" action="{{ route('staffs.login') }}">
                                @csrf
                                <div class="forms-gds1 editContent" data-selector=".editContent" style="">
                                    <!-- staff no -->
                                    <div class="form-group row">
                                        <label for="staff_no" class="col-md-4 col-form-label text-md-right">{{ __('Staff No') }}</label>

                                        <div class="col-md-6">
                                            <input id="staff_no" type="staff_no" class="form-control @error('staff_no') is-invalid @enderror" name="staff_no" value="{{ old('staff_no') }}" required autocomplete="staff_no" autofocus>

                                            @error('staff_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- password -->
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <a href=" " style="width:30px;border: 2px solid #ccffff;border-radius:15px;color:#ccffff;"
                                        title="Same password as Staff Portal"> i </a>
                                    </div>
                                    <!-- login button -->
                                    <div class="form-group row  ">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary" >
                                            Login</a></button>
                                        </div>
                                    </div>
                                </div>
                                
                                <h6 class="already editContent" data-selector=".editContent" 
                                style="outline: none; cursor: inherit;">Not a staff?
                                <a href="{{ url('/') }}"> Return to Welcome Page</a></h6>
                            </form>
                        </div>
                        <!-- instructions -->
                        <div class="instructions">
                            <h4>How to Apply for Vehicle Stickers</h4>
                            <ol class="steps" style="margin:20px;">
                                <li>Login</li>
                                <li>Fill in all the necessary information in Personal Information section and
                                    Vehicle Information section
                                </li>
                                <li>Choose your Payment method</li>
                                <li>Wait for the Confirmation Status to receive the Reference Number</li>
                                <li>Get your vehicle sticker at OSEM office</li>
                                
                            </ol>
                        </div>
                        <!-- information -->
                        <div class="information" style="width:120%;margin-left:-80px;"><h4>Information</h4>
                            <table> 
                                <tr>
                                    <th>Vehicle Type</th><th>Eligibility</th><th>Registration Limit</th><th>Price per sticker</th><th>Validity Period</th>
                                </tr>
                                <tr>
                                    <td>Motorcycle</td><td rowspan="3">All IIUM Staff</td><td>2 Motorcycles</td><td>RM3.00</td>
                                    <td rowspan="3" >1 year (Semester 1-Semester 3 for each session)</td>
                                </tr>
                                <tr>
                                    <td>Car</td><td>2 Cars</td><td>RM3.00</td>
                                </tr>
                                
                            </table>
                        </div> 
                    </div>
                    <div class="copyright text-center">
                        <p>© <?php echo date("Y");?> All rights reserved | Designed by Zu and Ina</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
 

@endsection
