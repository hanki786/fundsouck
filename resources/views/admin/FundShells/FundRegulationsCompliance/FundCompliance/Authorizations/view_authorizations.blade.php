@extends('layout.header')
@section('title')
    Authorizations - View
@endsection
@section('breadcrumb')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Fund Shells</li>
        <li class="breadcrumb-item active">Fund Regulations & Compliance</li>
        <li class="breadcrumb-item active">Fund Compliance</li>
        <li class="breadcrumb-item"><a  href="{{ route('list-authorizations-on-admin-side') }}">Authorizations - List</a></li>
        <li class="breadcrumb-item active">Authorizations - View</li>
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
                                <h4 class="title">Authorization</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="authorization_number">Authorization Number</label>
                                            <input type="text" class="form-control border-input" name="authorization_number"
                                                   placeholder="Enter Authorization Number"
                                                   value="{{ $authorizations->authorization_number}}" disabled>
                                        </div>


                                        <div class="form-group">
                                            <label for="authorization_date">Authorization Date</label>
                                            <input type="date" class="form-control border-input" name="authorization_date"
                                                   placeholder="Enter Authorization Date"
                                                   value="{{ $authorizations->authorization_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="prospectus_visa_number">Prospectus Visa Number</label>
                                            <input type="text" class="form-control border-input" name="prospectus_visa_number"
                                                   placeholder="Enter Prospectus Visa Number"
                                                   value="{{ $authorizations->prospectus_visa_number}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="prospectus_visa_date">Prospectus Visa Date</label>
                                            <input type="date" class="form-control border-input" name="prospectus_visa_date"
                                                   placeholder="Enter Prospectus Visa Date"
                                                   value="{{ $authorizations->prospectus_visa_date}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for=	"regulator">Regulator</label>
                                            <?php $regulators = \App\Models\DomainValues\Regulator::all(); ?>
                                            <select class="form-control input-sm" name="regulator" disabled>
                                                <option value="">Select an option</option>
                                                @foreach($regulators as $row)
                                                    <option value="{{ $row->regulator_full_name }}"
                                                            {{ $authorizations->regulator
                                                            ==$row->regulator_full_name?'selected':'' }}>
                                                        {{ $row->regulator_full_name }}</option>
                                                @endforeach
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

@endsection