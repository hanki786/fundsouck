@extends('layout.header')
@section('title')
    Redemption - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Fees & Expense Details</li>
        <li class="breadcrumb-item active">Charges</li>
        <li class="breadcrumb-item active">Redemption - New</li>
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
            <form action="{{ route('register-chargesRedemption-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Redemption</strong>
                                <small>Form</small>
                            </div>
                            <div class="card-body">
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
                                                <label for="actual">Actual</label>
                                                <input type="text" value="{{ old('actual') }}" class="form-control" name="actual" placeholder="Enter Actual ">
                                            </div>


                                            <div class="form-group">
                                                <label for="min">Minimum</label>
                                                <input type="text" value="{{ old('min') }}" class="form-control" name="min" placeholder="Enter Minimum">
                                            </div>

                                            <div class="form-group">
                                                <label for="max">Maximum</label>
                                                <input type="text" value="{{ old('max') }}" class="form-control" name="max" placeholder="Enter Maximum">
                                            </div>

                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input type="number" value="{{ old('amount') }}" class="form-control" name="amount" placeholder="Enter Amount">
                                            </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="payment_deadline">Payment Deadline</label>
                                            <input type="date" value="{{ old('payment_deadline') }}" class="form-control" name="payment_deadline"
                                                   placeholder="Enter Payment Deadline">
                                        </div>

                                        <div class="form-group">
                                            <label for="currency">Currency</label>
                                            <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <select class="form-control input-sm" name="currency">
                                                <option value="">Select an option</option>
                                                @foreach($currencies as $row)
                                                    <option value="{{ $row->iso_4217 }}"
                                                            {{ old('currency')==$row->iso_4217?'selected':'' }}>
                                                        {{ $row->iso_4217 }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="early_redemption_fees">Early Redemption Fees</label>
                                            <input type="number" value="{{ old('early_redemption_fees') }}" class="form-control"
                                                   name="early_redemption_fees" placeholder="Enter Early Redemption Fees">
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
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
@endsection