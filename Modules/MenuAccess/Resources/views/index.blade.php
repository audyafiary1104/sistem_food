@extends('partials.master')
@include('menuaccess::additional')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header ">
        <div class="card-title">
            <h1 class="h3 mb-2 text-gray-800">{{__('backend.menu_access')}}</h1>
        </div>
        <div class="pull-right text-right">
                <div class="col-xs-12">
                    <button id="show-modal" class="btn btn-primary btn-cons" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i>
                        {{ __('backend.add_menu') }}
                    </button>
                </div>
        </div>
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('backend.name') }}</th>
                                <th>{{ __('backend.actions') }}</th>
                                <th>{{ __('backend.sequance_to') }}</th>
                                <th>{{ __('backend.create_at') }}</th>
                                <th>{{ __('backend.update_at') }}</th>
                                <th>{{ __('backend.actions') }}</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>{{ __('backend.name') }}</th>
                                <th>{{ __('backend.actions') }}</th>
                                <th>{{ __('backend.sequance_to') }}</th>
                                <th>{{ __('backend.create_at') }}</th>
                                <th>{{ __('backend.update_at') }}</th>
                                <th>{{ __('backend.actions') }}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group form-group-default">
                              <label>code menu</label>
                                <input id="code_menu" name="code_menu" type="text" class="form-control" placeholder="code menu">
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group form-group-default">
                          <label>sequence to</label>
                          <input id="sequence_to" name="sequence_to" type="number" class="form-control" placeholder="sequence to">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>name menu</label>
                          <input id="name_menu" name="name_menu" type="text" class="form-control" placeholder="name menu">
                      </div>
                    </div>
                  </div>

                 
                <div class="checkbox check-success">
              <div class="row">
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Create" id="Create">
                    <label for="Create">Create</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Read" id="Read">
                    <label for="Read">Read</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]"  value="Update" id="Update">
                    <label for="Update">Update</label>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Delete" id="Delete">
                    <label for="Delete">Delete</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Detail" id="Detail">
                    <label for="detail">Detail</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Document" id="Document">
                    <label for="Document">Document</label>
                  </div>
                </div>

              <div class="row">
               
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Salary" id="Salary">
                    <label for="Salary">salary</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Address" id="Address">
                    <label for="Address">Address</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Approval" id="Approval">
                    <label for="Approval">Approval</label>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Interview" id="Interview">
                    <label for="Interview">Interview</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Rejected" id="Rejected">
                    <label for="Rejected">Rejected</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Filing Leave" id="FilingLeave">
                    <label for="FilingLeave">Filing Leave</label>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Date Interview" id="DateInterview">
                    <label for="DateInterview">Date Interview</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" name="access[]" value="Approved" id="Approved">
                    <label for="Approved">Recruitment Approved</label>
                  </div>
                  <div class="col-md-4">
                    <input type="checkbox" name="access[]" value="Manage status" id="Attedance">
                    <label for="Attedance">Attedance</label>
                  </div>
              </div>

              <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group form-group-default">
                        <label>Sub Menu</label>
                        <br>
                        <input type="checkbox"  data-toggle="toggle">
                        </label>
                      </div>
                    </div>

          </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    @stop
