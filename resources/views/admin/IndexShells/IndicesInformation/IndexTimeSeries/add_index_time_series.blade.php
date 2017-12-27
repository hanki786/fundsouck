@extends('layout.header')
@section('title')
    Index Time Series - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Index Shells</li>
        <li class="breadcrumb-item active">Indices Information</li>
        <li class="breadcrumb-item active">Index Time Series - New</li>
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
            <form action="{{ route('register-indexTimeSeries-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Index Time Series</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="index_price">Index Price</label>
                                            <input type="text" value="{{ old('index_price') }}" class="form-control" name="index_price" placeholder="Enter Index Price ">
                                        </div>


                                        <div class="form-group">
                                            <label for="index_price_date">Index Price Date</label>
                                            <input type="date" value="{{ old('index_price_date') }}" class="form-control" name="index_price_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_net_return">Index Net Return</label>
                                            <input type="text" value="{{ old('index_net_return') }}" class="form-control" name="index_net_return" placeholder="Enter Index Net Return">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_gross_return">Index Gross Return</label>
                                            <input type="text" value="{{ old('index_gross_return') }}" class="form-control" name="index_gross_return" placeholder="Enter Index Gross Return">
                                        </div>


                                    </div>

                                    <div class="col-md-3">
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