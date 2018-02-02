@extends('layout.header')
@section('title')
    Fund Identity - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Identity Policy</li>
        <li class="breadcrumb-item active">Fund Identity - New</li>
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
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('register-fundidentity-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Fund Identity</h4>
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
                                            <label for="name">Fund Name</label>
                                            <input type="text" class="form-control border-input" id="name" name="fund_name"
                                                   placeholder="Enter fund name">
                                        </div>
                                        <div class="form-group">
                                            <label for="short_name">Fund Short Name</label>
                                            <input type="text" class="form-control border-input" id="short_name" name="fund_short_name"
                                                   placeholder="Enter fund short name">
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-save"></i>
                                    Save
                                </button>
                                <button type="reset" class="btn btn-danger btn-fill"><i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                </div>
            </form>
        </div>

    </div>
@endsection