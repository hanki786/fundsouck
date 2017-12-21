@extends('layout.header')
@section('title')
    Annual Report Fees Breakdown - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Fees & Expense Details</li>
        <li class="breadcrumb-item active">Expenses</li>
        <li class="breadcrumb-item active">Annual Report Fees Breakdown - List</li>
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Annual Report Fees Breakdown Table
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Fund Manager Fees</th>
                                    <th>Investment Advisor Fees</th>
                                    <th>Distribution Fees</th>
                                    <th>Board Members Fees</th>
                                    <th>Shariah Comitee Fees</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($annual_report as $row)
                                    <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-annualReportFeesBreakdown-on-admin-side', $row->id) }}"
                                                class="btn btn-default btn-sm">{{ $row->fund_manager_fees }}</a>
                                        </td>
                                        <td>{{ $row->investment_advisor_fees }}</td>
                                        <td>{{ $row->distribution_fees	 }}</td>
                                        <td>{{ $row->board_members_fees }}</td>
                                        <td>{{ $row->shariah_comitee_fees }}</td>
                                        <td>
                                            <a  href="{{ route('edit-annualReportFeesBreakdown-on-admin-side', $row->id) }}"
                                                class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>

                                            <a href="{{ route('annualReportFeesBreakdown-delete', $row->id) }}"
                                               class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav> -->
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>

    </div>
    <!-- /.conainer-fluid -->
@endsection