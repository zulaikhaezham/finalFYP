@extends('layouts.app4')
   

@section('content')
<br>
<div class="container">

<center> <h3> <p>LIST OF APPLICATION</p>
<p>Motorcycles Application</p></h3>

<table style="width:100%">
  <tr>
  <th><center>MATRIC ID</center></th>
    <th><center>STUDENT NAME</center></th>
    <th><center>KULIYYAH</center></th> 
    <th><center>LEVEL</center></th>
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
    <td><center>{{$row->kuliyyah}}</center></td>
    <td><center>{{$row->level}}</center></td>
    <td><center><a href="{{ route('adminsstudent.showroadtaxmotorcyclestudent',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td><center>{{$row->amount}}</center></td>
    <td><center><a href="{{ route('adminsstudent.showreceiptmotorcyclestudent',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
     <td><center><a href="{{ route('adminsstudent.showlicensemotorcyclestudent',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td>
   
  
    <a href="{{ route('adminsstudent.show_detailstudent',$row->id) }}">
      <button type="submit" class="done">View</button>
     </a>
   
     <br>
     <a href="{{  route('adminsstudent.showsuccessstudent',$row->id)}}">
      <button type="submit" class="done">Approve</button>
     </a>
     <br>
     <a href="{{ route('adminsstudent.showcancelstudent',$row->id) }}">
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
  <th><center>MATRIC ID</center></th>
    <th><center>STUDENT NAME</center></th>
    <th><center>KULIYYAH</center></th> 
    <th><center>LEVEL</center></th>
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
    <td><center>{{$row->kuliyyah}}</center></td>
    <td><center>{{$row->level}}</center></td>
    <td><center><a href="{{ route('adminsstudent.showroadtaxcarstudent',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td><center>{{$row->amount}}</center></td>
    <td><center><a href="{{ route('adminsstudent.showreceiptcarstudent',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
     <td><center><a href="{{ route('adminsstudent.showlicensecarstudent',$row->id) }}">
      <button type="submit" class="view">View</button>
     </a></center></td>
    <td>
   
    <a href="{{ route('adminsstudent.show_detailstudentcar',$row->id) }}">
      <button type="submit" class="done">View</button>
     </a>
     
     <br>
     <a href="{{  route('adminsstudent.showsuccessstudent',$row->id)}}">
      <button type="submit" class="done">Approve</button>
     </a>
     <br>
     <a href="{{ route('adminsstudent.showcancelstudent' ,$row->id) }}">
      <button type="submit" class="done">Reject</button>
     </a>
              
           
     
    
   </td>
  </tr>
  @endforeach
</table> </center> 
<br>
</div></div>
  @endsection