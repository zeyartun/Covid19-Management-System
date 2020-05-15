@extends('layouts.app')
@section('title','Home')
<style>
    body{
        background-image: url({{asset('bg.jpg')}});
        background-color: gray;         
        background-position: center; 
        background-repeat: no-repeat;
        width:100%; 
        background-size: cover;
    }
</style>
@section('content')
<div class="mt-5">
    <h1 class="text-center text-white">Covid-19 Quarantine Center Management System</h1>
</div>
<div class="row m-md-5 m-sm-2">
    <div class="col-md-3 col-sm-6 mt-sm-2 text-center">
        <a href="#"><div class="btn btn-outline-light col-11">Q-Center & Bed Information</div></a>
    </div>
    <div class="col-md-3 col-sm-6 mt-sm-2 text-center">
        <a href="#"><div class="btn btn-outline-light col-11">Patient Information</div></a>
    </div>
    <div class="col-md-3 col-sm-6 mt-sm-2 text-center">
        <a href="#"><div class="btn btn-outline-light col-11">Doctor Information</div></a>
    </div>
    <div class="col-md-3 col-sm-6 mt-sm-2 text-center">
        <a href="#"><div class="btn btn-outline-light col-11">Instock Information</div></a>
    </div> 
</div>
@endsection

@section('footer')

@endsection