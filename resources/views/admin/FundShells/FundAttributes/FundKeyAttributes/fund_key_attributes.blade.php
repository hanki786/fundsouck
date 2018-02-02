@extends('layout.header')
@section('title')
    Fund Key Attribute - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Fund Key Attribute - List</li>
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
                                <i class="fa fa-align-justify"></i> Fund Key Attribute Table
                            </div>
                            <div class="content">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Fund Currency</th>
                                        <th>Inception Date</th>
                                        <th>Inception Price Type</th>
                                        <th>Inception Price</th>
                                        <th>Re-Launch Date</th>
                                        <th>Re-Launch Price</th>
                                        <th>Maturity Date</th>
                                        <th>FY Start Date</th>
                                        <th>FY End Date</th>
                                        <th>Guarantee (%)</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fund_key_attributes as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-fundKeyAttributes-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->fund_currency }}</a>
                                            </td>
                                            <td>{{ $row->inception_date }}</td>
                                            <td>{{ $row->inception_price_type }}</td>
                                            <td>{{ $row->inception_price }}</td>
                                            <td>{{ $row->re_launch_date }}</td>
                                            <td>{{ $row->re_launch_price }}</td>
                                            <td>{{ $row->maturity_date }}</td>
                                            <td>{{ $row->fy_start_date }}</td>
                                            <td>{{ $row->fy_end_date }}</td>
                                            <td>{{ $row->guarantee }}</td>
                                            <td>
                                                <a  href="{{ route('edit-fundKeyAttributes-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('fundKeyAttributes-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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