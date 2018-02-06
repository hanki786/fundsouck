@extends('layout.header')
@section('title')
    Fund Documents &reg;
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            @if($fund_identity_id)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Fund Documents</h3>
                                <p class="category">Following records on based on UNIQUE fund.</p>
                            </div>
                            <?php $previous_year = intval(date('Y')); ?>
                            <div class="content table-responsive table-full-width table-upgrade zoom-out">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Document Type</th>
                                        @for($i = $previous_year-1; $i >= 2010; $i-- )
                                            <th>{{ $i }}</th>
                                        @endfor
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($tc))
                                        <tr>
                                            <td>Terms And Conditions
                                            </td>
                                            @foreach($tc as $t)
                                                    <td> <a  href="{{ $t->file_path }}" class="btn btn-default">Download</a>
                                                    </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>
                                                Annual Report
                                            </td>
                                            @foreach($ar as $t)
                                                    <td> <a  href="{{ $t->file_path }}" class="btn btn-default">Download</a>
                                                    </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>
                                                Semi Annual Report
                                            </td>
                                            @foreach($sar as $t)
                                                <td> <a  href="{{ $t->file_path }}" class="btn btn-default">Download</a>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>
                                                Key Investor Information Document
                                            </td>
                                            @foreach($kid as $t)
                                                <td> <a  href="{{ $t->file_path }}" class="btn btn-default">Download</a>
                                                </td>
                                            @endforeach
                                        </tr>
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