@extends('layout.header')
@section('title')
    Annual - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Fees & Expense Details</li>
        <li class="breadcrumb-item active">Charges</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-annual-on-admin-side') }}">Annual - View</a></li>
        <li class="breadcrumb-item active">Annual - View</li>
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
                            <div class="card-header">
                                <strong>Annual</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="actual">Actual</label>
                                            <input type="text" value="{{ $annual->actual}}" disabled
                                                   class="form-control" name="actual" placeholder="Enter Actual ">
                                        </div>


                                        <div class="form-group">
                                            <label for="min">Minimum</label>
                                            <input type="text" value="{{ $annual->min}}" disabled
                                                   class="form-control" name="min" placeholder="Enter Minimum">
                                        </div>

                                        <div class="form-group">
                                            <label for="max">Maximum</label>
                                            <input type="text" value="{{ $annual->max}}" disabled
                                                   class="form-control" name="max" placeholder="Enter Maximum">
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="currency">Currency</label>
                                            <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <select class="form-control input-sm" name="currency" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($currencies as $row)
                                                    <option value="{{ $row->iso_4217 }}"
                                                            {{ $annual->currency==$row->iso_4217?'selected':'' }}>
                                                        {{ $row->iso_4217 }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $types = ['Percentage','Absolute','Per Annum'];
                                        @endphp


                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select class="form-control input-sm" name="type" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($types as $i_key => $row)
                                                    <option {{ $annual->type==$row?'selected':'' }}>{{ $row }}</option>
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