@extends('layout.header')
@section('title')
    Fund History - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundHistory-on-admin-side') }}">Fund History - List</a></li>
        <li class="breadcrumb-item active">Fund History - Edit</li>
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
            <form action="{{ route('update-fundHistory-on-admin-side',$fund_history->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Fund History</strong>
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

                                            <input type="hidden" name="fund_objective_id" value="{{ $fund_history->id}}">

                                            <input type="hidden" name="user_id" value="{{ $fund_history->user_id}}">

                                        <div class="form-group">
                                            <label for="liquidation_date">Liquidation Date</label>
                                            <input type="date" class="form-control" name="liquidation_date" placeholder="dd/mm/yyyy"
                                            value="{{$fund_history->liquidation_date}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="successor_name">Successor Name</label>
                                            <select class="form-control input-sm" name="successor_name">
                                                <option value="">Select an option</option>
                                                @foreach($fund as $row)
                                                    <option value="{{ $row->id }}" {{ $fund_history->successor_name == $row->fund_name?'selected':'' }}>{{ $row->fund_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                            <div class="form-group">
                                                <label for="successor_code">Successor Code</label>
                                                <input type="text" class="form-control" name="successor_code" placeholder="Successor Code" value="{{$fund_history->successor_code}}">
                                            </div>

                                        <div class="form-group">
                                            <label for="succession_date">Succession Date</label>
                                            <input type="date" class="form-control" name="succession_date" placeholder="dd/mm/yyyy"
                                                   value="{{$fund_history->succession_date}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="extended_history_date">Extended History Date</label>
                                            <input type="date" class="form-control" name="extended_history_date" placeholder="dd/mm/yyyy" value="{{$fund_history->extended_history_date}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="available_history_date">Available History Date</label>
                                            <input type="date" class="form-control" name="available_history_date" placeholder="dd/mm/yyyy" value="{{$fund_history->available_history_date}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="primary_share_class_name">Primary Share Class Name</label>
                                            <input type="text" class="form-control" name="primary_share_class_name" placeholder="Enter Primary Share Class Name" value="{{$fund_history->primary_share_class_name}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="portfolio_name">Portfolio Name</label>
                                            <input type="text" class="form-control" name="portfolio_name" placeholder="Enter Portfolio Name" value="{{$fund_history->portfolio_name}}">
                                        </div>


                                    </div>
                                    <div class="col-md-3"></div>
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