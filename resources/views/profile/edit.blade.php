@extends('../layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit profile with IMAGE
                        <a href="{{ url('profile') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-profile/'.$profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="name" value="{{$profile->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">State</label>
                            <input type="text" name="state" value="{{$profile->state}}" class="form-control">
                        </div>
                        <!-- <div class="form-group mb-3">
                            <label for="">State</label>
                            <input type="text" name="state" value="{{$profile->state}}" class="form-control">
                        </div> -->
                        <div class="form-group mb-3">
                            <label for=""> Profile Image</label>
                            <input type="file" name="profile_image" class="form-control">
                            <img src="{{ asset('uploads/profiles/'.$profile->profile_image) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update profile</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection