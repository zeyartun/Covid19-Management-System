@extends('Admin.app')
@section('title','Patients')
@section('content')   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->      
      <div class="content-header">
            <h1>Patients Page</h1><br>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">Age</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Q_At</th>
                  <th scope="col">Q_End</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($patients as $patient)
                <tr>
                <td scope="col">{{$patient->id}}</td>
                  <td scope="col">{{$patient->patient_name}}</td>
                  <td scope="col">{{$patient->patient_ph}}</td>
                  <td scope="col">{{$patient->patient_address}}</td>
                  <td scope="col">{{$patient->patient_age}}</td>
                  <td scope="col">{{$patient->patient_gender}}</td>
                  <td scope="col">{{$patient->Q_at}}</td>
                  <td scope="col">{{$patient->Q_end}}</td>
                </tr>
                @endforeach                
              </tbody>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">Age</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Q_At</th>
                  <th scope="col">Q_End</th>
                </tr>
              </tbody>
            </table>
            {{ $patients->links() }}
      </div>
    </div>
@endsection
