@extends('layout.header')
@section('title')
    Investor Type - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Investor Type - New</li>
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
                <form action="{{ route('register-investorType-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Investor Type</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
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


                                        <div class="form-group">
                                        <label for="institutional">Institutional</label>
                                        <select class="form-control input-sm" name="institutional">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="retail">Retail</label>
                                        <select class="form-control input-sm" name="retail">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="hnw">HNW</label>
                                        <select class="form-control input-sm" name="hnw">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="uhnw">UHNW</label>
                                        <select class="form-control input-sm" name="uhnw">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="qualified">Qualified</label>
                                        <select class="form-control input-sm" name="qualified">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="private">Private</label>
                                        <select class="form-control input-sm" name="private">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    </div>
                                    <div class="col-md-3"></div>
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
    </main>
@endsection