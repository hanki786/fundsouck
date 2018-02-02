@extends('layout.header')
@section('title')
    Laws and Regulations - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Regulations</li>
        <li class="breadcrumb-item active">Laws and Regulations - List</li>
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
                                <i class="fa fa-align-justify"></i> Laws and Regulations Table
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>UCITS Directive</th>
                                        <th>AIFMD Directive</th>
                                        <th>AIFMD Status</th>
                                        <th>FATCA Compliant</th>
                                        <th>GIIN Number</th>
                                        <th>LEI Code</th>
                                        <th>Last Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($law_regulations as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-lawsAndRegulations-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->cuits_directive }}</a>
                                            </td>
                                            <td>{{ $row->aifmd_directive }}</td>
                                            <td>{{ $row->aifmd_status }}</td>
                                            <td>{{ $row->fatca_compliant }}</td>
                                            <td>{{ $row->giin_number }}</td>
                                            <td>{{ $row->lei_code }}</td>
                                            <td>{{ $row->last_update_date }}</td>
                                            <td>
                                                <a  href="{{ route('edit-lawsAndRegulations-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('lawsAndRegulations-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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