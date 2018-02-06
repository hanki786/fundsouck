@extends('layout.header')
@section('title')
    Fund Holdings &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Top Allocations</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Security Name</th>
                                        <th>% Of Fund Assets</th>
                                        <th>Date</th>
                                        <th width="50%">Chart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($ta))
                                        @foreach($ta as $t)
                                            <tr>
                                                <td><strong>{{ $t->security_name }}</strong>
                                                </td>
                                                <td>{{ $t->percent_of_total_holdings }}
                                                </td>
                                                <td>{{ $t->date }}
                                                </td>
                                                <td>Chart Top 10 Holdings Here
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h3 class="title">Debtor Quality Allocation</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Debtor Rating</th>
                                        <th>% Of Fund Assets</th>
                                        <th>Date</th>
                                        <th width="50%">Chart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($dqa))
                                        @foreach($dqa as $t)
                                            <tr>
                                                <td><strong>{{ $t->debtor_rating }}</strong>
                                                </td>
                                                <td>{{ $t->percent_of_fund_assets }}
                                                </td>
                                                <td>{{ $t->date }}
                                                </td>
                                                <td>Chart Top 10 Holdings Here
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="card">
                            <div class="header">
                                <h3 class="title">Currency Allocation</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Currency</th>
                                        <th>% Of Fund Assets</th>
                                        <th>Date</th>
                                        <th width="50%">Chart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($ca))
                                        @foreach($ca as $t)
                                            <tr>
                                                <td><strong>{{ $t->currency }}</strong>
                                                </td>
                                                <td>{{ $t->percent_of_fund_assets }}
                                                </td>
                                                <td>{{ $t->date }}
                                                </td>
                                                <td>Chart Top 10 Holdings Here
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Asset Class Allocations</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Asset Class Name</th>
                                        <th>% Of Fund Assets</th>
                                        <th>Date</th>
                                        <th width="50%">Chart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($aca))
                                        @foreach($aca as $t)
                                            <tr>
                                                <td><strong>{{ $t->asset_class_name }}</strong>
                                                </td>
                                                <td>{{ $t->percent_of_fund_assets }}
                                                </td>
                                                <td>{{ $t->date }}
                                                </td>
                                                <td>Chart Asset Class Allocations Here
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Maturity Date Allocation</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Security Maturity Date</th>
                                        <th>% Of Fund Assets</th>
                                        <th>Date</th>
                                        <th width="50%">Chart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($mda))
                                        @foreach($mda as $t)
                                            <tr>
                                                <td><strong>{{ $t->security_maturity_date }}</strong>
                                                </td>
                                                <td>{{ $t->percent_of_fund_assets }}
                                                </td>
                                                <td>{{ $t->date }}
                                                </td>
                                                <td>Chart Asset Class Allocations Here
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Country Allocation</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>% Of Fund Assets</th>
                                        <th>Date</th>
                                        <th width="50%">Chart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($ca1))
                                        @foreach($ca1 as $t)
                                            <tr>
                                                <td><strong>{{ $t->country }}</strong>
                                                </td>
                                                <td>{{ $t->percent_of_fund_assets }}
                                                </td>
                                                <td>{{ $t->date }}
                                                </td>
                                                <td>Chart Asset Class Allocations Here
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
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