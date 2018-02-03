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
<?php
$fund_identities = App\Models\FundShells\FundIdentity::all(); ?>
@include('layout.nav')
<!-- Main content -->
    <div class="main-panel">
        <!-- START: PAGE CONTAINER -->

        @include('layout.sub_nav')
        <br>
        @yield('content')
    <!-- END: PAGE CONTAINER -->
        @include('layout.footer')
    </div>
    <!-- START: PAGE LEVEL SCRIPTS -->
@yield('page_scripts')
<!-- END: PAGE LEVEL SCRIPTS -->


    <!-- START: PAGE FOOTER SCRIPTS -->
@include('layout.footer_script')
<!-- END: PAGE FOOTER SCRIPTS -->
</div>
</body>
</html>
