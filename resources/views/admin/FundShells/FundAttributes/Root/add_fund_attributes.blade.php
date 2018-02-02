@extends('layout.header')
@section('title')
    Fund Attributes - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes - New</li>
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
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('register-fundAttributes-on-admin-side') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Fund Attributes</h4>
                                <p class="category">Please fill all the information</p>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                    @if($errors->any())
                                            <div class="alert alert-info alert-dismissible " role="alert">
                                                <button class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                                </button>
                                                {{$errors->first()}}.
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                    
                                    <div class="form-group">
                                            <label for="name">Fund Key Attributes</label>
                                            <select type="text" class="form-control border-input" id="fund_key_attribute_id" name="fund_key_attribute_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_key_attributes as $row)
                                                    <option value="{{ $row->id }}">FKA - {{ $row->id }} - {{ $row->fund_currency }} - {{ $row->inception_price_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Fund Asset Attributes</label>
                                            <select type="text" class="form-control border-input" id="fund_asset_attribute_id" name="fund_asset_attribute_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_asset_attributes as $row)
                                                    <option value="{{ $row->id }}">{{ $row->asset_class }} - {{ $row->asset_universe }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Fund Sales Distribution</label>
                                            <select type="text" class="form-control border-input" id="fund_sales_distribution_id" name="fund_sales_distribution_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_sales_distributions as $row)
                                                    <option value="{{ $row->id }}">FSD - {{ $row->id }} - {{ $row->countries_of_distribution }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Fund History</label>
                                            <select type="text" class="form-control border-input" id="fund_history_id" name="fund_history_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_histories as $row)
                                                    <option value="{{ $row->id }}">{{ $row->primary_share_class_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    
                                        
                                        <div class="form-group">
                                            <label for="name">Related Fund</label>
                                            <select type="text" class="form-control border-input" id="related_fund_id" name="related_fund_id">
                                                <option value="">Select an option</option>
                                                @foreach($related_funds as $row)
                                                    <option value="{{ $row->id }}">{{ $row->vehicle_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Fund Flag</label>
                                            <select type="text" class="form-control border-input" id="fund_flag_id" name="fund_flag_id">
                                                <option value="">Select an option</option>
                                                @foreach($fund_flags as $row)
                                                    <option value="{{ $row->id }}">FF - {{ $row->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Investory Type</label>
                                            <select type="text" class="form-control border-input" id="investor_type_id" name="investor_type_id">
                                                <option value="">Select an option</option>
                                                @foreach($investor_types as $row)
                                                    <option value="{{ $row->id }}">IN TYP - {{ $row->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Themes Attributes</label>
                                            <select type="text" class="form-control border-input" id="themes_attribute_id" name="themes_attribute_id">
                                                <option value="">Select an option</option>
                                                @foreach($themes_attributes as $row)
                                                    <option value="{{ $row->id }}">{{ $row->index_replication_method }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-info btn-fill"><i class="fa fa-save"></i>
                                    Save
                                </button>
                                <button type="reset" class="btn btn-danger btn-fill"><i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                </div>
            </form>
        </div>

    </div>
@endsection