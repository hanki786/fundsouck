@extends('layout.header')
@section('title')
    Index Time Series - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Index Shells</li>
        <li class="breadcrumb-item active">Indices Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-indexTimeSeries-on-admin-side') }}">Index Time Series - List</a></li>
        <li class="breadcrumb-item active">Index Time Series - View</li>
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
                                <h4 class="title">Index Time Series</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="index_price">Index Price</label>
                                            <input type="text" disabled value="{{ $index_time_series->index_price}}" class="form-control border-input" name="index_price" placeholder="Enter Index Price ">
                                        </div>


                                        <div class="form-group">
                                            <label for="index_price_date">Index Price Date</label>
                                            <input type="date" disabled value="{{ $index_time_series->index_price_date }}" class="form-control border-input" name="index_price_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_net_return">Index Net Return</label>
                                            <input type="text" disabled value="{{ $index_time_series->index_net_return }}" class="form-control border-input" name="index_net_return" placeholder="Enter Index Net Return">
                                        </div>

                                        <div class="form-group">
                                            <label for="index_gross_return">Index Gross Return</label>
                                            <input type="text" disabled value="{{ $index_time_series->index_gross_return }}" class="form-control border-input" name="index_gross_return" placeholder="Enter Index Gross Return">
                                        </div>


                                    </div>

                                    <div class="col-md-3">
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