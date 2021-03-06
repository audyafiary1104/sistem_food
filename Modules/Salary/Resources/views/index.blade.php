@extends('partials.master')
@include('salary::additional')
@include('salary::modal')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header ">
        <div class="card-title">
            <h1 class="h3 mb-2 text-gray-800">{{__('backend.salary')}}</h1>
        </div>
        <div class="pull-right text-right">
            <a href="#">
                <div class="col-xs-12">
                    <button id="show-modal-add" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i>
                        {{ __('backend.add_salary') }}
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
                                <th>{{ __('backend.name_positions') }}</th>
                                <th>{{ __('backend.salary_type') }}</th>
                                <th>{{ __('backend.create_at') }}</th>
                                <th>{{ __('backend.update_at') }}</th>
                                <th>{{ __('backend.actions') }}</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>{{ __('backend.name_positions') }}</th>
                                <th>{{ __('backend.salary_type') }}</th>
                                <th>{{ __('backend.create_at') }}</th>
                                <th>{{ __('backend.update_at') }}</th>
                                <th>{{ __('backend.actions') }}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($salary as $keys)
                      
                            <tr>
                                <td>{{$keys->name_position}}</td>
                                <td>{{$keys->type_salary}}</td>
                                <td>{{\Carbon\Carbon::parse($keys->created_at)->diffForHumans()}}</td>
                                @if($keys->updated_at)
                                <td>{{\Carbon\Carbon::parse($keys->updated_at)->diffForHumans()}}</td>
                                @else
                                <td></td>
                                @endif
                                <td>
                                <button type="button" class="btn btn-info details" data-type="{{$keys->name_position}}" 
                                data-salary="{{$keys->salary}}" data-type_salary="{{$keys->type_salary}}" data-bank="{{$keys->name_bank}}"><i class="fas fa-eye"></i>
                                 </button>
                                    <button type="button" class="btn btn-warning update"><i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger delete" data-url="{{route('destory',$keys->id)}}" ><i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach  

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @stop
