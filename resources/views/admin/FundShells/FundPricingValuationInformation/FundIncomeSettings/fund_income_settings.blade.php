@extends('layout.header')
@section('title')
    Fund Income Settings - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item active">Fund Income Settings - List</li>
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
                        <div class="header">
                            <i class="fa fa-align-justify"></i> Fund Income Settings Table
                        </div>
                        <div class="content">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Ex-Dividend Date</th>
                                    <th>Dividend Amount</th>
                                    <th>Payment Date</th>
                                    <th>Dividend Frequency</th>
                                    <th>Dividend Currency</th>
                                    <th>Default Tax Basis</th>
                                    <th>Corporate Action Type</th>
                                <!--
                                    <th>Income Distribution</th>
                                    <th>Income Operation</th>
                                    <th>Reinvest Date</th>
                                    -->
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fund_income_settings as $row)
                                    <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-fundIncomeSettings-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->ex_dividend_date }}</a>
                                        </td>
                                        <td>{{ $row->dividend_amount }}</td>
                                        <td>{{ $row->payment_date }}</td>
                                        <td>{{ $row->dividend_frequency }}</td>
                                        <td>{{ $row->dividend_currency }}</td>
                                        <td>{{ $row->default_tax_basis }}</td>
                                        <td>{{ $row->corporate_action_type }}</td>
                                        <!--
                                        <td>{{ $row->income_distribution }}</td>
                                        <td>{{ $row->income_operation }}</td>
                                        <td>{{ $row->reinvest_date }}</td>
                                        -->
                                        <td>
                                            <a  href="{{ route('edit-fundIncomeSettings-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                            <a href="{{ route('fundIncomeSettings-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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