@extends('../layout')

@section('content')

<div class="container-fluid" style="padding-top:100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 style="text-align: center;">Profile
                    </h1>
                </div>       



               
                    
             
        <div class="container">


    <div class="mx-auto mt-5" style="background-color:rgb(217, 230, 217); width: 350px; text-align:center; 
    border-radius:20px; padding-top: 30px; color:#5D3954">

        <div class="image">    
            <img src="images/actnow22.png" style="width:100px;"><br/><br/><br/>

            <img src="{{ asset('uploads/profiles/'.$profile->profile_image) }}" alt="Image" style="width:70%; border-radius:50%">
        </div><br/>
        <div class="card-body">
          <h2 class="card-title" style="font-weight: 700;">{{$profile->name}}</h2>
          <p class="card-text">
          <h6 style="padding-top: 10px;">MEMBERSHIP CARD</h6>
            <!-- <hr/> -->
            <h6>ID: ACT-{{$profile->reg_no}}</h6>
          </p>
            <p style="font-size:25px; font-weight:700; padding-bottom:30px;">{{$profile->state}} State</p>
        </div>
        <div class="down">www.actnow.ng</div><br/>
        </div>
        </div>
      
        
            </div>
        </div>
    </div>
</div>

@endsection
