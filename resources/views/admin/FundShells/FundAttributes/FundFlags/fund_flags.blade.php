@extends('layout.header')
@section('title')
    Fund Flags - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Fund Flags - List</li>
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
                                <i class="fa fa-align-justify"></i> Fund Flags Table
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Closed Fund</th>
                                        <th>Closed End Fund</th>
                                        <th>Exchange Listed</th>
                                        <th>Primary Share Class</th>
                                        <th>Vehicle</th>
                                        <th>Umbrella</th>
                                        <th>Exchange Traded Fund</th>
                                        <th>Government Bond</th>
                                        <th>Corporate Bond</th>
                                        <!--
                                        <th>Asset Backed Securities</th>
                                        <th>Futures And Options</th>
                                        <th>Infrastructure Fund</th>
                                        <th>Hedge Fund - Non Reporting</th>
                                        <th>Insurance Funds</th>
                                        <th>Short</th>
                                        <th>Linked Fund</th>
                                        <th>Pre-IPO</th>
                                        <th>Private Fund</th>
                                        <th>Provident Fund</th>
                                        <th>REIT</th>
                                        <th>ELTIF</th>
                                        !-->
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fund_flags as $row)
                                        <tr id="remote-fundkeyAttribute-{{ $row->id }}">
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <a  href="{{ route('view-fundFlags-on-admin-side', $row->id) }}" class="btn btn-default btn-sm">{{ $row->closed_fund }}</a>
                                            </td>
                                            <td>{{ $row->closed_end_fund }}</td>
                                            <td>{{ $row->exchange_listed }}</td>
                                            <td>{{ $row->primary_share_class }}</td>
                                            <td>{{ $row->vehicle }}</td>
                                            <td>{{ $row->umbrella }}</td>
                                            <td>{{ $row->exchange_traded_fund }}</td>
                                            <td>{{ $row->government_bond }}</td>
                                            <td>{{ $row->corporate_bond }}</td>
                                        <!--
                                            <td>{{ $row->asset_backed_securities }}</td>
                                            <td>{{ $row->futures_and_options }}</td>
                                            <td>{{ $row->infrastructure_fund }}</td>

                                            <td>{{ $row->hedge_fund_non_reporting }}</td>
                                            <td>{{ $row->insurance_funds }}</td>
                                            <td>{{ $row->short }}</td>
                                            <td>{{ $row->linked_fund }}</td>
                                            <td>{{ $row->pre_ipo }}</td>
                                            <td>{{ $row->private_fund }}</td>
                                            <td>{{ $row->provident_fund }}</td>
                                            <td>{{ $row->reit }}</td>
                                            <td>{{ $row->eltif }}</td>
                                            !-->
                                            <td>
                                                <a  href="{{ route('edit-fundFlags-on-admin-side', $row->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil "> Edit</i></a>
                                                <a href="{{ route('fundFlags-delete', $row->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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