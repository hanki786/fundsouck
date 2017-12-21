@extends('layout.header')
@section('title')
    Fund Objective & Strategy - {{$fund_objective->short_objective}}
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Identity Policy</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-fundObjectiveStrategy-on-admin-side') }}">Fund Objective & Strategy - List</a></li>
        <li class="breadcrumb-item active">Fund Objective & Strategy - {{$fund_objective->short_objective}}</li>
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
            <form action="" method="post" >
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Fund Objective & Strategy</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">


                                        <div class="form-group">
                                            <label for="short_objective">Short Objective</label>
                                            <input type="text" class="form-control" name="short_objective" placeholder="Enter short objective"
                                                   value="{{$fund_objective->short_objective}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="detailed_objective">Detailed Objective</label>
                                            <textarea class="form-control" rows="3" name="detailed_objective" placeholder="Write detailed objective" disabled>{{$fund_objective->detailed_objective}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="investment_strategy">Investment Strategy</label>
                                            <textarea class="form-control" rows="3" name="investment_strategy" placeholder="Write Investment Strategy..." disabled>{{$fund_objective->investment_strategy}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="recommended_investment_horizon">Recommended Investment Horizon</label>
                                            <select class="form-control" name="recommended_investment_horizon" disabled>
                                                <option {{ $fund_objective->recommended_investment_horizon == "1 Month"?'selected':'' }}>1 Month</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "3 Months"?'selected':'' }}>3 Months</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "6 Months"?'selected':'' }}>6 Months</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "1 Year"?'selected':'' }}>1 Year</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "2 Years"?'selected':'' }}>2 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "3 Years"?'selected':'' }}>3 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "4 Years"?'selected':'' }}>4 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "5 Years"?'selected':'' }}>5 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "6 Years"?'selected':'' }}>6 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "7 Years"?'selected':'' }}>7 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "8 Years"?'selected':'' }}>8 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "9 Years"?'selected':'' }}>9 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "10 Years"?'selected':'' }}>10 Years</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "Short Term"?'selected':'' }}>Short Term</option>
                                                <option {{ $fund_objective->recommended_investment_horizon == "Medium Term"?'selected':'' }}>Medium Term</option>
                                                <option{{ $fund_objective->recommended_investment_horizon == "Long Term"?'selected':'' }}>Long Term</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="risk_profile">Risk Profile</label>
                                            <select class="form-control" name="risk_profile" disabled>
                                                <option {{ $fund_objective->risk_profile == "Low"?'selected':'' }}>Low</option>
                                                <option {{ $fund_objective->risk_profile == "Low to Medium"?'selected':'' }}>Low to Medium</option>
                                                <option {{ $fund_objective->risk_profile == "Medium"?'selected':'' }}>Medium</option>
                                                <option {{ $fund_objective->risk_profile == "Medium to High"?'selected':'' }}>Medium to High</option>
                                                <option {{ $fund_objective->risk_profile == "High"?'selected':'' }}>High</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="risk_type">Risk Type</label>
                                            <select class="form-control" name="risk_type" disabled>
                                                <option {{ $fund_objective->types_of_risk == "Interest Rate Risk"?'selected':'' }}>Interest Rate Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Business Risk"?'selected':'' }}>Business Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Credit Risk"?'selected':'' }}>Credit Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Taxability Risk"?'selected':'' }}>Taxability Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Call Risk"?'selected':'' }}>Call Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Inflationary Risk"?'selected':'' }}>Inflationary Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Liquidity Risk"?'selected':'' }}>Liquidity Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Market Risk"?'selected':'' }}>Market Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Investment Risk"?'selected':'' }}>Investment Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Social/Political/legislative Risk"?'selected':'' }}>Social/Political/legislative Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Currency/Exchange Rate Risk"?'selected':'' }}>Currency/Exchange Rate Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Systematic Risk"?'selected':'' }}>Systematic Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Unsystematic Risk"?'selected':'' }}>Unsystematic Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Concentration Risk"?'selected':'' }}>Concentration Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Small & Mid Cap Risk"?'selected':'' }}>Small & Mid Cap Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Conflict of Interest Risk"?'selected':'' }}>Conflict of Interest Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Borrowing Risk"?'selected':'' }}>Borrowing Risk</option>
                                                <option {{ $fund_objective->types_of_risk == "Sukuk Risk"?'selected':'' }}>Sukuk Risk</option>
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
    </main>
@endsection