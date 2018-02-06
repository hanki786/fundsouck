@extends('layout.header')
@section('title')
    Fund People &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund People</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Fund Manager's Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Qualifications</th>
                                        <th>Resume</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($fm))
                                        @foreach($fm as $t)
                                            <tr>
                                                <td><strong>{{ $t->name }}</strong>
                                                </td>
                                                <td>{{ $t->start_date }}</td>
                                                <td>{{ $t->end_date }}</td>
                                                <td>{{ $t->qualifications }}</td>
                                                <td><a href="{{ $t->resume }}" class="btn btn-link btn-sm">Link</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Fund Board Member's Name</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Qualifications</th>
                                        <th>Resume</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($bm))
                                        @foreach($bm as $t)
                                            <tr>
                                                <td><strong>{{ $t->name }}</strong>
                                                </td>
                                                <td>{{ $t->role }}</td>
                                                <td>{{ $t->status }}</td>
                                                <td>{{ $t->qualifications }}</td>
                                                <td><a href="{{ $t->resume }}" class="btn btn-link btn-sm">Link</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Sharia'a Committee Member's Name</th>
                                        <th>Role</th>
                                        <th>Qualifications</th>
                                        <th>Resume</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($sc))
                                        @foreach($sc as $t)
                                            <tr>
                                                <td><strong>{{ $t->name }}</strong>
                                                </td>
                                                <td>{{ $t->role }}</td>
                                                <td>{{ $t->qualifications }}</td>
                                                <td><a href="{{ $t->resume }}" class="btn btn-link btn-sm">Link</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No record found.</h4>
                                            </td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Sorry! you must choose fund identity to visit this page.</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Main content -->
    <!-- /.container-fluid -->
@endsection