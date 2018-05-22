@extends('layout.header')
@section('title')
    Historical Prices & Charts &reg;
@endsection
@section('content')
    <style>
        .zoom-out {
            zoom: 0.57;
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
                                <h4 class="text-center" style="display:none">To reserve this area to display fund performance chart with
                                    possibility to change periods, add another fund or benchmark for comparison</h4>
                                <div id="chartActivity1" class="ct-chart"></div>
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

    <script type="text/javascript" src="{{ asset('website/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/chartist.min.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ asset('website/js/paper-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/demo.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var fund_net_assets = '{{ $fund_net_assets }}';
            console.log(fund_net_assets)
            var data = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    [542, 543, 520, 680, 653, 753, 326, 434, 568, 610, 756, 895],
                    [230, 293, 380, 480, 503, 553, 600, 664, 698, 710, 736, 795]
                ]
            };

            var options = {
                seriesBarDistance: 10,
                axisX: {
                    showGrid: true
                },
                height: "245px"
            };

            var responsiveOptions = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
            ];

            Chartist.Line('#chartActivity1', data, options, responsiveOptions);
        });
</script>
@endsection