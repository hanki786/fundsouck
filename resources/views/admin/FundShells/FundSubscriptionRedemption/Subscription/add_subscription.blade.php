@extends('layout.header')
@section('title')
    Subscription - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Subscription & Redemption</li>
        <li class="breadcrumb-item active">Subscription - New</li>
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
                <form action="{{ route('register-subscription-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Subscription</h4>
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
                                        <label for="minimum_initial">Minimum Initial</label>
                                        <input type="number" class="form-control border-input" name="minimum_initial" placeholder="Enter Minimum Initial">
                                    </div>

                                    <div class="form-group">
                                        <label for="additional">Additional</label>
                                        <input type="number" class="form-control border-input" name="additional" placeholder="Enter Additional">
                                    </div>

                                    <div class="form-group">
                                        <label for="minimum_balance">Minimum Balance</label>
                                        <input type="number" class="form-control border-input" name="minimum_balance" placeholder="Enter Minimum Balance">
                                    </div>

                                    <div class="form-group">
                                        <label for="currency">Currency</label>
                                        <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                        <select class="form-control input-sm" name="currency">
                                            <option value="">Select an option</option>
                                            @foreach($currencies as $row)
                                                <option value="{{ $row->iso_4217 }}">{{ $row->iso_4217 }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="frequency">Frequency</label>
                                        <select class="form-control input-sm" name="frequency">
                                            <option>Daily</option>
                                            <option>Saturday</option>
                                            <option>Sunday</option>
                                            <option>Monday</option>
                                            <option>Tuesday</option>
                                            <option>Wednesday</option>
                                            <option>Thursday</option>
                                            <option>Friday</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                            <option>Bi-Weekly</option>
                                            <option>Bi-Monthly</option>
                                            <option>Quarterly</option>
                                            <option>Semi-Annually</option>
                                            <option>Annually</option>
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