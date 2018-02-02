@extends('layout.header')
@section('title')
    Related Funds - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Related Funds - List</li>
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
                                <i class="fa fa-align-justify"></i> Related Funds Table
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Vehicle Name</th>
                                        <th>Vehicle Code</th>
                                        <th>Umbrella Name</th>
                                        <th>Umbrella Code</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($related_fund as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-relatedFunds-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->vehicle_name }}</a>
                                            </td>
                                            <td>{{ $row->vehicle_code }}</td>
                                            <td>{{ $row->umbrella_name }}</td>
                                            <td>{{ $row->umbrella_code }}</td>
                                            <td>
                                                <a  href="{{ route('edit-relatedFunds-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('relatedFunds-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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
    </main>
@endsection