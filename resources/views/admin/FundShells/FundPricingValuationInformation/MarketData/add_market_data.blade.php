@extends('layout.header')
@section('title')
    Market Data - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Pricing & Valuation Information</li>
        <li class="breadcrumb-item active">	Market Data - New</li>
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
            <form action="{{ route('register-marketData-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Market Data</h4>
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
                                            <label for="open">Open</label>
                                            <input type="text" value="{{ old('open') }}"
                                                   class="form-control border-input" name="open" placeholder="1.2189">
                                        </div>

                                        <div class="form-group">
                                            <label for="high">High</label>
                                            <input type="text" value="{{ old('high') }}"
                                                   class="form-control border-input" name="high" placeholder="1.2189">
                                        </div>

                                        <div class="form-group">
                                            <label for="low">Low</label>
                                            <input type="text" value="{{ old('low') }}"
                                                   class="form-control border-input" name="low" placeholder="1.2189">
                                        </div>

                                        <div class="form-group">
                                            <label for="close">Close</label>
                                            <input type="text" value="{{ old('close') }}"
                                                   class="form-control border-input" name="close" placeholder="100.15">
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="change">Change</label>
                                            <input type="number" value="{{ old('change') }}"
                                                   class="form-control border-input" name="change" placeholder="0%">
                                        </div>

                                        <div class="form-group">
                                            <label for="perc_change">% Change</label>
                                            <input type="number" value="{{ old('perc_change') }}"
                                                   class="form-control border-input" name="perc_change" placeholder="2%">
                                        </div>

                                        <div class="form-group">
                                            <label for="volume_traded">Volume Traded</label>
                                            <input type="number" value="{{ old('volume_traded') }}"
                                                   class="form-control border-input" name="volume_traded" placeholder="1500000">
                                        </div>

                                        <div class="form-group">
                                            <label for="value_traded">Value Traded</label>
                                            <input type="text" value="{{ old('value_traded') }}"
                                                   class="form-control border-input" name="value_traded" placeholder="100000 USD">
                                        </div>

                                        <div class="form-group">
                                            <label for="price_date">Price Date</label>
                                            <input type="date" value="{{ old('price_date') }}"
                                                   class="form-control border-input" name="price_date" >
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