@extends('layout.header')
@section('title')
    Subscription - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Subscription & Redemption</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-subscription-on-admin-side') }}">Subscription - List</a></li>
        <li class="breadcrumb-item active">Subscription - View</li>
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
                                <strong>Subscription</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">


                                        <div class="form-group">
                                            <label for="minimum_initial">Minimum Initial</label>
                                            <input type="number" class="form-control" name="minimum_initial" disabled
                                                   placeholder="Enter Minimum Initial" value="{{ $subscription->minimum_initial}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="additional">Additional</label>
                                            <input type="number" class="form-control" name="additional" placeholder="Enter Additional"
                                                   value="{{ $subscription->additional}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="minimum_balance">Minimum Balance</label>
                                            <input type="number" class="form-control" name="minimum_balance" disabled
                                                   placeholder="Enter Minimum Balance" value="{{ $subscription->minimum_balance}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="currency">Currency</label>
                                            <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <select class="form-control input-sm" name="currency" disabled>
                                                @foreach($currencies as $row)
                                                    <option value="{{ $row->iso_4217 }}"
                                                            {{ $subscription->currency ==
                                                            $row->iso_4217?'selected':'' }}>{{ $row->iso_4217 }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="frequency">Frequency</label>
                                            <select class="form-control input-sm" name="frequency" disabled>
                                                <option {{ $subscription->frequency == "Daily"?'selected':'' }}>Daily</option>
                                                <option {{ $subscription->frequency == "Saturday"?'selected':'' }}>Saturday</option>
                                                <option {{ $subscription->frequency == "Sunday"?'selected':'' }}>Sunday</option>
                                                <option {{ $subscription->frequency == "Monday"?'selected':'' }}>Monday</option>
                                                <option {{ $subscription->frequency == "Tuesday"?'selected':'' }}>Tuesday</option>
                                                <option {{ $subscription->frequency == "Wednesday"?'selected':'' }}>Wednesday</option>
                                                <option {{ $subscription->frequency == "Thursday"?'selected':'' }}>Thursday</option>
                                                <option {{ $subscription->frequency == "Friday"?'selected':'' }}>Friday</option>
                                                <option {{ $subscription->frequency == "Weekly"?'selected':'' }}>Weekly</option>
                                                <option {{ $subscription->frequency == "Monthly"?'selected':'' }}>Monthly</option>
                                                <option {{ $subscription->frequency == "Bi-Weekly"?'selected':'' }}>Bi-Weekly</option>
                                                <option {{ $subscription->frequency == "Bi-Monthly"?'selected':'' }}>Bi-Monthly</option>
                                                <option {{ $subscription->frequency == "Quarterly"?'selected':'' }}>Quarterly</option>
                                                <option {{ $subscription->frequency == "Semi-Annually"?'selected':'' }}>Semi-Annually</option>
                                                <option {{ $subscription->frequency == "Annually"?'selected':'' }}>Annually</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-3"></div>
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