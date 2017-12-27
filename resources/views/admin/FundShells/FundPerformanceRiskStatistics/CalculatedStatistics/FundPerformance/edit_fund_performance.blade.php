@extends('layout.header')
@section('title')
    Fund Performance - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Calculated Statistics</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundPerformance-on-admin-side') }}">Fund Performance - List</a></li>
        <li class="breadcrumb-item active">Fund Performance - Edit</li>
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
            <form action="{{ route('update-fundPerformance-on-admin-side',$fund_performance->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Fund Performance</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                            <input type="hidden" name="fund_objective_id" value="{{ $fund_performance->id }}">

                                            <input type="hidden" name="user_id" value="{{ $fund_performance->user_id}}">

                                            <div class="form-group">
                                            <label for="annual_compound_return">Annual Compound Return</label>
                                            <input type="text" value="{{ $fund_performance->annual_compound_return }}"
                                                   class="form-control" name="annual_compound_return"  placeholder="0.48">
                                        </div>

                                        <div class="form-group">
                                            <label for="annualised_distribution_yield">Annualised Distribution Yield</label>
                                            <input type="text" value="{{ $fund_performance->annualised_distribution_yield }}"
                                                   class="form-control" name="annualised_distribution_yield" placeholder="7.52">
                                        </div>

                                        <div class="form-group">
                                            <label for="indexed_performance">Indexed Performance</label>
                                            <input type="text" value="{{ $fund_performance->indexed_performance }}"
                                                   class="form-control" name="indexed_performance" placeholder="2.19">
                                        </div>

                                        <div class="form-group">
                                            <label for="percentage_growth">Percentage Growth</label>

                                            <input type="text" value="{{ $fund_performance->percentage_growth }}"
                                                   class="form-control" name="percentage_growth" placeholder="100.15">
                                        </div>

                                        <div class="form-group">
                                            <label for="average_gain">Average Gain</label>
                                            <input type="text" value="{{ $fund_performance->average_gain }}"
                                                   class="form-control" name="average_gain" placeholder="6.52">
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="average_loss">Average Loss</label>
                                            <input type="text" value="{{ $fund_performance->average_loss }}"
                                                   class="form-control" name="average_loss" placeholder="15.2">
                                        </div>

                                        <div class="form-group">
                                            <label for="average_return">Average Return</label>
                                            <input type="text" value="{{ $fund_performance->average_return }}"
                                                   class="form-control" name="average_return" placeholder="0.007">
                                        </div>

                                        <div class="form-group">
                                            <label for="relative_average_return">Relative Average Return</label>
                                            <input type="text" value="{{ $fund_performance->relative_average_return }}"
                                                   class="form-control" name="relative_average_return" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="relative_performance">Relative Performance</label>
                                            <input type="text" value="{{ $fund_performance->relative_performance }}"
                                                   class="form-control" name="relative_performance" placeholder="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="performance">Performance</label>
                                            <input type="text" value="{{ $fund_performance->performance }}"
                                                   class="form-control" name="performance" placeholder="10">
                                        </div>

                                    </div>
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