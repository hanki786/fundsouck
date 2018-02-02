@extends('layout.header')
@section('title')
    Compliance Officer - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Compliance</li>
        <li class="breadcrumb-item active">Compliance Officer - New</li>
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
                <form action="{{ route('register-complianceOfficer-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Compliance Officer</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="name">Fund Identity</label>
                                            <select type="text" class="form-control border-input" id="fund_identity_id" name="fund_identity_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_identities as $fund_identity)
                                                    <option value="{{ $fund_identity->id }}">{{ $fund_identity->fund_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label for=	"compliance_officer_name">Compliance Officer Name</label>
                                        <select class="form-control input-sm" name="compliance_officer_name">
                                            <option>Ali</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="telephone">Telephone</label>
                                        <input type="number" class="form-control border-input" name="telephone" placeholder="Enter Telephone Number">
                                    </div>


                                    <div class="form-group">
                                        <label for="fax">Fax</label>
                                        <input type="number" class="form-control border-input" name="fax" placeholder="Enter Fax Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control border-input" name="email" placeholder="Enter Email Address">
                                    </div>

                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control border-input" name="url" placeholder="Enter URL">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control border-input" name="address" placeholder="Enter Address">
                                    </div>

                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control border-input" name="city" placeholder="Enter City">
                                    </div>

                                    <div class="form-group">
                                        <label for="postal_code">Postal Code</label>
                                        <input type="text" class="form-control border-input" name="postal_code" placeholder="Enter Postal Code">
                                    </div>

                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <?php $countries = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                        <select class="form-control input-sm" name="country">
                                            <option value="">Select an option</option>
                                            @foreach($countries as $row)
                                                <option value="{{ $row->country }}">{{ $row->country }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                <button type="reset" class="btn btn-danger btn-fill"><i class="fa fa-ban"></i> Reset</button>
                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                </div>
                </form>
            </div>
        </div>
        <!-- /.conainer-fluid -->
    </main>
@endsection