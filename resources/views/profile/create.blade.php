@extends('../layout')

@section('content')

<div class="container">
    <div class="row justify-content-center" style="padding-top: 150px;">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                        <h4>Register 
                    </h4>
                        </div>
                        <div class="col-md-3">
                        <a href="{{ url('/') }}" class="btn btn-danger float-end">Home</a>

                        </div>

                    </div>
                    
                </div>
                <div class="card-body">

                    <form action="{{ url('add-profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">State</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Local Government</label>
                            <input type="text" name="lga" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gender</label>
                            <input type="text" name="gender" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone_no" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Profile Picture</label>
                            <input type="file" name="profile_image" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save profile</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection