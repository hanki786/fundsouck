@extends('layout.header')
@section('title')
    Fund Identity & Policy - List
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Identity & Policy - List</li>
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
                                <i class="fa fa-align-justify"></i> Fund Identity & Policy Table
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Dated</th>
                                        <th>Fund Souk Code</th>
                                        <th>Fund Name</th>
                                        <th>Short Objective</th>
                                        <th>Detailed Objective</th>
                                        <th>Investment Strategy</th>
                                        <th>Risk Profile</th>
                                        <th>Type of Risk</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fund_identity_policies as $row)
                                    <tr id="remote-fundIdentity-{{ $row->fip_id }}">
                                        <td>{{ $row->fip_id }}</td>
                                        <td>{{ date('F,m Y',strtotime($row->dated)) }}</td>
                                        <td>
                                            <a  href="{{ route('view-fundidentity-on-admin-side', $row->fi_id) }}" class="btn btn-default btn-sm">{{ $row->fund_souk_code }}</a>
                                        </td>
                                        <td>{{ $row->fund_name }}</td>
                                        <td><a  href="{{ route('view-fundObjectiveStrategy-on-admin-side', $row->fos_id) }}" class="btn btn-default btn-sm">{{ $row->short_objective }}</a></td>
                                        <td>{{ $row->detailed_objective }}</td>
                                        <td>{{ $row->investment_strategy }}</td>
                                        <td>{{ $row->risk_profile }}</td>
                                        <td>{{ $row->types_of_risk }}</td>
                                        <td>
                                            <a href="{{ route('fundidentitypolicy-delete', $row->fip_id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                        </td>
                                    </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                    @if(count($fund_identity_policies) < 1)
                                        <center><h2>Oops! no record found</h2></center>
                                    @else
                                        {{ $fund_identity_policies->links() }}
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