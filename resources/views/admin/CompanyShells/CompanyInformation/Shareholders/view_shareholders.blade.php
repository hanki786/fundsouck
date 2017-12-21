@extends('layout.header')
@section('title')
    Shareholders - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Company Shells</li>
        <li class="breadcrumb-item active">Company Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-shareholders-on-admin-side') }}">Shareholders - List</a></li>
        <li class="breadcrumb-item active">Shareholders - View</li>
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
                            <div class="card-header">
                                <strong>Edit Shareholders</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="shareholder_name">Shareholder Name</label>
                                            <input disabled type="text" value="{{  $shareholders->shareholder_name }}" class="form-control" name="shareholder_name" placeholder="Enter Shareholder Name ">
                                        </div>


                                        <div class="form-group">
                                            <label for="percentage">Percentage</label>
                                            <input disabled type="text" value="{{ $shareholders->percentage }}" class="form-control" name="percentage" placeholder="Enter Percentage">
                                        </div>


                                    </div>

                                    <div class="col-sm-3">
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