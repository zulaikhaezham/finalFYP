@extends('layouts.app4')
   

@section('content')

<center>
<img src="{{URL::asset('/storage/images').'/'.$result['motorcycle']}}" >
</center>
<br></br>
                <a href="{{ route('admins.show') }}">
                <button type="submit" class="done">Back</button>
                </a>  
@endsection