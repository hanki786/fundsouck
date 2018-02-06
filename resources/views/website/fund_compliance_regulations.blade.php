@extends('layout.header')
@section('title')
    Fund Compliance &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Compliance Officer</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($co)
                                        <tr>
                                            <td>Compliance Officer Name</td>
                                            <td>{{ $co->compliance_officer_name }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Telephone</td>
                                            <td>{{ $co->telephone }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Fax</td>
                                            <td>{{ $co->fax }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Email</td>
                                            <td>{{ $co->email }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                URL</td>
                                            <td>{{ $co->url }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Address</td>
                                            <td>{{ $co->address }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                City</td>
                                            <td>{{ $co->city }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Poste Code</td>
                                            <td>{{ $co->postal_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Country		</td>
                                            <td>{{ $co->country }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Authorizations</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($a)
                                        <tr>
                                            <td>Authorization Number</td>
                                            <td>{{ $a->authorization_number }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Authorization Date</td>
                                            <td>{{ $a->authorization_date }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Prospectus Visa Number</td>
                                            <td>{{ $a->prospectus_visa_number }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Prospectus Visa Date</td>
                                            <td>{{ $a->prospectus_visa_date }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Regulator		</td>
                                            <td>{{ $a->regulator }}</td>

                                        </tr>
                                    @else
                                        <h4 class="text-center">No record found</h4>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Laws and Regulations</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">

                                    <tbody>
                                    @if($lr)
                                        <tr>
                                            <td>UCITS Directive</td>
                                            <td>{{ $lr->cuits_directive }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                AIFMD Directive</td>
                                            <td>{{ $lr->aifmd_directive }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                AIFMD Status</td>
                                            <td>{{ $lr->aifmd_status }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                FATCA Compliant</td>
                                            <td>{{ $lr->fatca_compliant }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                GIIN Number</td>
                                            <td>{{ $lr->giin_number }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                LEI Code</td>
                                            <td>{{ $lr->lei_code }}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Last Update Date		</td>
                                            <td>{{ $lr->last_update_date }}</td>

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