@extends('layout.header')
@section('title')
    Fund Identity - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Identity Policy</li>
        <li class="breadcrumb-item active">Fund Identity - List</li>
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

        <div class="container-fluid">

            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <i class="fa fa-align-justify"></i> Fund Identity Table
                            </div>
                            <div class="content">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Fund Souk Code</th>
                                        <th>Fund Name</th>
                                        <th>Fund Short Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fund_identities as $row)
                                    <tr id="remote-fundIdentity-{{ $row->id }}">
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <a  href="{{ route('view-fundidentity-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->fund_souk_code }}</a>
                                        </td>
                                        <td>{{ $row->fund_name }}</td>
                                        <td>{{ $row->fund_short_name }}</td>
                                        <td>
                                            <a  href="{{ route('edit-fundidentity-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                            <a href="{{ route('fundidentity-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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