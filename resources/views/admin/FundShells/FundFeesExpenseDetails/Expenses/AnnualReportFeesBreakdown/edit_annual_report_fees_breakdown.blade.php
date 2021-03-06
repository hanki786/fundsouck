@extends('layout.header')
@section('title')
    Annual Report Fees Breakdown - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Fees & Expense Details</li>
        <li class="breadcrumb-item active">Expenses</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-annualReportFeesBreakdown-on-admin-side') }}">Annual Report Fees Breakdown - List</a></li>
        <li class="breadcrumb-item active">Annual Report Fees Breakdown - Edit</li>
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
            <form action="{{ route('update-annualReportFeesBreakdown-on-admin-side',$annual_report->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Annual Report Fees Breakdown</h4>
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

                                            <input type="hidden" name="fund_objective_id" value="{{ $annual_report->id}}">

                                            <input type="hidden" name="user_id" value="{{ $annual_report->user_id}}">


                                            <div class="form-group">
                                            <label for="fund_manager_fees">Fund Manager Fees</label>
                                            <input type="number" value="{{ $annual_report->fund_manager_fees}}" class="form-control border-input" name="fund_manager_fees" placeholder="Enter Fund Manager Fees ">
                                        </div>


                                        <div class="form-group">
                                            <label for="investment_advisor_fees">Investment Advisor Fees</label>
                                            <input type="number" value="{{ $annual_report->investment_advisor_fees}}" class="form-control border-input" name="investment_advisor_fees" placeholder="Enter Investment Advisor Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="distribution_fees">Distribution Fees</label>
                                            <input type="number" value="{{ $annual_report->distribution_fees}}" class="form-control border-input" name="distribution_fees" placeholder="Enter Distribution Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="board_members_fees">Board Members Fees</label>
                                            <input type="number" value="{{ $annual_report->board_members_fees}}" class="form-control border-input" name="board_members_fees" placeholder="Enter Board Members Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="shariah_comitee_fees">Shariah Comitee Fees</label>
                                            <input type="number" value="{{ $annual_report->shariah_comitee_fees}}" class="form-control border-input" name="shariah_comitee_fees" placeholder="Enter Shariah Comitee Fees ">
                                        </div>


                                        <div class="form-group">
                                            <label for="custodian_fees">Custodian Fees</label>
                                            <input type="number" value="{{ $annual_report->custodian_fees}}" class="form-control border-input" name="custodian_fees" placeholder="Enter Custodian Fees">
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="transfer_agent_fees">Transfer Agent Fees</label>
                                            <input type="number" value="{{ $annual_report->transfer_agent_fees}}" class="form-control border-input" name="transfer_agent_fees" placeholder="Enter Transfer Agent Fees">
                                        </div>


                                        <div class="form-group">
                                            <label for="auditor_fees">Auditor Fees</label>
                                            <input type="number" value="{{ $annual_report->auditor_fees}}" class="form-control border-input" name="auditor_fees" placeholder="Enter Auditor Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="administrator_fees">Administrator  Fees</label>
                                            <input type="number" value="{{ $annual_report->administrator_fees}}" class="form-control border-input" name="administrator_fees" placeholder="Enter Administrator Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="publication_fees">Publication Fees</label>
                                            <input type="number" value="{{ $annual_report->publication_fees}}" class="form-control border-input" name="publication_fees" placeholder="Enter Publication Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="regulator_fees">Regulator Fees</label>
                                            <input type="number" value="{{ $annual_report->regulator_fees}}" class="form-control border-input" name="regulator_fees" placeholder="Enter Regulator Fees">
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