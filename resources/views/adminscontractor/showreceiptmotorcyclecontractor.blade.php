@extends('layouts.app4')
   

@section('content')
<center>
<img src="{{URL::asset('/storage/images').'/'.$result['payment']}}">
</center>
<br></br>
                <a href="{{ route('adminscontractor.showcontractor') }}">
                <button type="submit" class="done">Back</button>
                </a>  
@endsection