@extends('layout.header')
@section('title')
    Themes Attributes - Edit
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-themesAttributes-on-admin-side') }}">Themes Attributes - List</a></li>
        <li class="breadcrumb-item active">Themes Attributes - Edit</li>
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
            <form action="{{ route('update-themesAttributes-on-admin-side',$theme_attributes->id) }}" method="post">
                {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Themes Attribute</strong>
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

                                            <input type="hidden" name="fund_objective_id" value="{{ $theme_attributes->id}}">

                                            <input type="hidden" name="user_id" value="{{ $theme_attributes->user_id}}">


                                        <div class="form-group">
                                            <label for="fofs_external">FoFs-External</label>
                                            <select class="form-control input-sm" name="fofs_external">
                                                <option {{ $theme_attributes->fofs_external == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->fofs_external == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="fofs_internal">FoFs-Internal</label>
                                            <select class="form-control input-sm" name="fofs_internal">
                                                <option {{ $theme_attributes->fofs_internal == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->fofs_internal == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="f_of_etfs">F - of ETFs</label>
                                            <select class="form-control input-sm" name="f_of_etfs">
                                                <option {{ $theme_attributes->f_of_etfs == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->f_of_etfs == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="f_of_reits">F - of REITs</label>
                                            <select class="form-control input-sm" name="f_of_reits">
                                                <option {{ $theme_attributes->f_of_reits == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->f_of_reits == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="f_of_hfs">F - of HFs</label>
                                            <select class="form-control input-sm" name="f_of_hfs">
                                                <option {{ $theme_attributes->f_of_hfs == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->f_of_hfs == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="f_of_pefs">F - of PEFs</label>
                                            <select class="form-control input-sm" name="f_of_pefs">
                                                <option {{ $theme_attributes->f_of_pefs == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->f_of_pefs == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="hedged">Hedged</label>
                                            <select class="form-control input-sm" name="hedged">
                                                <option {{ $theme_attributes->hedged == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->hedged == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="index_tracking">Index Tracking</label>
                                            <select class="form-control input-sm" name="index_tracking">
                                                <option {{ $theme_attributes->index_tracking == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->index_tracking == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="index_replication_method">Index Replication Method</label>
                                            <select class="form-control input-sm" name="index_replication_method">
                                                <option {{ $theme_attributes->index_replication_method == "Full replication"?'selected':'' }}>Full replication</option>
                                                <option {{ $theme_attributes->index_replication_method == "Sampling"?'selected':'' }}>Sampling</option>
                                                <option {{ $theme_attributes->index_replication_method == "Synthetic Replication"?'selected':'' }}>Synthetic Replication</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="shariah_compliant">Shariah Compliant</label>
                                            <select class="form-control input-sm" name="shariah_compliant">
                                                <option {{ $theme_attributes->shariah_compliant == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->shariah_compliant == "No"?'selected':'' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="leveraged">Leveraged</label>
                                            <select class="form-control input-sm" name="leveraged">
                                                <option {{ $theme_attributes->leveraged == "Yes"?'selected':'' }}>Yes</option>
                                                <option {{ $theme_attributes->leveraged == "No"?'selected':'' }}>No</option>
                                            </select>
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