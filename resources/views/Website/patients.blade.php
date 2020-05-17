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
<h1 class="text-center text-white">Patients Information</h1>

<div class="container">
  <table class="table text-white">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">QCenter</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Q_At</th>
        <th scope="col">Q_End</th>
        <th scope="col">Status</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($patients as $patient)
      <tr data-toggle="modal" data-target="#PatientModal">
      <td scope="col">{{$patient->id}}</td>
        <td scope="col">{{$patient->patient_name}}</td>
        <td scope="col">QCenter</td>
        <td scope="col">{{$patient->patient_ph}}</td>
        <td scope="col">{{$patient->patient_address}}</td>
        <td scope="col">{{$patient->patient_age}}</td>
        <td scope="col">{{$patient->patient_gender}}</td>
        <td scope="col">{{$patient->Q_at}}</td>
        <td scope="col">{{$patient->Q_end}}</td>
        <td scope="col">{{$patient->patient_status}}</td>
      </tr>
      @endforeach                
    </tbody>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">QCenter</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Q_At</th>
        <th scope="col">Q_End</th>
        <th scope="col">Status</th>

      </tr>
    </tbody>
</table>
  {{ $patients->links() }}
</div>

@endsection

@section('footer')

@endsection