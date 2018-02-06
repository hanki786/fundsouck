@extends('layout.header')
@section('title')
    Fund Fees & Expenses Details &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Initial (Charges)</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($i)
                                        <tr>
                                            <td>Actual</td>
                                            <td>{{ $i->actual }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Min</td>
                                            <td>{{ $i->min }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Max</td>
                                            <td>{{ $i->max }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Amount</td>
                                            <td>{{ $i->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Currency</td>
                                            <td>{{ $i->currency }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Type</td>
                                            <td>{{ $i->type }}</td>
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
                                <h3 class="title">Redemption (Charges)</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($r)
                                        <tr>
                                            <td>Actual</td>
                                            <td>{{ $r->actual }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Min</td>
                                            <td>{{ $r->min }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Max</td>
                                            <td>{{ $r->max }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Amount</td>
                                            <td>{{ $r->amount }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Payment Deadline</td>
                                            <td>{{ $r->payment_deadline }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Currency</td>
                                            <td>{{ $r->currency }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Early Redemption Fees</td>
                                            <td>{{ $r->early_redemption_fees }}</td>

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
                                <h3 class="title">Annual (Charges)</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($a)
                                        <tr>
                                            <td>Actual</td>
                                            <td>{{ $a->actual }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Min</td>
                                            <td>{{ $a->min }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Max</td>
                                            <td>{{ $a->max }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Fees Description</td>
                                            <td>{{ $a->fees_description }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Currency</td>
                                            <td>{{ $a->currency }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Type</td>
                                            <td>{{ $a->type }}</td>

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
                                <h3 class="title">Annual Report Fees Breakdown (Expenses)</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <tbody>
                                    @if($arfb)
                                        <tr>
                                            <td>Fund Manager Fees</td>
                                            <td>{{ $arfb->fund_manager_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Investment Advisor Fees</td>
                                            <td>{{ $arfb->investment_advisor_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Distribution Fees</td>
                                            <td>{{ $arfb->distribution_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Board Members Fees</td>
                                            <td>{{ $arfb->board_members_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Shariah Comitee Fees</td>
                                            <td>{{ $arfb->shariah_comitee_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Custodian Fees</td>
                                            <td>{{ $arfb->custodian_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Transfer Agent Fees</td>
                                            <td>{{ $arfb->transfer_agent_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Auditor Fees</td>
                                            <td>{{ $arfb->auditor_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>Administrator Fees</td>
                                            <td>{{ $arfb->administrator_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Publication Fees</td>
                                            <td>{{ $arfb->publication_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Regulator Fees</td>
                                            <td>{{ $arfb->regulator_fees }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Dealing Cost Ratio</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Total Expense Ratio</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Performance Fees</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                High Water Mark</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Last Update Date</td>
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