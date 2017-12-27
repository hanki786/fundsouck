@extends('layout.header')
@section('title')
    Fund Overview
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
    </ol>
@endsection
@section('content')
    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <h3>Fund Overview
            </h3>
            <div class="panel-group col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#1">Fund Identity</a>
                            </h4>
                        </div>
                        <div id="1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 1
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#2">Fund Objective & Strategy</a>
                            </h4>
                        </div>
                        <div id="2" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 2
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#3">Fund Asset Attributes</a>
                            </h4>
                        </div>
                        <div id="3" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 3
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#4">Fund Classification & Benchmarks</a>
                            </h4>
                        </div>
                        <div id="4" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 4
                            </div>
                        </div>
                    </div>

                </div>


                <div class="panel-group col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#1">Latest Price</a>
                            </h4>
                        </div>
                        <div id="1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 1
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#1">YTD Performance</a>
                            </h4>
                        </div>
                        <div id="1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 1
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse in" href="#2">Fund Key Attributes</a>
                            </h4>
                        </div>
                        <div id="2" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 2
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#3">Fund Sales & Distribution</a>
                            </h4>
                        </div>
                        <div id="3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Body 3
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#4">Subscription</a>
                            </h4>
                        </div>
                        <div id="4" class="panel-collapse collapse">
                            <div class="panel-body">
                                Body 4
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#4">Subscription</a>
                            </h4>
                        </div>
                        <div id="4" class="panel-collapse collapse">
                            <div class="panel-body">
                                Body 4
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@endsection