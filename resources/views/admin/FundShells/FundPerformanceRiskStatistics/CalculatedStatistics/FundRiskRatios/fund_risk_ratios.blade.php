@extends('layout.header')
@section('title')
    Fund Risk Ratio - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Calculated Statistics</li>
        <li class="breadcrumb-item active">Fund Risk Ratio - List</li>
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
                            <i class="fa fa-align-justify"></i> Fund Risk Ratio Table
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Bear Beta</th>
                                    <th>Beta</th>
                                    <th>Bull Beta</th>
                                    <th>Bull/Bear Beta Ratio</th>
                                    <th>Calmar Ratio</th>
                                    <th>Correlation</th>
                                    <th>Covariance</th>
                                    <th>Downside Deviation</th>
                                    <!--
                                    <th>Information Ratio</th>
                                    <th>Israelsen Ratio</th>
                                    <th>Alpha</th>
                                    <th>Kurtosis</th>
                                    <th>Synthetic Risk Reward Indicator</th>
                                    <th>Maximum Drawdown</th>
                                    <th>Maximum Drawdown Period</th>
                                    <th>Maximum Gain</th>
                                    <th>Maximum Loss</th>
                                    -->
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fund_risk_ratio as $row)
                                    <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-fundRiskRatios-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->bear_beta }}</a>
                                        </td>
                                        <td>{{ $row->beta }}</td>
                                        <td>{{ $row->bull_beta }}</td>
                                        <td>{{ $row->bull_bear_beta_ratio }}</td>
                                        <td>{{ $row->calmar_ratio }}</td>
                                        <td>{{ $row->correlation }}</td>
                                        <td>{{ $row->covariance }}</td>
                                        <td>{{ $row->downside_deviation }}</td>
                                        <td>
                                            <a  href="{{ route('edit-fundRiskRatios-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                            <a href="{{ route('fundRiskRatios-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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