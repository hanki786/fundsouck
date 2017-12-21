@extends('layout.header')
@section('title')
    Address - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Company Shells</li>
        <li class="breadcrumb-item active">Company Information</li>
        <li class="breadcrumb-item active">Contact Details</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-address-on-admin-side') }}">Address - List</a></li>
        <li class="breadcrumb-item active">Address - View</li>
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
                                <strong>Address</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="line_1">Line 1</label>
                                            <input disabled type="text" value="{{ $address->line_1 }}" class="form-control" name="line_1" placeholder="Line 1 ">
                                        </div>


                                        <div class="form-group">
                                            <label for="line_2">Line 2</label>
                                            <input disabled type="text" value="{{$address->line_2 }}" class="form-control" name="line_2" placeholder="Line 2">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input disabled type="text" value="{{ $address->city }}" class="form-control" name="city" placeholder="City">
                                        </div>


                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input disabled type="text" value="{{ $address->postal_code }}" class="form-control" name="postal_code" placeholder="Postal Code">
                                        </div>


                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input disabled type="text" value="{{ $address->country }}" class="form-control" name="country" placeholder="Country">
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