<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- START: PAGE LEVEL HEADER LINKS -->
@include('layout.header_script')
<!-- END: PAGE LEVEL HEADER LINKS -->

    <!-- START: PAGE LEVEL STYLE SHEET -->
@yield('page_style')
<!-- END: PAGE LEVEL STYLE SHEET -->
</head>
<body>
<div class="wrapper">
    @include('layout.nav')
    <!-- Main content -->
        <div class="main-panel">
            <!-- START: PAGE CONTAINER -->

        @include('layout.sub_nav')
        @yield('content')
        <!-- END: PAGE CONTAINER -->
            <!-- /.conainer-fluid -->
        </div>
    <!-- START: PAGE LEVEL SCRIPTS -->
@yield('page_scripts')
<!-- END: PAGE LEVEL SCRIPTS -->


@include('layout.footer')
<!-- START: PAGE FOOTER SCRIPTS -->
@include('layout.footer_script')
<!-- END: PAGE FOOTER SCRIPTS -->
</div>
</body>
</html>
