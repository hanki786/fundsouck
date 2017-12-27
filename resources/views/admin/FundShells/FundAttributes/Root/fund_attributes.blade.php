@extends('layout.header')
@section('title')
    Fund Attributes - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes - List</li>
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
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> Fund Attributes Table
                            </div>
                            <div class="card-body">
                            <div class="responsive">
                                <table class="table table-responsive table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Dated</th>
                                        <th>Fund Key Attributes</th>
                                        <th>Fund Asset Attributes</th>
                                        <th>Fund Sales Distributions</th>
                                        <th>Fund History</th>
                                        <th>Related Fund</th>
                                        <th>Fund Flag</th>
                                        <th>Investor Type</th>
                                        <th>Themes Attributes</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fund_attributes as $row)
                                    <tr id="remote-fund_attributes-{{ $row->fa_id }}">
                                        <td>{{ $row->fa_id }}</td>
                                        <td>{{ date('F,m Y',strtotime($row->dated)) }}</td>
                                        <td>
                                            <a  href="{{ route('view-fundKeyAttributes-on-admin-side', $row->fka_id) }}" class="btn btn-default ">
                                            FKA - {{ $row->fka_id }} - {{ $row->fund_currency }} - {{ $row->inception_price_type }}</a>
                                        </td>
                                        <td>
                                            <a  href="{{ route('view-fundAssetAttributes-on-admin-side', $row->faa_id) }}" class="btn btn-default ">
                                            {{ $row->asset_class }} - {{ $row->asset_universe }}</a>
                                        </td>
                                        <td>
                                            <a  href="{{ route('view-fundSalesDistribution-on-admin-side', $row->fsd_id) }}" class="btn btn-default ">
                                            FSD - {{ $row->fsd_id }} - {{ $row->countries_of_distribution }}</a>
                                        </td>
                                        <td>
                                            <a  href="{{ route('view-fundHistory-on-admin-side', $row->fh_id) }}" class="btn btn-default ">
                                            {{ $row->primary_share_class_name }}</a>
                                        </td>
                                        <td>
                                            <a  href="{{ route('view-relatedFunds-on-admin-side', $row->rf_id) }}" class="btn btn-default ">
                                            {{ $row->vehicle_name }}</a>
                                        </td>
                                        <td>
                                            <a  href="{{ route('view-fundFlags-on-admin-side', $row->ff_id) }}" class="btn btn-default ">
                                            FF - {{ $row->id }}</a>
                                        </td>
                                        <td>
                                            <a  href="{{ route('view-investorType-on-admin-side', $row->it_id) }}" class="btn btn-default ">
                                            IN TYP - {{ $row->id }}</a>
                                        </td>
                                        <td>
                                            <a  href="{{ route('view-themesAttributes-on-admin-side', $row->ta_id) }}" class="btn btn-default ">
                                            {{ $row->index_replication_method }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('fundAttributes-delete', $row->fa_id) }}"  class="btn btn-danger "><i class="fa fa-remove"></i></a>
                                        </td>
                                    </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>
                                    @if(count($fund_attributes) < 1)
                                        <center><h2>Oops! no record found</h2></center>
                                    @else
                                        {{ $fund_attributes->links() }}
                                    @endif
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