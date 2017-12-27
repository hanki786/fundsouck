@extends('layout.header')
@section('title')
    Fund History - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Fund History - List</li>
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
                                <i class="fa fa-align-justify"></i> Fund History Table
                            </div>
                            <p class="text-muted font-13 m-b-30"></code>

                            </p>
                            <div class="card-body table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered bulk_action table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Successor Name</th>
                                        <th>Successor Code</th>
                                        <th>Succession Date</th>
                                        <th>Extended History Date</th>
                                        <th>Available History Date</th>
                                        <th>Primary Share Class Name</th>
                                        <th>Primary Share Class Code</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fund_history as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-fundHistory-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->successorname }}</a>
                                            </td>
                                            <td>{{ $row->successor_code }}</td>
                                            <td>{{ $row->succession_date }}</td>
                                            <td>{{ $row->extended_history_date }}</td>
                                            <td>{{ $row->available_history_date }}</td>
                                            <td>{{ $row->primary_share_class_name	 }}</td>
                                            <td>{{ $row->primary_share_class_code }}</td>
                                            <td>
                                                <a  href="{{ route('edit-fundHistory-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('fundHistory-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

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
