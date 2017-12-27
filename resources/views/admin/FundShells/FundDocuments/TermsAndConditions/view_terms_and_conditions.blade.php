@extends('layout.header')
@section('title')
    Terms and Conditions  - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Documents</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-termsAndConditions-on-admin-side') }}">Terms and Conditions - List</a></li>
        <li class="breadcrumb-item active">Terms and Conditions - View</li>
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
                                <strong>Term and Condition </strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="propsectus">Propsectus</label>
                                            <input type="text" value="{{ $terms_and_conditions->propsectus }}"
                                                   class="form-control" name="propsectus"  disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="prospectus_date">Prospectus Date</label>
                                            <input type="date" value="{{ $terms_and_conditions->prospectus_date }}"
                                                   class="form-control" name="prospectus_date"  disabled>
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