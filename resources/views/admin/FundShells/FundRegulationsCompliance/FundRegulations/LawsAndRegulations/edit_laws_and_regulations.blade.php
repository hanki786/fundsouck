@extends('layout.header')
@section('title')
    Laws and Regulations - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Regulations</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-lawsAndRegulations-on-admin-side') }}">Laws and Regulations - List</a></li>
        <li class="breadcrumb-item active">Laws and Regulations - Edit</li>
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
            <form action="{{ route('update-lawsAndRegulations-on-admin-side',$law_regulations->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Law and Regulation</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
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

                                            <input type="hidden" name="id" value="{{ $law_regulations->id}}">

                                            <input type="hidden" name="user_id" value="{{ $law_regulations->user_id}}">


                                        <div class="form-group">
                                            <label for="ucits_directive">UCITS Directive</label>
                                            <select class="form-control input-sm" name="ucits_directive">
                                                <option {{ $law_regulations->ucits_directive == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $law_regulations->ucits_directive == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="aifmd_directive">AIFMD Directive</label>
                                            <select class="form-control input-sm" name="aifmd_directive">
                                                <option {{ $law_regulations->aifmd_directive == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $law_regulations->aifmd_directive == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="aifmd_status">AIFMD Status</label>
                                            <select class="form-control input-sm" name="aifmd_status">
                                                <option {{ $law_regulations->aifmd_status == "Authorized"?
                                                'selected':'' }}>Authorized </option>
                                                <option {{ $law_regulations->aifmd_status == "Registered"?'
                                                selected':'' }}>Registered</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="fatca_compliant">FATCA Compliant</label>
                                            <select class="form-control input-sm" name="fatca_compliant">
                                                <option {{ $law_regulations->fatca_compliant == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $law_regulations->fatca_compliant == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="giin_number">GIIN Number</label>
                                            <input type="text" class="form-control" name="giin_number" placeholder="Enter GIIN Number"
                                                   value="{{ $law_regulations->giin_number}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="lei_code">LEI Code</label>
                                            <input type="text" class="form-control" name="lei_code" placeholder="Enter LEI Code"
                                                   value="{{ $law_regulations->lei_code}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="last_update_date">Last Update Date</label>
                                            <input type="date" class="form-control" name="last_update_date" placeholder="Enter City"
                                                   value="{{ $law_regulations->last_update_date}}">
                                        </div>

                                    </div>
                                    <div class="col-md-3"></div>
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