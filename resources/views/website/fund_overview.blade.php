@extends('layout.header')
@section('title')
    Fund Overview
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="header text-center">
                            <h3 class="title">Paper Dashboard</h3>
                            <p class="category">Are you looking for more components? Please check our Premium Version of Paper Dashboard Pro.</p>
                            <br>
                        </div>
                        <div class="content table-responsive table-full-width table-upgrade">
                            <table class="table">
                                <thead>
                                <th></th>
                                <th class="text-center">Free</th>
                                <th class="text-center">PRO</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Components</td>
                                    <td>16</td>
                                    <td>160</td>
                                </tr>
                                <tr>
                                    <td>Plugins</td>
                                    <td>4</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Example Pages</td>
                                    <td>4</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Documentation</td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td>SASS Files</td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td>Login/Register/Lock Pages</td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td>Premium Support</td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Free</td>
                                    <td>Just $39</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.creative-tim.com/product/paper-dashboard-pro/?ref=pdfree-upgrade-archive" class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <h4>Fund Overview

       <select class="pull-right" name="fund_identity_id">
                        @foreach($fund_identities as $fund_identity)
                            <option value="{{ $fund_identity->id }}">{{ $fund_identity->fund_name }}</option>
                        @endforeach
                    </select>
            </h4>
            <div class="panel-group col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#1">Fund Identity</a>
                            </h4>
                        </div>
                        <div id="1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 1
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#2">Fund Objective & Strategy</a>
                            </h4>
                        </div>
                        <div id="2" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 2
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#3">Fund Asset Attributes</a>
                            </h4>
                        </div>
                        <div id="3" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 3
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#4">Fund Classification & Benchmarks</a>
                            </h4>
                        </div>
                        <div id="4" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 4
                            </div>
                        </div>
                    </div>

                </div>


                <div class="panel-group col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#5">Latest Price</a>
                            </h4>
                        </div>
                        <div id="5" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 1
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#6">YTD Performance</a>
                            </h4>
                        </div>
                        <div id="6" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 1
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#7">Fund Key Attributes</a>
                            </h4>
                        </div>
                        <div id="7" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 2
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#8">Fund Sales & Distribution</a>
                            </h4>
                        </div>
                        <div id="8" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 3
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#9">Subscription</a>
                            </h4>
                        </div>
                        <div id="9" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 4
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#11">Redemption</a>
                            </h4>
                        </div>
                        <div id="11" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body 4
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@endsection