<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- START: PAGE LEVEL HEADER LINKS -->
@include('layout.header_script')

    <script type="text/javascript" src="{{ asset('website/js/jquery-2.1.4.min.js') }}"></script>
<!-- END: PAGE LEVEL HEADER LINKS -->

    <!-- START: PAGE LEVEL STYLE SHEET -->
@yield('page_style')
<!-- END: PAGE LEVEL STYLE SHEET -->

    <style>
        .zoom-out {
            zoom: 0.77;
        }
    </style>
</head>

<body>

<div id="searchKey" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search...</h4>
            </div>
            <div class="modal-body" id="searchResult">
            </div>
        </div>

    </div>
</div>

<div class="wrapper">
<?php
$fund_identities = App\Models\FundShells\FundIdentity::all(); ?>
@include('layout.nav')
<!-- Main content -->
    <div class="main-panel">
        <!-- START: PAGE CONTAINER -->
        @include('layout.sub_nav')
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

    <script>
        if(window.location.pathname == '/fund_overview_result'){
            $('.navbar').remove();
            $('.sidebar').remove();
            $('.main-panel').css('width','100%');
        }

        $(document).ready(function(){
        $('#search').click(function(){
            var domna = $('#fundKey').val();

            var request = $.ajax({
                url: "{{ route('fund_overview_search')  }}?fund_key=" + domna,
                type: "GET",
                dataType: "json"
            });

            request.done(function(msg) {
                $('#searchKey').modal('show');
                $("#searchResult").html( msg );
            });

            request.fail(function(jqXHR, textStatus) {
                alert( "Request failed: " + textStatus );
            });
        });
        });
    </script>
</div>
</body>
</html>
