@extends('Admin.app')
@section('title','QCenter')
@section('content')   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->      
      <div class="content-header">
            <h1>QCenter Page</h1><br>

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
                @foreach ($qcenter as $center)
                <tr>
                <td scope="col">{{$center->id}}</td>
                  <td scope="col">{{$center->Qcenter_name}}</td>
                  <td scope="col">{{$center->bed_quantity}}</td>
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
                  <th scope="col">Bed Balance</th>
                  <th scope="col">No_breakfast</th>
                  <th scope="col">No_lunch</th>
                  <th scope="col">No_dinner</th>
                </tr>
              </tbody>
            </table>
            {{ $qcenter->links() }}
      </div>
    </div>
@endsection
