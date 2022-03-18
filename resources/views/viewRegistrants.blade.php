@extends('master')
@section("content")


   
<div class="landingPage">

<img src="{{url('/images/pic7.jpg')}}" alt="register" width="100%">

</div>


 <!-- Registrants Table -->
                    <div class="container">
                    <br/>

                        <div class="regTable">
                        <form action="/filterRegistrants" method="post">
                          @csrf

                         <!-- <label for="state" style="justify-content: left;">State of Origin</label> -->
                          <select name="state">
                          <option value="" selected="selected">- State of Origin -</option>
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


                          <!-- <br/><br/> -->
                        <button type="submit" class="btn btn-info">Filter</button>

                    </form> <br/>

                    @if(Session::has('warning'))
                    <div class="alert alert-danger">
                        {{ Session::get('warning') }}
                        @php
                            Session::forget('warning');
                        @endphp
                    </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                    @endif
    
                   <h3>There are {{count($list)}} search results </h3> <br/>                   

                   <table id="example" class="table table-striped cell-border" style="width:100%">
        <thead>
            <tr>
                <th>S/N</th>

                <th>Surname</th>
                <th>First Name</th>
                <th>State of Origin</th>
                <th>L.G.A.</th>
                <th>Residential State</th>
                <th>Residential L.G.A.</th>
                <th>Phone No</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>
        @foreach ($list as $item)

            <tr>

                <td>{{$loop->iteration}}</td>
                <td>{{$item->sname}}</td>
                <td>{{$item->fname}}</td>
                <td>{{$item->state}}</td>
                <td>{{$item->lga}}</td>
                <td>{{$item->state2}}</td>
                <td>{{$item->lra}}</td>
                <td>{{$item->phoneNo}}</td>
                <td>
                <a href="/delete/{{$item->id}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>
                </td>
            </tr>
            @endforeach
                    
        </tbody>
        </tfoot>
    </table>


                    </div>
 </div>
@endsection