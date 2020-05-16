@extends('Admin.app')
@section('title','Patients')
@section('content')   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->      
      <div class="content-header">
          <div class="row">
            <div class="col-6"><h1>Patients Page</h1></div>
            <div class="col-6 text-right"><button data-toggle="modal" data-target="#NewPatientModal" type="button" class="btn btn-primary btn">+ Add New</button></div>
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
    </div>
    <div class="modal fade" id="PatientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Patient</h5>
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
                <div class="col-6">
                  <div class="form-group">
                    <label>Q Center</label>
                    <select class="form-control">
                      <option>select Q Center</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Patient Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control">
                      <option>select Status</option>
                    </select>
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
                <div class="col-6">
                  <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control"  placeholder="">
                  </div> 
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-sm-6"> 
                      <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datepicker-start">Start Date</label>
                        <input type="text" class="form-control" id="datepicker-start">
                      </div>
                    </div>
                    <div class="col-sm-6"> 
                      <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datepicker-end">End Date</label>
                        <input type="text" class="form-control" id="datepicker-end">
                      </div>
                    </div>
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

    {{-- New Patient --}}

    <div class="modal fade" id="NewPatientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Patient</h5>
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
                <div class="col-6">
                  <div class="form-group">
                    <label>Q Center</label>
                    <select class="form-control">
                      <option>select Q Center</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Patient Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control">
                      <option>select Status</option>
                    </select>
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
                <div class="col-6">
                  <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control"  placeholder="">
                  </div> 
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-sm-6"> 
                      <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datepicker-start">Start Date</label>
                        <input type="text" class="form-control" id="datepicker-start">
                      </div>
                    </div>
                    <div class="col-sm-6"> 
                      <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datepicker-end">End Date</label>
                        <input type="text" class="form-control" id="datepicker-end">
                      </div>
                    </div>
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

