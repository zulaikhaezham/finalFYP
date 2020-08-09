@extends('layouts.app4')
   

@section('content')
<center>
<img src="{{URL::asset('/storage/images').'/'.$result['car']}}">
</center>
<br></br>
<br></br>
<br></br>
<br></br>
                <a href="{{ route('adminscontractor.showcontractor') }}">
                <button type="submit" class="done">Back</button>
                </a>  
@endsection