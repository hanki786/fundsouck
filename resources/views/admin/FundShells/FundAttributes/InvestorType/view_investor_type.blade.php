@extends('layout.header')
@section('title')
    Investor Type - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-investorType-on-admin-side') }}">Investor Type - List</a></li>
        <li class="breadcrumb-item active">Investor Type - View</li>
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
                                <strong>Investor Type</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">


                                        <div class="form-group">
                                            <label for="institutional">Institutional</label>
                                            <select class="form-control input-sm" name="institutional" disabled>
                                                <option {{ $investor_type->institutional == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $investor_type->institutional == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="retail">Retail</label>
                                            <select class="form-control input-sm" name="retail" disabled>
                                                <option {{ $investor_type->retail == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $investor_type->retail == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="hnw">HNW</label>
                                            <select class="form-control input-sm" name="hnw" disabled>
                                                <option {{ $investor_type->hnw == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $investor_type->hnw == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="uhnw">UHNW</label>
                                            <select class="form-control input-sm" name="uhnw" disabled>
                                                <option {{ $investor_type->uhnw == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $investor_type->uhnw == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="qualified">Qualified</label>
                                            <select class="form-control input-sm" name="qualified" disabled>
                                                <option {{ $investor_type->qualified == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $investor_type->qualified == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="private">Private</label>
                                            <select class="form-control input-sm" name="private" disabled>
                                                <option {{ $investor_type->private == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $investor_type->private == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-3"></div>
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