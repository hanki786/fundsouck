@extends('layout.header')
@section('title')
    Fund Performance - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Performance & Risk Statistics</li>
        <li class="breadcrumb-item active">Calculated Statistics</li>
        <li class="breadcrumb-item active">Fund Performance - List</li>
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
                            <i class="fa fa-align-justify"></i> Fund Performance Table
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Annual Compound Return</th>
                                    <th>Annualised Distribution Yield</th>
                                    <th>Indexed Performance</th>
                                    <th>Percentage Growth</th>
                                    <!--
                                    <th>Average Gain</th>
                                    <th>Average Loss</th>
                                    <th>Average Return</th>
                                    -->
                                    <th>Relative Average Return</th>
                                    <th>Relative Performance</th>
                                    <th>Performance</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fund_performance as $row)
                                    <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-fundPerformance-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->annual_compound_return }}</a>
                                        </td>
                                        <td>{{ $row->annualised_distribution_yield }}</td>
                                        <td>{{ $row->indexed_performance }}</td>
                                        <td>{{ $row->percentage_growth }}</td>
                                    <!--
                                        <td>{{ $row->average_gain }}</td>
                                        <td>{{ $row->average_loss }}</td>
                                        <td>{{ $row->average_return }}</td>
                                      -->
                                        <td>{{ $row->relative_average_return }}</td>
                                        <td>{{ $row->relative_performance }}</td>
                                        <td>{{ $row->performance }}</td>
                                        <td>
                                            <a  href="{{ route('edit-fundPerformance-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                            <a href="{{ route('fundPerformance-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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