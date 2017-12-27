@extends('layout.header')
@section('title')
    Fund Key Attribute - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundKeyAttributes-on-admin-side') }}">Fund Key Attributes - List</a></li>
        <li class="breadcrumb-item active">Fund Key Attribute - View</li>
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
            <form action="" method="post" >

                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Fund Key Attribute</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-6">


                                            <div class="form-group">
                                                <label for="fund_currency">Fund Currency</label>
                                                <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                                <select class="form-control input-sm" name="fund_currency" disabled>
                                                    @foreach($currencies as $row)
                                                        <option value="{{ $row->iso_4217 }}" {{ $fund_key_attributes->fund_currency == $row->iso_4217?'selected':'' }}>{{ $row->iso_4217 }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        <div class="form-group">
                                            <label for="inception_date">Inception Date</label>
                                            <input type="date" class="form-control" name="inception_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->inception_date}}" disabled>
                                        </div>

                                            <div class="form-group">
                                                <label for="inception_price_type">Inception Price Type</label>
                                                <select class="form-control" name="inception_price_type" disabled>
                                                    <option {{ $fund_key_attributes->inception_price_type == "NAV"?'selected':'' }}>NAV</option>
                                                    <option {{ $fund_key_attributes->inception_price_type == "BID"?'selected':'' }}>BID</option>
                                                    <option {{ $fund_key_attributes->inception_price_type == "OFFER"?'selected':'' }}>OFFER</option>
                                                </select>
                                            </div>

                                        <div class="form-group">
                                            <label for="inception_price">Inception Price</label>
                                            <input type="text" class="form-control" name="inception_price" placeholder="100.15"
                                                   value="{{ $fund_key_attributes->inception_price}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="re_launch_date">Re-Launch Date</label>
                                            <input type="date" class="form-control" name="re_launch_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->re_launch_date}}" disabled>
                                        </div>


                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="re_launch_price">Re-Launch Price</label>
                                            <input type="text" class="form-control" name="re_launch_price" placeholder="100.15"
                                                   value="{{ $fund_key_attributes->re_launch_price}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="maturity_date">Maturity Date</label>
                                            <input type="date" class="form-control" name="maturity_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->maturity_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="fy_start_date">FY Start Date</label>
                                            <input type="date" class="form-control" name="fy_start_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->fy_start_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="fy_end_date">FY End Date</label>
                                            <input type="date" class="form-control" name="fy_end_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->fy_end_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="guarantee">Guarantee (%)</label>
                                            <input type="number" class="form-control" name="guarantee" placeholder="0%"
                                                   value="{{ $fund_key_attributes->guarantee}}" disabled>
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