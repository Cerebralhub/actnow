@extends('layout')
@section('content')


<div class="landingPage">
  
<img src="{{url('/images/pic7.jpg')}}" alt="register" width="100%">

</div>



    <div class="container custom-login">
        <div class="col-md-12" style="padding:20%; padding-top:5%; padding-bottom: 10%;">
        <h1>Log in</h1> </br/>

        @if(Session::has('warning'))
            <div class="alert alert-danger">
                {{ Session::get('warning') }}
                @php
                    Session::forget('warning');
                @endphp
            </div>
            @endif

            <br/>
            <form action="login" method="post">
                 @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <!-- <small id="emailHelp" email="email" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br/><br/>
                    <button type="submit" class="btn btn-primary">Login</button>
                    
                    <a href="/registerUser">create an account</a>
               
                </div>
            </form>
    </div>
</div>
@endsection