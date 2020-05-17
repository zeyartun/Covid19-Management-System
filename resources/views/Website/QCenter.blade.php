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
<h1 class="text-center text-white">Q Center Information</h1>
<div class="container">
  <table class="table text-white">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Qcenter_name</th>
        <th scope="col">Bed amount</th>
        <th scope="col">No_Patien</th>
        <th scope="col">Bed Balance</th>
        <th scope="col">No_breakfast</th>
        <th scope="col">No_lunch</th>
        <th scope="col">No_dinner</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($qcenter as $center)
      <tr onclick="qedit({{$center->id}})" data-toggle="modal" data-target="#QCenterModal">
      <td scope="col">{{$center->id}}</td>
      <td scope="col">{{$center->Qcenter_name}}</td>
        <td scope="col">{{$center->bed_quantity}}</td>
        <td scope="col">No_Patien</td>
        <td scope="col">balance</td>
        <td scope="col">{{$center->No_breakfast}}</td>
        <td scope="col">{{$center->No_lunch}}</td>
        <td scope="col">{{$center->No_dinner}}</td>
      </tr>
      @endforeach                
    </tbody>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Qcenter_name</th>
        <th scope="col">Bed amount</th>
        <th scope="col">No_Patien</th>
        <th scope="col">Bed Balance</th>
        <th scope="col">No_breakfast</th>
        <th scope="col">No_lunch</th>
        <th scope="col">No_dinner</th>
      </tr>
    </tbody>
  </table>
  {{ $qcenter->links() }}
</div>

@endsection

@section('footer')

@endsection