@extends('layout.header')
@section('title')
    Terms and Conditions  - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Documents</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-termsAndConditions-on-admin-side') }}">Terms and Conditions - List</a></li>
        <li class="breadcrumb-item active">Terms and Conditions  - Edit</li>
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
            <form action="{{ route('update-termsAndConditions-on-admin-side',$terms_and_conditions->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Terms and Conditions </h4>
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

                                            <input type="hidden" name="fund_objective_id" value="{{ $terms_and_conditions->id }}">

                                            <input type="hidden" name="user_id" value="{{ $terms_and_conditions->user_id}}">


                                            <div class="form-group">
                                            <label for="propsectus">Propsectus</label>
                                            <input type="text" value="{{ $terms_and_conditions->propsectus }}"
                                                   class="form-control border-input" name="propsectus"  >
                                        </div>

                                        <div class="form-group">
                                            <label for="prospectus_date">Prospectus Date</label>
                                            <input type="date" value="{{ $terms_and_conditions->prospectus_date }}"
                                                   class="form-control border-input" name="prospectus_date" >
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