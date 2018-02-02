@extends('layout.header')
@section('title')
    Laws and Regulations - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Regulations</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-lawsAndRegulations-on-admin-side') }}">Laws and Regulations - List</a></li>
        <li class="breadcrumb-item active">Laws and Regulations - View</li>
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
                                <h4 class="title">Law and Regulation</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="ucits_directive">UCITS Directive</label>
                                            <select class="form-control input-sm" name="ucits_directive" disabled>
                                                <option {{ $law_regulations->ucits_directive == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $law_regulations->ucits_directive == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="aifmd_directive">AIFMD Directive</label>
                                            <select class="form-control input-sm" name="aifmd_directive" disabled>
                                                <option {{ $law_regulations->aifmd_directive == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $law_regulations->aifmd_directive == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="aifmd_status">AIFMD Status</label>
                                            <select class="form-control input-sm" name="aifmd_status" disabled>
                                                <option {{ $law_regulations->aifmd_status == "Authorized"?
                                                'selected':'' }}>Authorized </option>
                                                <option {{ $law_regulations->aifmd_status == "Registered"?'
                                                selected':'' }}>Registered</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="fatca_compliant">FATCA Compliant</label>
                                            <select class="form-control input-sm" name="fatca_compliant" disabled>
                                                <option {{ $law_regulations->fatca_compliant == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $law_regulations->fatca_compliant == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="giin_number">GIIN Number</label>
                                            <input type="text" class="form-control border-input" name="giin_number" placeholder="Enter GIIN Number"
                                                   value="{{ $law_regulations->giin_number}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="lei_code">LEI Code</label>
                                            <input type="text" class="form-control border-input" name="lei_code" placeholder="Enter LEI Code"
                                                   value="{{ $law_regulations->lei_code}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="last_update_date">Last Update Date</label>
                                            <input type="date" class="form-control border-input" name="last_update_date" placeholder="Enter City"
                                                   value="{{ $law_regulations->last_update_date}}" disabled>
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