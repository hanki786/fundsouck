@extends('layout.header')
@section('title')
    Index Facts - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Index Shells</li>
        <li class="breadcrumb-item active">Indices Information</li>
        <li class="breadcrumb-item active">Index Facts - New</li>
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
            <form action="{{ route('register-indexFacts-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Index Facts</strong>
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

                                        <div class="form-group">
                                            <label for="index_name">Index Name</label>
                                            <input type="text" value="{{ old('index_name') }}" class="form-control" name="index_name" placeholder="Enter Index Name ">
                                        </div>


                                        <div class="form-group">
                                            <label for="index_code">Index Code</label>
                                            <input type="text" value="{{ old('index_code') }}" class="form-control" name="index_code" placeholder="Enter Index Code">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_objective">Index Objective</label>
                                            <input type="text" value="{{ old('index_objective') }}" class="form-control" name="index_objective" placeholder="Enter Index Objective">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_investability">Index Investability</label>
                                            <input type="text" value="{{ old('index_investability') }}" class="form-control" name="index_investability" placeholder="Enter Index Investability">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_weighting">Index Weighting</label>
                                            <input type="text" value="{{ old('index_weighting') }}" class="form-control" name="index_weighting" placeholder="Enter Index Weighting ">
                                        </div>


                                        <div class="form-group">
                                            <label for="component_number">Component Number</label>
                                            <input type="number" value="{{ old('component_number') }}" class="form-control" name="component_number" placeholder="Enter Component Number">
                                        </div>

                                            <div class="form-group">
                                                <label for="review_frequency">Review Frequency</label>
                                                <input type="text" value="{{ old('review_frequency') }}" class="form-control" name="review_frequency" placeholder="Enter Review Frequency">
                                            </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="calculation">Calculation</label>
                                            <input type="text" value="{{ old('calculation') }}" class="form-control" name="calculation" placeholder="Enter Calculation">
                                        </div>

                                        <div class="form-group">
                                            <label for="base_value">Base Value</label>
                                            <input type="number" value="{{ old('base_value') }}" class="form-control" name="base_value" placeholder="Enter Base Value">
                                        </div>

                                        <div class="form-group">
                                            <label for="base_date">Base Date</label>
                                            <input type="date" value="{{ old('base_date') }}" class="form-control" name="base_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="introduction_date">Introduction Date</label>
                                            <input type="date" value="{{ old('introduction_date') }}" class="form-control" name="introduction_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="settlement_procedure">Settlement Procedure</label>
                                            <input type="text" value="{{ old('settlement_procedure') }}" class="form-control" name="settlement_procedure" placeholder="Enter Settlement Procedure">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_provider">Index Provider</label>
                                            <input type="text" value="{{ old('index_provider') }}" class="form-control" name="index_provider" placeholder="Enter Index Provider">
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