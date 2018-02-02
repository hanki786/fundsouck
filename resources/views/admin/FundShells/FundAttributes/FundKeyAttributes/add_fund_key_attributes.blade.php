@extends('layout.header')
@section('title')
    Fund Key Attributes - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Fund Key Attributes - New</li>
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
                <form action="{{ route('register-fundKeyAttributes-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Fund Key Attributes</h4>
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

                                    <div class="form-group">
                                        <label for="fund_currency">Fund Currency</label>
                                        <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                        <select class="form-control input-sm" name="fund_currency">
                                            <option value="">Select an option</option>
                                            @foreach($currencies as $row)
                                                <option value="{{ $row->iso_4217 }}"
                                                        {{ old('fund_currency')==$row->iso_4217?'selected':'' }}>
                                                    {{ $row->iso_4217 }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inception_date">Inception Date</label>
                                        <input type="date" value="{{ old('inception_date') }}"
                                               class="form-control border-input" name="inception_date" placeholder="dd/mm/yyyy">
                                    </div>

                                            @php
                                                $price = ['NAV','BID','OFFER'];
                                            @endphp

                                    <div class="form-group">
                                        <label for="inception_price_type">Inception Price Type</label>
                                        <select class="form-control border-input" name="inception_price_type">
                                            <option value="">Select an option</option>
                                            @foreach($price as $i_key => $risk)
                                                <option {{ old('inception_price_type')==$risk?'selected':'' }}>{{ $risk }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inception_price">Inception Price</label>
                                        <input type="text" value="{{ old('inception_price') }}"
                                               class="form-control border-input" name="inception_price" placeholder="100.15">
                                    </div>

                                    <div class="form-group">
                                        <label for="re_launch_date">Re-Launch Date</label>
                                        <input type="date" value="{{ old('re_launch_date') }}"
                                               class="form-control border-input" name="re_launch_date" placeholder="dd/mm/yyyy">
                                    </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="re_launch_price">Re-Launch Price</label>
                                            <input type="text" value="{{ old('re_launch_price') }}"
                                                   class="form-control border-input" name="re_launch_price" placeholder="100.15">
                                        </div>

                                        <div class="form-group">
                                            <label for="maturity_date">Maturity Date</label>
                                            <input type="date" value="{{ old('maturity_date') }}"
                                                   class="form-control border-input" name="maturity_date" placeholder="dd/mm/yyyy">
                                        </div>

                                        <div class="form-group">
                                            <label for="fy_start_date">FY Start Date</label>
                                            <input type="date" value="{{ old('fy_start_date') }}"
                                                   class="form-control border-input" name="fy_start_date" placeholder="dd/mm/yyyy">
                                        </div>

                                        <div class="form-group">
                                            <label for="fy_end_date">FY End Date</label>
                                            <input type="date" value="{{ old('fy_end_date') }}"
                                                   class="form-control border-input" name="fy_end_date" placeholder="dd/mm/yyyy">
                                        </div>

                                        <div class="form-group">
                                            <label for="guarantee">Guarantee (%)</label>
                                            <input type="number" value="{{ old('guarantee') }}"
                                                   class="form-control border-input" name="guarantee" placeholder="0%">
                                        </div>
                                    </div>
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