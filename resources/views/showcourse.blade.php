@extends('master.master')

@section('content')

  <table class="table col-md-10 offset-md-1 showusers">
   <thead>
    <tr>
    <th>Full name</th>
    <th>Short name</th>
    </tr>
  </thead>
  <tbody>
   <tr>
   <td>{{$course->firstname}}</td>
   <td>{{$course->lastname}}</td>
   </tr>
  </tbody>
  </table>

@stop