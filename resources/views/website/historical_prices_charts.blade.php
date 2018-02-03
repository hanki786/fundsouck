@extends('layout.header')
@section('title')
    Historical Prices & Charts &reg;
@endsection
@section('content')
    <style>
        .zoom-out {
            zoom: 0.77;
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Historical Fund Prices ( Market Data )</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Valuation Date</th>
                                        <th>Unit Price</th>
                                        <th>Open</th>
                                        <th>High</th>
                                        <th>Low</th>
                                        <th>Close</th>
                                        <th>Change</th>
                                        <th>% Change</th>
                                        <th>Volume Traded</th>
                                        <th>Value Traded</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="10">
                                            <h4 class="text-center">Display Market Data where available</h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Chart</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content">
                                <h4 class="text-center">To reserve this area to display fund performance chart with
                                    possibility to change periods, add another fund or benchmark for comparison</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Notes</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Note Name</th>
                                        <th>Note Date</th>
                                        <th width="50%">Note Text</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($fn)
                                        <tr>
                                            <td>{{ $fn->note_name }}</td>
                                            <td>{{ $fn->note_date }}</td>
                                            <td>{{ $fn->note_text }}</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="3">
                                                <h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Income Settings</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Ex-Dividend Date</th>
                                        <th>Dividend Amount</th>
                                        <th>Dividend Currency</th>
                                        <th>Payment Date</th>
                                        <th>Reinvest Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($fis)
                                        <tr>
                                            <td>{{ $fis->ex_dividend_date }}</td>
                                            <td>{{ $fis->dividend_amount }}</td>
                                            <td>{{ $fis->dividend_currency }}</td>
                                            <td>{{ $fis->payment_date }}</td>
                                            <td>{{ $fis->reinvest_date }}</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="5">
                                                <h4 class="text-center">Display Market Data where available</h4>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Income Settings</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <td>Income Distribution</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>Income Operation</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>Corporate Action Type</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>Dividend Frequency</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>Default Tax Basis</td>
                                            <td>-</td>

                                        </tr>
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