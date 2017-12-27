@extends('layout.header')
@section('title')
    Sourced Statistics - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Sourced Statistics - List</li>
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
                            <i class="fa fa-align-justify"></i> Sourced Statistics Table
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Sharpe Ratio</th>
                                    <th>YTD Current Year</th>
                                    <th>Yield Since Inception</th>
                                    <!--
                                    <th>Yield For 3 Years</th>
                                    <th>Yield For 5 Years</th>
                                    <th>Yield For 10 Years</th>
                                    <th>YTD Standard Deviation</th>
                                    <th>Standard Deviation For 3 Years</th>
                                    <th>Standard Deviation For 5 Years</th>
                                    <th>Standard Deviation For 10 Years</th>
                                    -->
                                    <th>Borrowings</th>
                                    <th>Fund Leverage Ratio</th>
                                    <th>Duration</th>
                                    <th>Last Update Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sourced_statistics as $row)
                                    <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-sourcedStatistics-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->sharpe_ratio }}</a>
                                        </td>
                                        <td>{{ $row->ytd_current_year }}</td>
                                        <td>{{ $row->yield_since_inception }}</td>
                                        <!--
                                        <td>{{ $row->yield_for_3_years }}</td>
                                        <td>{{ $row->yield_for_5_years }}</td>
                                        <td>{{ $row->yield_for_10_years }}</td>
                                        <td>{{ $row->ytd_standard_deviation }}</td>
                                        <td>{{ $row->standard_deviation_for_3_years }}</td>
                                        <td>{{ $row->standard_deviation_for_5_years }}</td>
                                        <td>{{ $row->standard_deviation_for_10_years }}</td>
                                        -->
                                        <td>{{ $row->borrowings }}</td>
                                        <td>{{ $row->fund_leverage_ratio }}</td>
                                        <td>{{ $row->duration }}</td>
                                        <td>{{ $row->last_update_date }}</td>
                                        <td>
                                            <a  href="{{ route('edit-sourcedStatistics-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                            <a href="{{ route('sourcedStatistics-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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