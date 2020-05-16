@extends('Admin.app')
@section('title','QCenter')
@section('content')   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->      
      <div class="content-header">
            <div class="row">
              <div class="col-6"><h1>QCenter Page</h1></div>
              <div class="col-6 text-right"><button type="button" data-toggle="modal" data-target="#NewQCenterModal" class="btn btn-primary btn">+ Add New</button></div>
            </div>
            <br>
            <table class="table">
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

      <div class="modal fade" id="QCenterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Q Center</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label>Bed amount</label>
                      <input type="number" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>No_breakfast</label>
                      <input type="number" class="form-control"  placeholder="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>No_lunch</label>
                      <input type="number" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>No_dinner</label>
                      <input type="number" class="form-control"  placeholder="">
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

      {{-- New Q center --}}

      <div class="modal fade" id="NewQCenterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Q Center</h5>
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
                      <input type="Text" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>Bed amount</label>
                      <input type="number" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>No_breakfast</label>
                      <input type="number" class="form-control"  placeholder="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>No_lunch</label>
                      <input type="number" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>No_dinner</label>
                      <input type="number" class="form-control"  placeholder="">
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
    </div>

@endsection
