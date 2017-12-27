@extends('layout.header')
@section('title')
    Profile - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Homess</li>
        <li class="breadcrumb-item">Company Shells</li>
        <li class="breadcrumb-item active">Company Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-profile-on-admin-side') }}">Profile - List</a></li>
        <li class="breadcrumb-item active">Profile - View</li>
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
        <div class="row">
            <div class="col-md-12">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
                    </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">Panel Body</div>
                    <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@endsection