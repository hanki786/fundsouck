@extends('layout.header')
@section('title')
    Compliance Officer - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Compliance</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-complianceOfficer-on-admin-side') }}">Compliance Officer - List</a></li>
        <li class="breadcrumb-item active">Compliance Officer - View</li>
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
    <!-- Main content -->
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="" method="post">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Compliance Officer</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for=	"compliance_officer_name">Compliance Officer Name</label>
                                            <select class="form-control input-sm" name="compliance_officer_name" disabled>
                                                <option {{ $compliance_officer->compliance_officer_name == "Ali"?
                                                'selected':'' }}>Ali</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="telephone">Telephone</label>
                                            <input type="number" class="form-control" name="telephone"
                                                   placeholder="Enter Telephone Number" value="{{ $compliance_officer->telephone}}"
                                                   disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="fax">Fax</label>
                                            <input type="number" class="form-control" name="fax" placeholder="Enter Fax Number"
                                                   value="{{ $compliance_officer->fax}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address"
                                                   value="{{ $compliance_officer->email}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">URL</label>
                                            <input type="text" class="form-control" name="url" placeholder="Enter URL"
                                                   value="{{ $compliance_officer->url}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter Address"
                                                   value="{{ $compliance_officer->address}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="Enter City"
                                                   value="{{ $compliance_officer->city}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control" name="postal_code" placeholder="Enter Postal Code"
                                                   value="{{ $compliance_officer->postal_code}}" disabled>
                                        </div>

                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <?php $countries = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                                <select class="form-control input-sm" name="country" disabled>
                                                    <option value="">Select an option</option>
                                                    @foreach($countries as $row)
                                                        <option value="{{ $row->country }}" {{ $compliance_officer->country == $row->country?
                                                'selected':'' }}>{{ $row->country }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                </div>
            </form>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@endsection