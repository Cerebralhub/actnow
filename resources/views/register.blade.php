@extends('master')
@section("content")


   
<div class="landingPage">
<img src="{{url('/images/pic7.jpg')}}" alt="register" width="100%">
</div>


              <div class="container">
                <div class="heading text-center" style="padding-top: 100px;">
                    <!-- <b><h2>Register Your Support</h2></b> -->
                    <!-- <p class="text-left" style="color: red;">All fields are required</p> -->
                </div>

                <div class="register">
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



                  <form action="/register" method="post">

                      @csrf

                      <div class="row">

                        <div class="col-6" style="padding-right:30px;">
                        <div class="form-group">
                              <label>Full Name</label>
                              <input type="text" name="sname" class="form-control" placeholder="" required>
                          </div>

                          <div class="form-group">
                              <label for="gender" style="justify-content: left;">Gender</label>
                                  <select name="gender" style="width: 100%;  height:40px; background-color:white;">
                                  <option value="" selected="selected">- Select -</option>
                                  <option value="Female">Female</option>
                                  <option value="Male">Male</option>
                                </select>
                        
                          </div>
                          
                          <div class="form-group">

                                <label for="state" style="justify-content: left;">State of Residence</label>
                                <select name="state" style="width: 100%; height:40px; background-color:white;">
                                <option value="" selected="selected">- Select -</option>
                                <option value="Outside Nigeria">Outside Nigeria</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nassarawa">Nassarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="Abuja FCT">FCT Abuja</option>
                                </select>

                                </div>

                          


                          <div class="form-group">
                              <label>Phone Number:</label>
                              <input type="number" name="phoneNo" class="form-control" placeholder="">
                            
                          </div>

                          <div class="form-group">
                              <label>Email:</label>
                              <input type="text" name="email" class="form-control" placeholder="">
                             
                          </div>    
                          
                          <div class="form-group mb-3">
                            <label for="">Photo Picture</label>
                            <input type="file" name="profile_image" class="form-control">
                        </div>

                        </div>

                      </div><br/></br>
                          
                        <button type="submit" class="btn btn-secondary" style="width: 100%;">Register</button><br/><br/>

                    </form> 
                </div>
              </div>



@endsection