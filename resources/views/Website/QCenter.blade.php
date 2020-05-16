@extends('Website.app')
@section('title','Home')
@section('content')
@include('Website.link');

<h1>Hello Q center</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Qcenter_name</th>
        <th scope="col">Bed amount</th>
        <th scope="col">Bed Balance</th>
        <th scope="col">No_breakfast</th>
        <th scope="col">No_lunch</th>
        <th scope="col">No_dinner</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Qcenter_name</th>
        <th scope="col">Bed amount</th>
        <th scope="col">Bed Balance</th>
        <th scope="col">No_breakfast</th>
        <th scope="col">No_lunch</th>
        <th scope="col">No_dinner</th>
      </tr>
    </tbody>
  </table>
@endsection

@section('footer')

@endsection