@extends('layouts.app2')

@section('content')
<br><br><br>
<div class="container">
<div class="form_title"><h3>Thank you! Your Application is Succesfully Registered. 

<br><br><br>

We will notify you via email for further information. Please wait until you get the notification from Osem.
    <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row  ">
                        <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Done</button>
                        </div>
            </div>  
            </h3>
            </div>
            </div>
    </form>

@endsection