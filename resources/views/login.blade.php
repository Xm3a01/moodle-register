@extends('master.master')

@section('content')
 @if (session('success'))
    <div class="alert alert-success alert-data-dismiss col-md-3 offest-md-3">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('success') }}
    </div>
 @endif
 @if (session('error'))
    <div class="alert alert-danger alert-data-dismiss col-md-3 offest-md-3">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('erorr') }}
    </div>
 @endif 
 <form action="{{route('datas.store')}}" method="post" class ="col-md-4 offset-md-4 form">
  @csrf
  <div class="form-group">
     <input type="text" name= "firstname"  class = "form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" placeholder = "First name">
     </div>
  <div class="form-group">
     <input type="text" name = "lastname" class = "form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder = "Last name">
      </div> 
      <div class="form-group">
   <input type="email" name ="email" class = "form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder = "Email">
     </div>
       <div class="form-group">
        <input type="text" name = "username" class = "form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder = "User name">
       </div>
      <div class="form-group">
     <input type="password" name = "password"  class = "form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder = "Password">
   </div>
   <div class="form-group">
  <button type="submit" class = "btn btn-info col-md-12">submit</button>
 </form>
@stop