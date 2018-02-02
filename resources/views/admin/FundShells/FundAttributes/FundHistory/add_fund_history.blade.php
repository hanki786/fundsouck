@extends('layout.header')
@section('title')
    Fund History - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Fund History - New</li>
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
                <form action="{{ route('register-fundHistory-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Fund History</h4>
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

                                    <div class="form-group">
                                        <label for="liquidation_date">Liquidation Date</label>
                                        <input type="date" class="form-control border-input" name="liquidation_date" placeholder="dd/mm/yyyy">
                                    </div>

                                    <div class="form-group">
                                        <label for="successor_name">Successor Name</label>
                                        <select class="form-control input-sm" id="successor_name" name="successor_name">
                                            <option value="">Select an option</option>
                                            @foreach($fund as $row)
                                                <option value="{{ $row->id }}">{{ $row->fund_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                            <div class="form-group">
                                                <label for="successor_code">Successor Code</label>
                                                <input type="text" class="form-control border-input" id="successor_code" name="successor_code" placeholder="Successor Code">
                                            </div>

                                    <div class="form-group">
                                        <label for="succession_date">Succession Date</label>
                                        <input type="date" class="form-control border-input" name="succession_date" placeholder="dd/mm/yyyy">
                                    </div>

                                    <div class="form-group">
                                        <label for="extended_history_date">Extended History Date</label>
                                        <input type="date" class="form-control border-input" name="extended_history_date" placeholder="dd/mm/yyyy">
                                    </div>

                                    <div class="form-group">
                                        <label for="available_history_date">Available History Date</label>
                                        <input type="date" class="form-control border-input" name="available_history_date" placeholder="dd/mm/yyyy">
                                    </div>

                                    <div class="form-group">
                                        <label for="primary_share_class_name">Primary Share Class Name</label>
                                        <input type="text" class="form-control border-input" name="primary_share_class_name" placeholder="Enter Primary Share Class Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="portfolio_name">Portfolio Name</label>
                                        <input type="text" class="form-control border-input" name="portfolio_name" placeholder="Enter Portfolio Name">
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
