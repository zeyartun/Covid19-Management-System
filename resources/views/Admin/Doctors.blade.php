@extends('Admin.app')
@section('title','Doctors')
@section('content')   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->      
      <div class="content-header">
            <div class="row">
              <div class="col-6"><h1>Doctors Page</h1></div>
              <div class="col-6 text-right"><button data-toggle="modal" data-target="#NewDoctorModal" type="button" class="btn btn-primary btn">+ Add New</button></div>
            </div>
            <br>
            <table class="table">
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
    </div>

    <div class="modal fade" id="DoctorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Doctor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>City</label>
                    <select class="form-control">
                      <option>select City</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Township</label>
                    <select class="form-control">
                      <option>select Township</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Qcenter_name</label>
                    <select class="form-control">
                      <option>select Qcenter_name</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control"  placeholder="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>                
              </div> 
              <button type="submit" class="btn btn-primary w-100">Save changes</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    {{-- New Doctor --}}

    <div class="modal fade" id="NewDoctorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Doctor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>City</label>
                    <select class="form-control">
                      <option>select City</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Township</label>
                    <select class="form-control">
                      <option>select Township</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Qcenter_name</label>
                    <select class="form-control">
                      <option>select Qcenter_name</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control"  placeholder="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>                
              </div> 
              <button type="submit" class="btn btn-primary w-100">Add New</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection
