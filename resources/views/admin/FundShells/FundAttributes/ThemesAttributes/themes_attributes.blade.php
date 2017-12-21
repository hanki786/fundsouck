@extends('layout.header')
@section('title')
    Themes Attributes - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Themes Attributes - List</li>
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
                                <i class="fa fa-align-justify"></i> Themes Attributes Table
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>FoFs-External</th>
                                        <th>FoFs-Internal</th>
                                        <th>F-of ETFs</th>
                                        <th>F-of REITs</th>
                                        <th>F-of HFs</th>
                                        <th>F-of PEFs</th>
                                        <th>Hedged</th>
                                        <th>Index Tracking</th>
                                        <th>Index Replication Method</th>
                                        <th>Shariah Compliant</th>
                                        <th>Leveraged</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($theme_attributes as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-themesAttributes-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->fofs_external }}</a>
                                            </td>
                                            <td>{{ $row->fofs_internal }}</td>
                                            <td>{{ $row->f_of_etfs }}</td>
                                            <td>{{ $row->f_of_reits }}</td>
                                            <td>{{ $row->f_of_hfs }}</td>
                                            <td>{{ $row->f_of_pefs }}</td>
                                            <td>{{ $row->hedged }}</td>
                                            <td>{{ $row->index_tracking }}</td>
                                            <td>{{ $row->index_replication_method }}</td>
                                            <td>{{ $row->shariah_compliant }}</td>
                                            <td>{{ $row->leveraged }}</td>
                                            <td>
                                                <a  href="{{ route('edit-themesAttributes-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('themesAttributes-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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