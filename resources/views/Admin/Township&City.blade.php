@extends('Admin.app')
@section('title','Township&City')
@section('content')   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->      
      <div class="content-header">
            <h1>Township&CityPage</h1>
            @foreach ($townName as $township)
                {{$township->township_name}}<br>
            @endforeach
      </div>
    </div>
@endsection
