@extends('layout.header')
@section('title')
    Annual Report Fees Breakdown - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Fees & Expense Details</li>
        <li class="breadcrumb-item active">Expenses</li>
        <li class="breadcrumb-item active">Annual Report Fees Breakdown - New</li>
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
            <form action="{{ route('register-annualReportFeesBreakdown-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Annual Report Fees Breakdown</h4>
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
                                        <div class="form-group">
                                            <label for="name">Fund Identity</label>
                                            <select type="text" class="form-control border-input" id="fund_identity_id" name="fund_identity_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_identities as $fund_identity)
                                                    <option value="{{ $fund_identity->id }}">{{ $fund_identity->fund_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="fund_manager_fees">Fund Manager Fees</label>
                                            <input type="number" value="{{ old('fund_manager_fees') }}" class="form-control border-input" name="fund_manager_fees" placeholder="Enter Fund Manager Fees ">
                                        </div>


                                        <div class="form-group">
                                            <label for="investment_advisor_fees">Investment Advisor Fees</label>
                                            <input type="number" value="{{ old('investment_advisor_fees') }}" class="form-control border-input" name="investment_advisor_fees" placeholder="Enter Investment Advisor Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="distribution_fees">Distribution Fees</label>
                                            <input type="number" value="{{ old('distribution_fees') }}" class="form-control border-input" name="distribution_fees" placeholder="Enter Distribution Fees">
                                        </div>

                                            <div class="form-group">
                                                <label for="board_members_fees">Board Members Fees</label>
                                                <input type="number" value="{{ old('board_members_fees') }}" class="form-control border-input" name="board_members_fees" placeholder="Enter Board Members Fees">
                                            </div>

                                            <div class="form-group">
                                                <label for="shariah_comitee_fees">Shariah Comitee Fees</label>
                                                <input type="number" value="{{ old('shariah_comitee_fees') }}" class="form-control border-input" name="shariah_comitee_fees" placeholder="Enter Shariah Comitee Fees ">
                                            </div>


                                            <div class="form-group">
                                                <label for="custodian_fees">Custodian Fees</label>
                                                <input type="number" value="{{ old('custodian_fees') }}" class="form-control border-input" name="custodian_fees" placeholder="Enter Custodian Fees">
                                            </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="transfer_agent_fees">Transfer Agent Fees</label>
                                            <input type="number" value="{{ old('transfer_agent_fees') }}" class="form-control border-input" name="transfer_agent_fees" placeholder="Enter Transfer Agent Fees">
                                        </div>


                                        <div class="form-group">
                                            <label for="auditor_fees">Auditor Fees</label>
                                            <input type="number" value="{{ old('auditor_fees') }}" class="form-control border-input" name="auditor_fees" placeholder="Enter Auditor Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="administrator_fees">Administrator  Fees</label>
                                            <input type="number" value="{{ old('administrator_fees') }}" class="form-control border-input" name="administrator_fees" placeholder="Enter Administrator Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="publication_fees">Publication Fees</label>
                                            <input type="number" value="{{ old('publication_fees') }}" class="form-control border-input" name="publication_fees" placeholder="Enter Publication Fees">
                                        </div>

                                        <div class="form-group">
                                            <label for="regulator_fees">Regulator Fees</label>
                                            <input type="number" value="{{ old('regulator_fees') }}" class="form-control border-input" name="regulator_fees" placeholder="Enter Regulator Fees">
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