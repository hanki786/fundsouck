@extends('layout.header')
@section('title')
    Annual Report - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-annualReport-on-admin-side') }}">Annual Report - List</a></li>
        <li class="breadcrumb-item">Fund Documents</li>
        <li class="breadcrumb-item active">Annual Report  - View</li>
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
                                <strong>Annual Report </strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="financial_statement">Financial Statement</label>
                                            <input type="text" value="{{ $annual_report->financial_statement }}"
                                                   class="form-control" name="financial_statement"  disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="financial_statement_year">Financial Statement Year</label>
                                            <input type="number" value="{{ $annual_report->financial_statement_year }}"
                                                   class="form-control" name="financial_statement_year" placeholder="2002" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="financial_statement_date">Financial Statement Date</label>
                                            <input type="date" value="{{ $annual_report->financial_statement_date }}"
                                                   class="form-control" name="financial_statement_date" disabled>
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