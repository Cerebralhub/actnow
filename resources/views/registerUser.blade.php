@extends('master')
@section('content')




   
<div class="landingPage">
<img src="{{url('/images/pic7.jpg')}}" alt="register" width="100%">
</div>


<div class="container" style="padding-left:15%; padding-right:15%; padding-top:5%">
   
<div class= "col-md-12">
   <h1>Create an Account </h1><br/>

   @if(Session::has('success'))
   <div class="alert alert-success">
       {{ Session::get('success') }}
       @php
           Session::forget('success');
       @endphp
   </div>
   @endif

   @if(Session::has('warning'))
   <div class="alert alert-danger">
       {{ Session::get('warning') }}
       @php
           Session::forget('warning');
       @endphp
   </div>
   @endif

   <form method="POST" action="/registerUser">

       @csrf

       <div class="form-group">
           <label>Surname:</label>
           <input type="text" name="sname" class="form-control" placeholder="">
           @if ($errors->has('sname'))
               <span class="text-danger">{{ $errors->first('sname') }}</span>
           @endif
       </div>

       <div class="form-group">
           <label>First Name:</label>
           <input type="text" name="fname" class="form-control" placeholder="">
           @if ($errors->has('fname'))
               <span class="text-danger">{{ $errors->first('fname') }}</span>
           @endif
       </div>

       <div class="form-group">
           <label>Email:</label>
           <input type="text" name="email" class="form-control" placeholder="">
           @if ($errors->has('email'))
               <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
       </div>

       <div class="form-group">
           <label>Password:</label>
           <input type="password" name="password" class="form-control" placeholder="">
           @if ($errors->has('password'))
               <span class="text-danger">{{ $errors->first('password') }}</span>
           @endif
       </div>

       
       <div class="form-group">
           <label>License Key</label>
           <input type="text" name="token" class="form-control" placeholder="">
           @if ($errors->has('token'))
               <span class="text-danger">{{ $errors->first('token') }}</span>
           @endif
       </div>

       

       <div class="form-group">
           <button class="btn btn-success btn-submit">Create account</button>
           <a href="/login"> | Log in</a>
       </div>
   </form>
</div><br/><br/>
</div>

@endsection