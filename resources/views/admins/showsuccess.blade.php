@extends('layouts.app4')
   

@section('content')
<br>
<div class="container">

<center> <h3> <p>LIST OF APPLICATION</p>
<p>Motorcycles Application</p></h3>

<table style="width:100%">
  <tr>
  <th><center>STAFF ID</center></th>
    <th><center>STAFF NAME</center></th>
    <th><center>DEPARTMENT</center></th> 
    <th><center>VEHICLE'S ROADTAX</center></th> 
    <th><center>AMOUNT STICKER PAID</center></th> 
    <th><center>RECEIPT OF PAYMENT</center></th> 
    <th><center>DRIVING LICENSE</center></th>
    <th><center>MORE OPTION TO BE VIEWED</center></th> 
  </tr>
  @foreach ($result['motorcycle'] as $row)
  <tr>
    <td><center>{{$row->id}}</center></td>
    <td><center>{{$row->name}}</center></td>
    <td><center>{{$row->dept}}</center></td>
    <td><center><a href="{{ route('admins.showroadtaxmotorcycle',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td><center>{{$row->amount}}</center></td>
    <td><center><a href="{{ route('admins.showreceiptmotorcycle',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
     <td><center><a href="{{ route('admins.showlicensemotorcycle',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td>
    
    <a href="{{ route('admins.show_detail',$row->id) }}">
      <button type="submit" class="done">View</button>
     </a>
   
     <br>
     <a href="{{  route('admins.showsuccess',$row->id)}}">
      <button type="submit" class="done">Approve</button>
     </a>
     <br>
     <a href="{{ route('admins.showcancel',$row->id) }}">
      <button type="submit" class="done">Reject</button>
     </a>
    
    
   </td>
  </tr>
  @endforeach
</table> </center> 

<br>
<center><h3><p>Car Application</p></h3>

<table style="width:100%">
  <tr>
    <th><center>STAFF ID</center></th>
    <th><center>STAFF NAME</center></th>
    <th><center>DEPARTMENT</center></th> 
    <th><center>VEHICLE'S ROADTAX</center></th> 
    <th><center>AMOUNT STICKER PAID</center></th> 
    <th><center>RECEIPT OF PAYMENT</center></th> 
    <th><center>DRIVING LICENSE</center></th>
    <th><center>MORE OPTION TO BE VIEWED</center></th> 
  </tr>
  @foreach ($result['car'] as $row)
  <tr>
    <td><center>{{$row->id}}</center></td> 
    <td><center>{{$row->name}}</center></td>
    <td><center>{{$row->dept}}</center></td>
    <td><center><a href="{{ route('admins.showroadtaxcar',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td><center>{{$row->amount}}</center></td>
    <td><center><a href="{{ route('admins.showreceiptcar',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
     <td><center><a href="{{ route('admins.showlicensecar',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td>
    
   
    <a href="{{ route('admins.show_detailcar',$row->id) }}">
      <button type="submit" class="done">View</button>
     </a>
     
     <br>
     <a href="{{  route('admins.showsuccess',$row->id)}}">
      <button type="submit" class="done">Approve</button>
     </a>

     <br>
     <a href="{{ route('admins.showcancel' ,$row->id) }}">
      <button type="submit" class="done">Reject</button>
     </a>
              
           
     
    
   </td>
  </tr>
  @endforeach
</table> </center> 
<br>
</div></div>
  @endsection