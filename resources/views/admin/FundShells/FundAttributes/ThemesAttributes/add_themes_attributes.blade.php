@extends('layout.header')
@section('title')
    Themes Attributes - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item">Fund Attributes</li>
        <li class="breadcrumb-item active">Themes Attributes - New</li>
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
                <form action="{{ route('register-themesAttributes-on-admin-side') }}" method="post">
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


                                    <div class="form-group">
                                        <label for="fofs_external">FoFs-External</label>
                                        <select class="form-control input-sm" name="fofs_external">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="fofs_internal">FoFs-Internal</label>
                                        <select class="form-control input-sm" name="fofs_internal">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="f_of_etfs">F - of ETFs</label>
                                        <select class="form-control input-sm" name="f_of_etfs">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="f_of_reits">F - of REITs</label>
                                        <select class="form-control input-sm" name="f_of_reits">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="f_of_hfs">F - of HFs</label>
                                        <select class="form-control input-sm" name="f_of_hfs">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="f_of_pefs">F - of PEFs</label>
                                        <select class="form-control input-sm" name="f_of_pefs">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="hedged">Hedged</label>
                                        <select class="form-control input-sm" name="hedged">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="index_tracking">Index Tracking</label>
                                        <select class="form-control input-sm" name="index_tracking">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="index_replication_method">Index Replication Method</label>
                                        <select class="form-control input-sm" name="index_replication_method">
                                            <option>Full replication</option>
                                            <option>Sampling</option>
                                            <option>Synthetic Replication</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="shariah_compliant">Shariah Compliant</label>
                                        <select class="form-control input-sm" name="shariah_compliant">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="leveraged">Leveraged</label>
                                        <select class="form-control input-sm" name="leveraged">
                                            <option>Yes</option>
                                            <option>No</option>
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
    </main>
@endsection