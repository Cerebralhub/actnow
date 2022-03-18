@extends('layout')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>NAME</th>
    <th>State</th>
    <th>LGA</th>
    <th>Image</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($shows as $show)
    <tr>
      <td>{{$show->id}}</td>
      <td>{{$show->name}}</td>
      <td>{{$show->state}}</td>
      <td>{{$show->phone_no}}</td>
      <td><img src="{{ asset('uploads/profiles/'.$show->image) }}" width="70px" height="70px" alt="Image">
</td>
      <td><a href="{{url('/downloadPDF', $show->id)}}">Download PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection