@extends('layout.header')
@section('title')
    Fund Key Attributes - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundKeyAttributes-on-admin-side') }}">Fund Key Attributes - List</a></li>
        <li class="breadcrumb-item active">Fund Key Attributes - Edit</li>
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
                <form action="{{ route('update-fundKeyAttributes-on-admin-side',$fund_key_attributes->id) }}" method="post" >
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Fund Key Attributes</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif

                                        <input type="hidden" name="fund_objective_id" value="{{ $fund_key_attributes->id}}">

                                        <input type="hidden" name="user_id" value="{{ $fund_key_attributes->user_id}}">


                                    <div class="form-group">
                                        <label for="fund_currency">Fund Currency</label>
                                        <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                        <select class="form-control input-sm" name="fund_currency">
                                            @foreach($currencies as $row)
                                                <option value="{{ $row->iso_4217 }}" {{ $fund_key_attributes->fund_currency == $row->iso_4217?'selected':'' }}>{{ $row->iso_4217 }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inception_date">Inception Date</label>
                                        <input type="date" class="form-control border-input" name="inception_date" placeholder="dd/mm/yyyy"
                                               value="{{ $fund_key_attributes->inception_date}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="inception_price_type">Inception Price Type</label>
                                        <select class="form-control border-input" name="inception_price_type">
                                            <option {{ $fund_key_attributes->inception_price_type == "NAV"?'selected':'' }}>NAV</option>
                                            <option {{ $fund_key_attributes->inception_price_type == "BID"?'selected':'' }}>BID</option>
                                            <option {{ $fund_key_attributes->inception_price_type == "OFFER"?'selected':'' }}>OFFER</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inception_price">Inception Price</label>
                                        <input type="text" class="form-control border-input" name="inception_price" placeholder="100.15"
                                               value="{{ $fund_key_attributes->inception_price}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="re_launch_date">Re-Launch Date</label>
                                        <input type="date" class="form-control border-input" name="re_launch_date" placeholder="dd/mm/yyyy"
                                               value="{{ $fund_key_attributes->re_launch_date}}">
                                    </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="re_launch_price">Re-Launch Price</label>
                                            <input type="text" class="form-control border-input" name="re_launch_price" placeholder="100.15"
                                                   value="{{ $fund_key_attributes->re_launch_price}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="maturity_date">Maturity Date</label>
                                            <input type="date" class="form-control border-input" name="maturity_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->maturity_date}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="fy_start_date">FY Start Date</label>
                                            <input type="date" class="form-control border-input" name="fy_start_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->fy_start_date}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="fy_end_date">FY End Date</label>
                                            <input type="date" class="form-control border-input" name="fy_end_date" placeholder="dd/mm/yyyy"
                                                   value="{{ $fund_key_attributes->fy_end_date}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="guarantee">Guarantee (%)</label>
                                            <input type="number" class="form-control border-input" name="guarantee" placeholder="0%"
                                                   value="{{ $fund_key_attributes->guarantee}}">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-dot-circle-o"></i> Save</button>
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