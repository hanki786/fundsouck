@extends('layout.header')
@section('title')
    Profile - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Company Shells</li>
        <li class="breadcrumb-item active">Company Information</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-profile-on-admin-side') }}">Profile - List</a></li>
        <li class="breadcrumb-item active">Profile - View</li>
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
                            <div class="header">
                                <h4 class="title">Profile</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="legal_name">Legal Name</label>
                                            <input  disabled type="text" value="{{ $profile->legal_name }}" class="form-control border-input" name="legal_name" placeholder="Enter Legal Name ">
                                        </div>


                                        <div class="form-group">
                                            <label for="common_name">Common Name</label>
                                            <input  disabled type="text" value="{{ $profile->common_name }}" class="form-control border-input" name="common_name" placeholder="Enter Common Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="commercial_registration_number">Commercial Registration Number</label>
                                            <input  disabled type="text" value="{{ $profile->commercial_registration_number }}" class="form-control border-input" name="commercial_registration_number" placeholder="Enter 	Commercial Registration Number">
                                        </div>

                                        @php
                                            $roles = ['Fund Management Company','Investment Advisor','Sub-Investment Advisor','Custodian',
                                            'Administrator','Auditor','Promoter','Distributor','Legal Advisor',];
                                        @endphp

                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select  disabled class="form-control input-sm" name="role">
                                                <option value="">Select an option</option>
                                                @foreach($roles as $i_key => $rih)
                                                    <option {{ $profile->role==$rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="chairman">Chairman</label>
                                            <input  disabled type="text" value="{{ $profile->chairman }}" class="form-control border-input" name="chairman" placeholder="Enter Chairman Name ">
                                        </div>


                                        <div class="form-group">
                                            <label for="ceo">CEO</label>
                                            <input  disabled type="text" value="{{ $profile->ceo }}" class="form-control border-input" name="ceo" placeholder="Enter CEO Name">
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="register_number">Register Number</label>
                                            <input  disabled type="text" value="{{ $profile->register_number }}" class="form-control border-input" name="register_number" placeholder="Enter 	Register Number">
                                        </div>


                                        <div class="form-group">
                                            <label for="regulator_authorization_number">Regulator Authorization Number</label>
                                            <input  disabled type="text" value="{{ $profile->regulator_authorization_number}}" class="form-control border-input" name="regulator_authorization_number" placeholder="Enter Regulator Authorization Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="authorization_date">Authorization Date</label>
                                            <input  disabled type="date" value="{{ $profile->authorization_date }}" class="form-control border-input" name="authorization_date">
                                        </div>

                                        <div class="form-group">
                                            <label for="share_capital">Share Capital</label>
                                            <input  disabled type="text" value="{{$profile->share_capital }}" class="form-control border-input" name="share_capital" placeholder="Enter Share Capital">
                                        </div>

                                        <div class="form-group">
                                            <label for="share_capital_currency">Share Capital Currency</label>
                                            <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <select disabled class="form-control input-sm" name="share_capital_currency">
                                                <option value="">Select an option</option>
                                                @foreach($currencies as $row)
                                                    <option value="{{ $row->iso_4217 }}"
                                                            {{ $profile->share_capital_currency==$row->iso_4217?'selected':'' }}>
                                                        {{ $row->iso_4217 }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
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