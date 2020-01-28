@extends('partials.master')
@include('bank::additional')
@include('bank::modal')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="card-header ">
    <div class="card-title">
        <h1 class="h3 mb-2 text-gray-800">{{__('backend.bank')}}</h1>
    </div>
    <div class="pull-right text-right">
        <a href="#">
            <div class="col-xs-12">
                <button id="show-modal-add" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i>
                    {{ __('backend.add_bank') }}
                </button>
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
                            <th>{{ __('backend.name_bank') }}</th>
                            <th>{{ __('backend.create_at') }}</th>
                            <th>{{ __('backend.update_at') }}</th>
                            <th>{{ __('backend.actions') }}</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('backend.name_bank') }}</th>
                            <th>{{ __('backend.create_at') }}</th>
                            <th>{{ __('backend.update_at') }}</th>
                            <th>{{ __('backend.actions') }}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($bank as $bank)
                        <tr>
                            <td>{{$bank->name_bank}}</td>
                            <td>{{\Carbon\Carbon::parse($bank->created_at)->diffForHumans()}}</td>
                                @if($bank->updated_at)
                                <td>{{\Carbon\Carbon::parse($bank->updated_at)->diffForHumans()}}</td>
                                @else
                                <td></td>
                                @endif
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                       @endforeach     
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
