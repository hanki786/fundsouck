@extends('layout.header')
@section('title')
    Subscription - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Subscription & Redemption</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-subscription-on-admin-side') }}">Subscription - List</a></li>
        <li class="breadcrumb-item active">Subscription - Edit</li>
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
            <form action="{{ route('update-subscription-on-admin-side',$subscription->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Subscription</h4>
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

                                            <input type="hidden" name="id" value="{{ $subscription->id}}">

                                            <input type="hidden" name="user_id" value="{{ $subscription->user_id}}">

                                        <div class="form-group">
                                            <label for="minimum_initial">Minimum Initial</label>
                                            <input type="number" class="form-control border-input" name="minimum_initial"
                                                   placeholder="Enter Minimum Initial" value="{{ $subscription->minimum_initial}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="additional">Additional</label>
                                            <input type="number" class="form-control border-input" name="additional" placeholder="Enter Additional"
                                                   value="{{ $subscription->additional}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="minimum_balance">Minimum Balance</label>
                                            <input type="number" class="form-control border-input" name="minimum_balance"
                                                   placeholder="Enter Minimum Balance" value="{{ $subscription->minimum_balance}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="currency">Currency</label>
                                            <?php $currencies = \App\Models\DomainValues\GlobalCurrencies::all(); ?>
                                            <select class="form-control input-sm" name="currency">
                                                @foreach($currencies as $row)
                                                    <option value="{{ $row->iso_4217 }}"
                                                            {{ $subscription->currency ==
                                                            $row->iso_4217?'selected':'' }}>{{ $row->iso_4217 }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="frequency">Frequency</label>
                                            <select class="form-control input-sm" name="frequency">
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