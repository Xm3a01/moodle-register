@extends('master.master')

@section('content')
  <table class="table col-md-10 offset-md-1 showusers">
   <thead>
    <tr>
    <th>#</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Email</th>
    <th>User name</th>
    <!-- confirmed -->
    <th>confirmed | Email</th>
    <!-- mnethostid -->
    <th>Moodle network host id</th>
    <th>Course participate</th>
    <th>Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
   <tr>
   <td>{{ $user->id}}</td>
   <td>{{$user->firstname}}</td>
   <td>{{$user->lastname}}</td>
   <td>{{$user->email}}</td>
   <td>{{$user->username}}</td>
   <td>{{$user->confirmed}}</td>
   <td>{{$user->mnethostid}}</td>
   <td><a href="{{route('datas.show',$user->id)}}" class = "btn btn-info">Show Course</a></td>
   @if($user->mnethostid && $user->confirmed)
   <td style= "color:green"><a href="http://localhost/moodle/login/index.php" class = "btn btn-primary">Login in moodle</a></td>
   @else
   <td style= "color:red; text-decorition:line-thrugh"><span>you are not have authntecity</span></td>
   @endif
   </tr>
   @endforeach
  </tbody>
  </table>
@stop