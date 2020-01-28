@extends('partials.master')
@include('employee::additional')
@include('employee::modal')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header ">
        <div class="card-title">
            <h1 class="h3 mb-2 text-gray-800">{{__('backend.employee')}}</h1>
        </div>
        <div class="pull-right text-right">
            <a href="#">
                <div class="col-xs-12">
                    
                </div>
            </a>
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
                                <th>{{ __('backend.foto') }}</th>
                                <th>{{ __('backend.address') }}</th>
                                <th>{{ __('backend.positions') }}</th>
                                <th>{{ __('backend.actions') }}</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                                <th>{{ __('backend.name') }}</th>
                                <th>{{ __('backend.foto') }}</th>
                                <th>{{ __('backend.address') }}</th>
                                <th>{{ __('backend.positions') }}</th>
                                <th>{{ __('backend.actions') }}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
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
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
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
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
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
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
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
    @stop