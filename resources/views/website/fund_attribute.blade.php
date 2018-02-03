@extends('layout.header')
@section('title')
    Fund Attributes &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund History</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($fh)
                                        <tr>
                                            <td>Liquidation Date </td>
                                            <td>{{ $fh->liquidation_date }}</td>

                                        </tr>
                                        <tr>
                                            <td>Successor</td>
                                            <td>{{ $fh->successor}}</td>

                                        </tr>
                                        <tr>
                                            <td>Successor Code</td>
                                            <td>{{ $fh->successor_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Succession Date</td>
                                            <td>{{ $fh->succession_date }}</td>

                                        </tr>
                                        <tr>
                                            <td>Extended History Date</td>
                                            <td>{{ $fh->extended_history_date }}</td>

                                        </tr>
                                        <tr>
                                            <td>Available History Date</td>
                                            <td>{{ $fh->available_history_date }}</td>

                                        </tr>
                                        <tr>
                                            <td>Primary Share Class Name</td>
                                            <td>{{ $fh->primary_share_class_name }}</td>

                                        </tr>
                                        <tr>
                                            <td>Primary Share Class Code</td>
                                            <td>{{ $fh->primary_share_class_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Portfolio Name</td>
                                            <td>{{ $fh->portfolio_name }}</td>

                                        </tr>
                                        <tr>
                                            <td>Portfolio Code</td>
                                            <td>{{ $fh->portfolio_code }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Related Funds</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($rf)
                                        <tr>
                                            <td>Vehicle Name</td>
                                            <td>{{ $rf->vehicle_name }}</td>

                                        </tr>
                                        <tr>
                                            <td>Vehicle Code</td>
                                            <td>{{ $rf->vehicle_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Umbrella Name</td>
                                            <td>{{ $rf->umbrella_name }}</td>

                                        </tr>
                                        <tr>
                                            <td>Umbrella Code</td>
                                            <td> {{ $rf->umbrella_code }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Themes Attributes</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($ta)
                                        <tr>
                                            <td>FoFs -External</td>
                                            <td>{{ $ta->fofs_external }}</td>

                                        </tr>
                                        <tr>
                                            <td>FoFs -Internal</td>
                                            <td>{{ $ta->fofs_internal }}</td>

                                        </tr>
                                        <tr>
                                            <td>F - of ETFs</td>
                                            <td>{{ $ta->f_of_etfs }}</td>

                                        </tr>
                                        <tr>
                                            <td>F - of REITs</td>
                                            <td>{{ $ta->f_of_reits }}</td>

                                        </tr>
                                        <tr>
                                            <td>F - of HFs</td>
                                            <td>{{ $ta->f_of_hfs }}</td>

                                        </tr>
                                        <tr>
                                            <td>F - of PEFs</td>
                                            <td>{{ $ta->f_of_pefs }}</td>

                                        </tr>
                                        <tr>
                                            <td>Hedged</td>
                                            <td>{{ $ta->hedged }}</td>

                                        </tr>
                                        <tr>
                                            <td>Index Tracking</td>
                                            <td>{{ $ta->index_tracking }}</td>

                                        </tr>
                                        <tr>
                                            <td>Index Replication Method</td>
                                            <td>{{ $ta->index_replication_method }}</td>

                                        </tr>
                                        <tr>
                                            <td>Shariah Compliant</td>
                                            <td>{{ $ta->shariah_compliant }}</td>

                                        </tr>
                                        <tr>
                                            <td>Leveraged</td>
                                            <td>{{ $ta->leveraged }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Investor Type</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($it)
                                        <tr>
                                            <td>Institutional </td>
                                            <td>{{ $it->institutional }}</td>

                                        </tr>
                                        <tr>
                                            <td>Retail</td>
                                            <td>{{ $it->retail }}</td>

                                        </tr>
                                        <tr>
                                            <td>HNW </td>
                                            <td>{{ $it->hnw }}</td>

                                        </tr>
                                        <tr>
                                            <td>UHNW</td>
                                            <td>{{ $it->uhnw }}</td>

                                        </tr>
                                        <tr>
                                            <td>Qualified</td>
                                            <td>{{ $it->qualified }}</td>

                                        </tr>
                                        <tr>
                                            <td>Private</td>
                                            <td>{{ $it->private }}</td>

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
                                <h3 class="title">Fund Flags</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($ff)
                                        <tr>
                                            <td>Closed Fund</td>
                                            <td>{{ $ff->closed_fund }}</td>

                                        </tr>
                                        <tr>
                                            <td>Closed End Fund</td>
                                            <td>{{ $ff->closed_end_fund }}</td>

                                        </tr>
                                        <tr>
                                            <td>Exchange Listed</td>
                                            <td>{{ $ff->exchange_listed }}</td>

                                        </tr>
                                        <tr>
                                            <td>Primary Share Class</td>
                                            <td>{{ $ff->primary_share_class }}</td>

                                        </tr>
                                        <tr>
                                            <td>Vehicle</td>
                                            <td>{{ $ff->vehicle }}</td>

                                        </tr>
                                        <tr>
                                            <td>Umbrella</td>
                                            <td>{{ $ff->umbrella }}</td>

                                        </tr>
                                        <tr>
                                            <td>Exchange Traded Fund</td>
                                            <td>{{ $ff->exchange_traded_fund }}</td>

                                        </tr>
                                        <tr>
                                            <td>Government Bond</td>
                                            <td>{{ $ff->government_bond }}</td>

                                        </tr>
                                        <tr>
                                            <td>Corporate Bond</td>
                                            <td>{{ $ff->corporate_bond }}</td>

                                        </tr>
                                        <tr>
                                            <td>Asset Backed Securities</td>
                                            <td>{{ $ff->asset_backed_securities }}</td>

                                        </tr>
                                        <tr>
                                            <td>Futures And Options</td>
                                            <td>{{ $ff->futures_and_options }}</td>

                                        </tr>
                                        <tr>
                                            <td>Infrastructure Fund</td>
                                            <td>{{ $ff->infrastructure_fund }}</td>

                                        </tr>
                                        <tr>
                                            <td>Hedge Fund - Non Reporting</td>
                                            <td>{{ $ff->hedge_fund_non_reporting }}</td>

                                        </tr>
                                        <tr>
                                            <td>Insurance Funds</td>
                                            <td>{{ $ff->insurance_funds }}</td>

                                        </tr>
                                        <tr>
                                            <td>Short</td>
                                            <td>{{ $ff->short }}</td>

                                        </tr>
                                        <tr>
                                            <td>Linked Fund</td>
                                            <td>{{ $ff->linked_fund }}</td>

                                        </tr>
                                        <tr>
                                            <td>Pre-IPO</td>
                                            <td>{{ $ff->pre_ipo }}</td>

                                        </tr>
                                        <tr>
                                            <td>Private Fund</td>
                                            <td>{{ $ff->private_fund }}</td>

                                        </tr>
                                        <tr>
                                            <td>Provident Fund</td>
                                            <td>{{ $ff->provident_fund }}</td>

                                        </tr>
                                        <tr>
                                            <td>REIT</td>
                                            <td>{{ $ff->reit }}</td>

                                        </tr>
                                        <tr>
                                            <td>ELTIF</td>
                                            <td>{{ $ff->eltif }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Codes</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($fc)
                                        <tr>
                                            <td>ISIN Code</td>
                                            <td>{{ $fc->isin_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>ISIN Currency Class Code</td>
                                            <td>{{ $fc->isin_currency_class_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Tadawul Fund Code</td>
                                            <td>{{ $fc->tadawul_fund_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Maroclear Code</td>
                                            <td>{{ $fc->maroclear_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Stock Exchange Ticker</td>
                                            <td>{{ $fc->stock_exchange_ticker }}</td>

                                        </tr>
                                        <tr>
                                            <td>ETF Ticker</td>
                                            <td>{{ $fc->etf_ticker }}</td>

                                        </tr>
                                        <tr>
                                            <td>Turkish Fund Code</td>
                                            <td>{{ $fc->turkish_fund_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>CUSIP</td>
                                            <td>{{ $fc->cusip }}</td>

                                        </tr>
                                        <tr>
                                            <td>Polish RFI Code</td>
                                            <td>{{ $fc->polish_rfi_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Johannesburg SE Code</td>
                                            <td>{{ $fc->johannesburg_se_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>SEDOL Code</td>
                                            <td>{{ $fc->sedol_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Valoren Code</td>
                                            <td>{{ $fc->valoren_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>WKNGerman Code</td>
                                            <td>{{ $fc->wkngerman_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>Indonesian SEC Code</td>
                                            <td>{{ $fc->indonesian_sec_code }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
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