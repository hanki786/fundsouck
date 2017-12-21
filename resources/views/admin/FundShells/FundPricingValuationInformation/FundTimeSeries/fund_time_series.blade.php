@extends('layout.header')
@section('title')
    Fund Time Series - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item active">Fund Time Series - List</li>
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
                            <i class="fa fa-align-justify"></i> Fund Time Series Table
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Fund Net Assets</th>
                                    <th>Asset Under Management</th>
                                    <th>Initial Fund Size</th>
                                    <th>Fund Manager Investment</th>
                                    <th>Fund Manager Investment %</th>
                                    <th>Last Update Date</th>
                                    <th>Last Valuation Date</th>
                                    <th>Valuation Basis</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fund_time_series as $row)
                                    <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-fundTimeSeries-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->fund_net_assets }}</a>
                                        </td>
                                        <td>{{ $row->asset_under_management }}</td>
                                        <td>{{ $row->initial_fund_size }}</td>
                                        <td>{{ $row->fund_manager_investment }}</td>
                                        <td>{{ $row->fund_manager_investment_perc }}</td>
                                        <td>{{ $row->last_update_date }}</td>
                                        <td>{{ $row->last_valuation_date }}</td>
                                        <td>{{ $row->valuation_basis }}</td>
                                        <td>
                                            <a  href="{{ route('edit-fundTimeSeries-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                            <a href="{{ route('fundTimeSeries-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $fund_time_series->links() }}
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
    </main>
@endsection