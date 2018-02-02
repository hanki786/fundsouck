@extends('layout.header')
@section('title')
    Index Time Series - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Index Shells</li>
        <li class="breadcrumb-item active">Indices Information</li>
        <li class="breadcrumb-item active">Index Time Series - List</li>
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
                            <i class="fa fa-align-justify"></i> Index Time Series Table
                        </div>
                        <div class="content table-responsive">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Index Price</th>
                                    <th>Index Price Date</th>
                                    <th>Index Net Return</th>
                                    <th>Index Gross Return</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($index_time_series as $row)
                                    <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-indexTimeSeries-on-admin-side', $row->id) }}"
                                                class="btn btn-default btn-sm">{{ $row->index_price }}</a>
                                        </td>
                                        <td>{{ $row->index_price_date}}</td>
                                        <td>{{ $row->index_net_return	 }}</td>
                                        <td>{{ $row->index_gross_return }}</td>
                                        <td>
                                            <a  href="{{ route('edit-indexTimeSeries-on-admin-side', $row->id) }}"
                                                class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>

                                            <a href="{{ route('indexTimeSeries-delete', $row->id) }}"
                                               class="btn btn-danger bt n-sm"><i class="fa fa-remove"></i></a>
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