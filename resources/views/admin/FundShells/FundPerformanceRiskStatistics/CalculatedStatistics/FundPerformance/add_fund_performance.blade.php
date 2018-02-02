@extends('layout.header')
@section('title')
    Fund Performance - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Calculated Statistics</li>
        <li class="breadcrumb-item active">Fund Performance - New</li>
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
            <form action="{{ route('register-fundPerformance-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Fund Performance</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="annual_compound_return">Annual Compound Return</label>
                                            <input type="text" value="{{ old('annual_compound_return') }}"
                                                   class="form-control border-input" name="annual_compound_return"  placeholder="0.48">
                                        </div>

                                        <div class="form-group">
                                            <label for="annualised_distribution_yield">Annualised Distribution Yield</label>
                                            <input type="text" value="{{ old('annualised_distribution_yield') }}"
                                                   class="form-control border-input" name="annualised_distribution_yield" placeholder="7.52">
                                        </div>

                                        <div class="form-group">
                                            <label for="indexed_performance">Indexed Performance</label>
                                            <input type="text" value="{{ old('indexed_performance') }}"
                                                   class="form-control border-input" name="indexed_performance" placeholder="2.19">
                                        </div>

                                        <div class="form-group">
                                            <label for="percentage_growth">Percentage Growth</label>

                                            <input type="text" value="{{ old('percentage_growth') }}"
                                                   class="form-control border-input" name="percentage_growth" placeholder="100.15">
                                        </div>

                                        <div class="form-group">
                                            <label for="average_gain">Average Gain</label>
                                            <input type="text" value="{{ old('average_gain') }}"
                                                   class="form-control border-input" name="average_gain" placeholder="6.52">
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="average_loss">Average Loss</label>
                                            <input type="text" value="{{ old('average_loss') }}"
                                                   class="form-control border-input" name="average_loss" placeholder="15.2">
                                        </div>

                                        <div class="form-group">
                                            <label for="average_return">Average Return</label>
                                            <input type="text" value="{{ old('average_return') }}"
                                                   class="form-control border-input" name="average_return" placeholder="0.007">
                                        </div>

                                        <div class="form-group">
                                            <label for="relative_average_return">Relative Average Return</label>
                                            <input type="text" value="{{ old('relative_average_return') }}"
                                                   class="form-control border-input" name="relative_average_return" placeholder="10">
                                        </div>

                                        <div class="form-group">
                                            <label for="relative_performance">Relative Performance</label>
                                            <input type="text" value="{{ old('relative_performance') }}"
                                                   class="form-control border-input" name="relative_performance" placeholder="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="performance">Performance</label>
                                            <input type="text" value="{{ old('performance') }}"
                                                   class="form-control border-input" name="performance" placeholder="10">
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                <button type="reset" class="btn btn-danger btn-fill"><i class="fa fa-ban"></i> Reset</button>
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