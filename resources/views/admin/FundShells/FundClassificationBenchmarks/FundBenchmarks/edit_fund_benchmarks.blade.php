@extends('layout.header')
@section('title')
    Fund Benchmarks - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Classification & Benchmarks</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundBenchmarks-on-admin-side') }}">Fund Benchmarks - List</a></li>
        <li class="breadcrumb-item active">Fund Benchmarks - Edit</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="#"><i class="icon-speech"></i></a>
                <a class="btn" href="{{ route('dashboard') }}"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
            </div>
        </li>
    </ol>
@endsection
@section('content')
    <!-- Main content -->
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('update-fundBenchmarks-on-admin-side', $fund_benchmarks->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Fund Benchmark</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                            <input type="hidden" name="id" value="{{ $fund_benchmarks->id}}">

                                            <input type="hidden" name="user_id" value="{{ $fund_benchmarks->user_id}}">

                                        <div class="form-group">
                                            <label for="fund_manager_benchmark">Fund Manager Benchmark</label>
                                            <select class="form-control input-sm" name="fund_manager_benchmark"
                                                    value="{{ $fund_benchmarks->fund_manager_benchmark}}">
                                                <option {{ $fund_benchmarks->fund_manager_benchmark == ""?'selected':'' }}></option>
                                                <option {{ $fund_benchmarks->fund_manager_benchmark == ""?'selected':'' }}></option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="fund_souk_benchmark">FundSouk Benchmark</label>
                                            <select class="form-control input-sm" name="fund_souk_benchmark"
                                                    value="{{ $fund_benchmarks->fund_souk_benchmark}}">
                                                <option  {{ $fund_benchmarks->fund_souk_benchmark == ""?'selected':'' }}></option>
                                                <option  {{ $fund_benchmarks->fund_souk_benchmark == ""?'selected':'' }}></option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="risk_free_rate">Risk Free Rate</label>
                                            <select class="form-control input-sm" name="risk_free_rate"
                                                    value="{{ $fund_benchmarks->risk_free_rate}}">
                                                <option  {{ $fund_benchmarks->risk_free_rate == ""?'selected':'' }}></option>
                                                <option  {{ $fund_benchmarks->risk_free_rate == ""?'selected':'' }}></option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-3"></div>
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                </div>
            </form>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@endsection