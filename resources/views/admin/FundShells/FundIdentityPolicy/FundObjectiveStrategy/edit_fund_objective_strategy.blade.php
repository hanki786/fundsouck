@extends('layout.header')
@section('title')
    Fund Objective & Strategy - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Identity Policy</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundObjectiveStrategy-on-admin-side') }}">Fund Objective & Strategy - List</a></li>
        <li class="breadcrumb-item active">Fund Objective & Strategy - Edit</li>
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
                <form action="{{ route('update-fundObjectiveStrategy-on-admin-side',$fund_objective->id) }}" method="post" >
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Fund Objective & Strategy</h4>
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

                                    <input type="hidden" name="fund_objective_id" value="{{ $fund_objective->id}}">

                                    <input type="hidden" name="user_id" value="{{ $fund_objective->user_id}}">


                                    <div class="form-group">
                                        <label for="short_objective">Short Objective</label>
                                        <input type="text" class="form-control border-input" name="short_objective" placeholder="Enter short objective"
                                               value={{$fund_objective->short_objective}}>
                                    </div>

                                    <div class="form-group">
                                        <label for="detailed_objective">Detailed Objective</label>
                                        <textarea class="form-control border-input" rows="3" name="detailed_objective" placeholder="Write detailed objective">{{$fund_objective->detailed_objective}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="investment_strategy">Investment Strategy</label>
                                        <textarea class="form-control border-input" rows="3" name="investment_strategy" placeholder="Write Investment Strategy...">{{$fund_objective->investment_strategy}}</textarea>
                                    </div>


                                    </div>
                                    <div class="col-md-6">

                                        @php
                                            $rihs = ['1 Month','3 Months','6 Months','1 Year','2 Years','3 Years','4 Years',
                                                    '5 Years','6 Years','7 Years','8 Years','9 Years','10 Years','Short Term','Medium Term','Long Term'];
                                        @endphp

                                        <div class="form-group">
                                            <label for="recommended_investment_horizon">Recommended Investment Horizon</label>
                                            <select class="form-control border-input" name="recommended_investment_horizon">

                                                <option value="">Select an option</option>
                                                @foreach($rihs as $i_key => $rih)
                                                    <option {{ $fund_objective->recommended_investment_horizon ==
                                                $rih?'selected':'' }}>{{ $rih }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        @php
                                            $risks = ['Low','Low to Medium','Medium','Medium to High','High'];
                                        @endphp

                                        <div class="form-group">
                                            <label for="risk_profile">Risk Profile</label>
                                            <select class="form-control border-input" name="risk_profile">
                                                @foreach($risks as $i_key => $risk)
                                                    <option {{ $fund_objective->risk_profile == $risk?'selected':'' }}>{{ $risk }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @php
                                            $risk_types = ['Interest Rate Risk','Business Risk','Credit Risk','Taxability Risk',
                                            'Call Risk','Inflationary Risk','Liquidity Risk','Market Risk','Investment Risk',
                                            'Social/Political/legislative Risk','Currency/Exchange Rate Risk','Systematic Risk',
                                            'Unsystematic Risk','Concentration Risk','Small & Mid Cap Risk',
                                            'Conflict of Interest Risk','Borrowing Risk','Sukuk Risk'];
                                        @endphp

                                        <div class="form-group">
                                            <label for="risk_type">Risk Type</label>
                                            <select class="form-control border-input" name="risk_type">
                                                @foreach($risk_types as $i_key => $risk)
                                                    <option {{ $fund_objective->types_of_risk == $risk?'selected':'' }}>{{ $risk }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-dot-circle-o"></i> Save</button>
                                <button type="reset" class="btn btn-danger btn-fill"><i class="fa fa-ban"></i> Cancel</button>
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