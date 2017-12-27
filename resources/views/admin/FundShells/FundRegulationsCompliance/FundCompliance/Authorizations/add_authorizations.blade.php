@extends('layout.header')
@section('title')
    Authorizations - New
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Compliance</li>
        <li class="breadcrumb-item active">Authorizations - New</li>
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
                <form action="{{ route('register-authorizations-on-admin-side') }}" method="post">
                    {!! csrf_field() !!}
                <div class="row">

                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Add Authorization</strong>
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
                                        <label for="authorization_number">Authorization Number</label>
                                        <input type="text" class="form-control" name="authorization_number" placeholder="Enter Authorization Number">
                                    </div>


                                    <div class="form-group">
                                        <label for="authorization_date">Authorization Date</label>
                                        <input type="date" class="form-control" name="authorization_date" placeholder="Enter Authorization Date ">
                                    </div>

                                    <div class="form-group">
                                        <label for="prospectus_visa_number">Prospectus Visa Number</label>
                                        <input type="text" class="form-control" name="prospectus_visa_number" placeholder="Enter Prospectus Visa Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="prospectus_visa_date">Prospectus Visa Date</label>
                                        <input type="date" class="form-control" name="prospectus_visa_date" placeholder="Enter Prospectus Visa Date">
                                    </div>

                                    <div class="form-group">
                                        <label for=	"regulator">Regulator</label>
                                        <?php $regulators = \App\Models\DomainValues\Regulator::all(); ?>
                                        <select class="form-control input-sm" name="regulator">
                                            <option value="">Select an option</option>
                                            @foreach($regulators as $row)
                                                <option value="{{ $row->regulator_full_name }}"
                                                        {{ old('regulator')==$row->regulator_full_name?'selected':'' }}>
                                                    {{ $row->regulator_full_name }}</option>
                                            @endforeach
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