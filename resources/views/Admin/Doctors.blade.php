@extends('Admin.app')
@section('title','Doctors')
@section('content')   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->      
      <div class="content-header">
            <h1>Doctors Page</h1><br>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>    
                </tr>
              </thead>
              <tbody>
                @foreach ($doctors as $doctor)
                <tr>
                <td scope="col">{{$doctor->id}}</td>
                  <td scope="col">{{$doctor->doctor_name}}</td>
                  <td scope="col">{{$doctor->doctor_ph}}</td>
                  <td scope="col">{{$doctor->doctor_address}}</td>
                </tr>
                @endforeach                
              </tbody>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th> 
                </tr>
              </tbody>
            </table>
            {{ $doctors->links() }}
      </div>
    </div>
@endsection
