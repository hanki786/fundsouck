@extends('layout.header')
@section('title')
    Fund Sales & Distribution - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundSalesDistribution-on-admin-side') }}">Fund Sales & Distribution - List</a></li>
        <li class="breadcrumb-item active">Fund Sales & Distribution - Edit</li>
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
                <form action="{{ route('update-fundSalesDistribution-on-admin-side',$fund_sales_distribution->id) }}" method="post" >
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Fund Sales & Distribution</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
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

                                        <input type="hidden" name="fund_objective_id" value="{{ $fund_sales_distribution->id}}">

                                        <input type="hidden" name="user_id" value="{{ $fund_sales_distribution->user_id}}">

                                        <div class="form-group">
                                        <label for="countries_of_distribution">Countries Of Distribution</label>
                                        <?php $countries = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                        <?php $regions = \App\Models\DomainValues\Region::all(); ?>
                                        <select class="form-control input-sm" name="countries_of_distribution">
                                            <option value="">Select an option</option>
                                            @foreach($countries as $row)
                                                <option value="{{ $row->country }}" {{ $fund_sales_distribution->countries_of_distribution == $row->country?'selected':'' }}>{{ $row->country }}</option>
                                            @endforeach
                                            @foreach($regions as $row)
                                                <option value="{{ $row->region }}" {{ $fund_sales_distribution->countries_of_distribution == $row->region?'selected':'' }}>{{ $row->region }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="registration_date">Registration Date</label>
                                        <input type="date" class="form-control" name="registration_date" placeholder="dd/mm/yyyy" value="{{ $fund_sales_distribution->registration_date}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="de_registration_date">De-Registration Date</label>
                                        <input type="date" class="form-control" name="de_registration_date" placeholder="dd/mm/yyyy" value="{{ $fund_sales_distribution->de_registration_date}}">
                                    </div>

                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
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