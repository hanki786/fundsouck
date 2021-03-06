@extends('layout.header')
@section('title')
    Index Facts - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Index Shells</li>
        <li class="breadcrumb-item active">Indices Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-indexFacts-on-admin-side') }}">Index Facts - List</a></li>
        <li class="breadcrumb-item active">Index Facts - View</li>
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
            <form action="" method="post">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Index Facts</h4>

                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="index_name">Index Name</label>
                                            <input type="text" disabled value="{{ $index_fact->index_name }}" class="form-control border-input" name="index_name" placeholder="Enter Index Name ">
                                        </div>


                                        <div class="form-group">
                                            <label for="index_code">Index Code</label>
                                            <input type="text" disabled value="{{$index_fact->index_code }}" class="form-control border-input" name="index_code" placeholder="Enter Index Code">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_objective">Index Objective</label>
                                            <input type="text" disabled value="{{ $index_fact->index_objective }}" class="form-control border-input" name="index_objective" placeholder="Enter Index Objective">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_investability">Index Investability</label>
                                            <input type="text" disabled value="{{$index_fact->index_investability }}" class="form-control border-input" name="index_investability" placeholder="Enter Index Investability">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_weighting">Index Weighting</label>
                                            <input type="text" disabled value="{{ $index_fact->index_weighting }}" class="form-control border-input" name="index_weighting" placeholder="Enter Index Weighting ">
                                        </div>


                                        <div class="form-group">
                                            <label for="component_number">Component Number</label>
                                            <input type="text" disabled value="{{ $index_fact->component_number }}" class="form-control border-input" name="component_number" placeholder="Enter Component Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="review_frequency">Review Frequency</label>
                                            <input type="text" disabled value="{{$index_fact->review_frequency }}" class="form-control border-input" name="review_frequency" placeholder="Enter Review Frequency">
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="calculation">Calculation</label>
                                            <input type="text" disabled value="{{$index_fact->calculation}}" class="form-control border-input" name="calculation" placeholder="Enter Calculation">
                                        </div>

                                        <div class="form-group">
                                            <label for="base_value">Base Value</label>
                                            <input type="number" disabled value="{{$index_fact->base_value }}" class="form-control border-input" name="base_value" placeholder="Enter Base Value">
                                        </div>

                                        <div class="form-group">
                                            <label for="base_date">Base Date</label>
                                            <input type="date" disabled value="{{ $index_fact->base_date }}" class="form-control border-input" name="base_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="introduction_date">Introduction Date</label>
                                            <input type="date" disabled value="{{ $index_fact->introduction_date }}" class="form-control border-input" name="introduction_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="settlement_procedure">Settlement Procedure</label>
                                            <input type="text" disabled value="{{ $index_fact->settlement_procedure }}" class="form-control border-input" name="settlement_procedure" placeholder="Enter Settlement Procedure">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_provider">Index Provider</label>
                                            <input type="text" disabled value="{{ $index_fact->index_provider }}" class="form-control border-input" name="index_provider" placeholder="Enter Index Provider">
                                        </div>

                                    </div>
                                </div>
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