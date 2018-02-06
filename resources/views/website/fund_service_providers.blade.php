@extends('layout.header')
@section('title')
    Fund Service Providers &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Service Providers</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if(true)
                                        <tr>
                                            <td>Fund Management Company Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Investment Advisor Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Sub-Investment Advisor Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Custodian Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Administrator Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Auditor Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Promoter Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Distributor Name</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>

                                                Legal Advisor Name</td>
                                            <td>-</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Company Details</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <h4 class="text-center">No record found.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Sorry! you must choose fund identity to visit this page.</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Main content -->
    <!-- /.container-fluid -->
@endsection