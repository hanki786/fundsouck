@extends('layout.header')
@section('title')
    Fund History - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundHistory-on-admin-side') }}">Fund History - List</a></li>
        <li class="breadcrumb-item active">Fund History - View</li>
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
                            <div class="header">
                                <h4 class="title">Fund History</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="liquidation_date">Liquidation Date</label>
                                            <input type="date" class="form-control border-input" name="liquidation_date" placeholder="dd/mm/yyyy"
                                                   value="{{$fund_history->liquidation_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="successor_name">Successor Name</label>
                                            <select class="form-control input-sm" name="successor_name" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($fund as $row)
                                                    <option value="{{ $row->id }}" {{ $fund_history->successor_name == $row->fund_name?'selected':'' }}>{{ $row->fund_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                            <div class="form-group">
                                                <label for="successor_code">Successor Code</label>
                                                    <input  class="form-control border-input" name="successor_code"
                                                           value="{{$fund_history->successor_code}}" disabled>

                                            </div>

                                        <div class="form-group">
                                            <label for="succession_date">Succession Date</label>
                                            <input type="date" class="form-control border-input" name="succession_date" placeholder="dd/mm/yyyy"
                                                   value="{{$fund_history->succession_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="extended_history_date">Extended History Date</label>
                                            <input type="date" class="form-control border-input" name="extended_history_date" placeholder="dd/mm/yyyy" value="{{$fund_history->extended_history_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="available_history_date">Available History Date</label>
                                            <input type="date" class="form-control border-input" name="available_history_date" placeholder="dd/mm/yyyy" value="{{$fund_history->available_history_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="primary_share_class_name">Primary Share Class Name</label>
                                            <input type="text" class="form-control border-input" name="primary_share_class_name" placeholder="Enter Primary Share Class Name" value="{{$fund_history->primary_share_class_name}}" disabled>
                                        </div>

                                            <div class="form-group">
                                                <label for="primary_share_class_code">Primary Share Class Code</label>
                                                <input type="text" class="form-control border-input" name="primary_share_class_code" placeholder="Enter Primary Share Class Code" value="{{$fund_history->primary_share_class_code}}" disabled>
                                            </div>

                                        <div class="form-group">
                                            <label for="portfolio_name">Portfolio Name</label>
                                            <input type="text" class="form-control border-input" name="portfolio_name" placeholder="Enter Portfolio Name" value="{{$fund_history->portfolio_name}}" disabled>
                                        </div>


                                            <div class="form-group">
                                                <label for="portfolio_code">Portfolio Code</label>
                                                <input type="text" class="form-control border-input" name="portfolio_code" placeholder="Enter Portfolio Code" value="{{$fund_history->portfolio_code}}" disabled>
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









