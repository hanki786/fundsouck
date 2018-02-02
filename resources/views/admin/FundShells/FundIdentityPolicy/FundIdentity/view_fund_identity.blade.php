@extends('layout.header')
@section('title')
    Fund Identity - {{$fund_identity->fund_short_name}}
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Identity Policy</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundidentity-on-admin-side') }}">Fund Identity - List</a></li>
        <li class="breadcrumb-item active">Fund Identity - {{$fund_identity->fund_short_name}}</li>
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
            <form action="" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Fund Identity</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="name">Fund Name</label>
                                            <input type="text" class="form-control border-input" name="fund_name"
                                                    value="{{$fund_identity->fund_name}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_name">Fund Short Name</label>
                                            <input type="text" class="form-control border-input" id="short_name" name="fund_short_name"
                                                   value="{{$fund_identity->fund_short_name}}" disabled>
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
@endsection