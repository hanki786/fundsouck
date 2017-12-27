@extends('layout.header')
@section('title')
    Compliance Officer - List
@endsection
@section('content')
    <!-- Main content -->
        <div class="container-fluid">

            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> Compliance Officers Table
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Compliance Officer Name</th>
                                        <th>Telephone</th>
                                        <th>Fax</th>
                                        <th>Email</th>
                                        <th>URL</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Postal Code</th>
                                        <th>Country</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($compliance_officer as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-complianceOfficer-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->compliance_officer_name }}</a>
                                            </td>
                                            <td>{{ $row->telephone }}</td>
                                            <td>{{ $row->fax }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->url }}</td>
                                            <td>{{ $row->address }}</td>
                                            <td>{{ $row->city }}</td>
                                            <td>{{ $row->postal_code }}</td>
                                            <td>{{ $row->country }}</td>
                                            <td>
                                                <a  href="{{ route('edit-complianceOfficer-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('complianceOfficer-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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