@extends('layout.header')
@section('title')
    Fund Sales & Distribution - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Fund Sales & Distribution - New</li>
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
                <form action="{{ route('register-fundSalesDistribution-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Fund Sales & Distribution</h4>
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
                                        <label for="countries_of_distribution">Countries Of Distribution</label>
                                        <?php $countries = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                        <?php $regions = \App\Models\DomainValues\Region::all(); ?>
                                        <select class="form-control input-sm" name="countries_of_distribution">
                                            <option value="">Select an option</option>
                                            @foreach($countries as $row)
                                                <option value="{{ $row->country }}">{{ $row->country }}</option>
                                            @endforeach
                                            @foreach($regions as $row)
                                                <option value="{{ $row->region }}">{{ $row->region }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="registration_date">Registration Date</label>
                                        <input type="date" class="form-control border-input" name="registration_date" placeholder="dd/mm/yyyy">
                                    </div>

                                    <div class="form-group">
                                        <label for="de_registration_date">De-Registration Date</label>
                                        <input type="date" class="form-control border-input" name="de_registration_date" placeholder="dd/mm/yyyy">
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