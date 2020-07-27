@extends('layouts.app4')
   

@section('content')

<img src="{{URL::asset('/storage/images').'/'.$result['payment']}}">
<br></br>
                <a href="{{ route('adminsstudent.showstudent') }}">
                <button type="submit" class="done">Back</button>
                </a>  
@endsection