@extends('layouts.app2')
@section('content')
  
  <!-- <div class="card">
    <h3 class="display-3 alert alert-danger">Sorry, the motorcycle is already registered!</h3>
  </div> -->
  <div class="container">
    <br><br>
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
    <center><div class="form_title_veh"><h3>Particulars for Vehicle</h3></div>
    <div class="Vehicle_info">
      
      <!-- <form action="{{route('payments.create')}}" method="">

      </form> -->
        <div class="form-group row">
          
            <a class="btn btn-info" href="{{route('payments.create')}}">Proceed to Payment</a>
          
        </div>

    </div>
    </center>
  </div>
@endsection