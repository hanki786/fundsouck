@extends('layout.header')
@section('title')
    Annual Report - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-annualReport-on-admin-side') }}">Annual Report - List</a></li>
        <li class="breadcrumb-item">Fund Documents</li>
        <li class="breadcrumb-item active">Annual Report  - Edit</li>
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
            <form action="{{ route('update-annualReport-on-admin-side',$annual_report->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Annual Report </strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                            <input type="hidden" name="fund_objective_id" value="{{ $annual_report->id }}">

                                            <input type="hidden" name="user_id" value="{{ $annual_report->user_id}}">


                                            <div class="form-group">
                                            <label for="financial_statement">Financial Statement</label>
                                            <input type="text" value="{{ $annual_report->financial_statement }}"
                                                   class="form-control" name="financial_statement"  >
                                        </div>

                                        <div class="form-group">
                                            <label for="financial_statement_year">Financial Statement Year</label>
                                            <input type="number" value="{{ $annual_report->financial_statement_year }}"
                                                   class="form-control" name="financial_statement_year" placeholder="2002">
                                        </div>

                                        <div class="form-group">
                                            <label for="financial_statement_date">Financial Statement Date</label>
                                            <input type="date" value="{{ $annual_report->financial_statement_date }}"
                                                   class="form-control" name="financial_statement_date" >
                                        </div>

                                    </div>
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