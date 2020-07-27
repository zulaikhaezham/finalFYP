@extends('layouts.app4')
   

@section('content')

<img src="{{URL::asset('/storage/images').'/'.$result['motorcycle']}}">
<br></br>
                <a href="{{ route('adminscontractor.showcontractor') }}">
                <button type="submit" class="done">Back</button>
                </a>  
@endsection