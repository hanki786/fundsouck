@extends('layout.header')
@section('title')
    Related Funds - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-relatedFunds-on-admin-side') }}">Related Funds - List</a></li>
        <li class="breadcrumb-item active">Related Funds - View</li>
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
                                <h4 class="title">Add Related Funds</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">


                                        <div class="form-group">
                                            <label for="vehicle_name">Vehicle Name</label>
                                            <input type="text" class="form-control border-input" name="vehicle_name" placeholder="Enter Vehicle Name" value="{{ $related_fund->vehicle_name}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="vehicle_code">Vehicle Code</label>
                                            <input type="text" class="form-control border-input" name="vehicle_code" placeholder="Enter Vehicle Code" value="{{ $related_fund->vehicle_code}}" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="umbrella_name">Umbrella Name</label>
                                            <input type="text" class="form-control border-input" name="umbrella_name" placeholder="Enter Umbrella Name" value="{{ $related_fund->umbrella_name}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="umbrella_code">Umbrella Code</label>
                                            <input type="text" class="form-control border-input" name="umbrella_code" placeholder="Enter Umbrella Code" value="{{ $related_fund->umbrella_code}}" disabled>
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