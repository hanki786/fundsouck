@extends('layout.header')
@section('title')
    Profile - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Homess</li>
        <li class="breadcrumb-item">Company Shells</li>
        <li class="breadcrumb-item active">Company Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-profile-on-admin-side') }}">Profile - List</a></li>
        <li class="breadcrumb-item active">Profile - View</li>
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
        <div class="row">
            <div class="col-md-12">
            <h3>Fund Overview</h3>
            <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#1">Fund Identity</a>
                            </h4>
                        </div>
                        <div id="1" class="panel-collapse collapse">
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
                        <div id="2" class="panel-collapse collapse">
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
                        <div id="3" class="panel-collapse collapse">
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