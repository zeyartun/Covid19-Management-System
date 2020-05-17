@extends('Website.app')
@section('title','Home')
@section('content')
@include('Website.link');
<div class="container mt-2" style="opacity: 0.6;">
  <form class="form-inline">
    <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search" aria-label="Search">
    {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
  </form>
</div>
<h1 class="text-center text-white">Doctor Information</h1>
<div class="container">
  <table class="table text-white">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">QCenter</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>    
      </tr>
    </thead>
    <tbody>
      @foreach ($doctors as $doctor)
      <tr data-toggle="modal" data-target="#DoctorModal">
      <td scope="col">{{$doctor->id}}</td>
        <td scope="col">{{$doctor->doctor_name}}</td>
        <td scope="col">QCenter</td>
        <td scope="col">{{$doctor->doctor_ph}}</td>
        <td scope="col">{{$doctor->doctor_address}}</td>
      </tr>
      @endforeach                
    </tbody>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">QCenter</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th> 
      </tr>
    </tbody>
</table>
  {{ $doctors->links() }}
</div>

@endsection

@section('footer')

@endsection