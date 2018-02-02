@extends('layout.header')
@section('title')
    Address - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Company Shells</li>
        <li class="breadcrumb-item active">Company Information</li>
        <li class="breadcrumb-item active">Contact Details</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-address-on-admin-side') }}">Address - List</a></li>
        <li class="breadcrumb-item active">Address - Edit</li>
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
            <form action="{{ route('update-address-on-admin-side',$address->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Address</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
                                <div class="row">

                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                            <input type="hidden" name="fund_objective_id" value="{{ $address->id}}">

                                            <input type="hidden" name="user_id" value="{{ $address->user_id}}">

                                            <div class="form-group">
                                            <label for="line_1">Line 1</label>
                                            <input type="text" value="{{ $address->line_1 }}" class="form-control border-input" name="line_1" placeholder="Line 1 ">
                                        </div>


                                        <div class="form-group">
                                            <label for="line_2">Line 2</label>
                                            <input type="text" value="{{$address->line_2 }}" class="form-control border-input" name="line_2" placeholder="Line 2">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" value="{{ $address->city }}" class="form-control border-input" name="city" placeholder="City">
                                        </div>


                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" value="{{ $address->postal_code }}" class="form-control border-input" name="postal_code" placeholder="Postal Code">
                                        </div>


                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" value="{{ $address->country }}" class="form-control border-input" name="country" placeholder="Country">
                                        </div>


                                    </div>
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
@endsection