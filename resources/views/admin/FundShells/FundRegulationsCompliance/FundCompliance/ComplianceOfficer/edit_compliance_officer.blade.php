@extends('layout.header')
@section('title')
    Compliance Officer - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Compliance</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-complianceOfficer-on-admin-side') }}">Compliance Officer - List</a></li>
        <li class="breadcrumb-item active">Compliance Officer - Edit</li>
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
            <form action="{{ route('update-complianceOfficer-on-admin-side',$compliance_officer->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Compliance Officer</h4>
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

                                            <input type="hidden" name="id" value="{{ $compliance_officer->id}}">

                                            <input type="hidden" name="user_id" value="{{ $compliance_officer->user_id}}">

                                        <div class="form-group">
                                            <label for=	"compliance_officer_name">Compliance Officer Name</label>
                                            <select class="form-control input-sm" name="compliance_officer_name">
                                                <option {{ $compliance_officer->compliance_officer_name == "Ali"?
                                                'selected':'' }}>Ali</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="telephone">Telephone</label>
                                            <input type="number" class="form-control border-input" name="telephone"
                                                   placeholder="Enter Telephone Number" value="{{ $compliance_officer->telephone}}">
                                        </div>


                                        <div class="form-group">
                                            <label for="fax">Fax</label>
                                            <input type="number" class="form-control border-input" name="fax" placeholder="Enter Fax Number"
                                                   value="{{ $compliance_officer->fax}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control border-input" name="email" placeholder="Enter Email Address"
                                                   value="{{ $compliance_officer->user_id}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">URL</label>
                                            <input type="text" class="form-control border-input" name="url" placeholder="Enter URL"
                                                   value="{{ $compliance_officer->url}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control border-input" name="address" placeholder="Enter Address"
                                                   value="{{ $compliance_officer->address}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control border-input" name="city" placeholder="Enter City"
                                                   value="{{ $compliance_officer->city}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control border-input" name="postal_code" placeholder="Enter Postal Code"
                                                   value="{{ $compliance_officer->postal_code}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <?php $countries = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <select class="form-control input-sm" name="country">
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
@endsection