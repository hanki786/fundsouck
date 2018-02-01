<!-- Bootstrap and necessary plugins -->
<!--   Core JS Files   -->
<script src="{{ asset('website/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('website/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('website/assets/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('website/assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('website/assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('website/assets/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('website/assets/js/demo.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#successor_name').change(function(){
            var successor_name = $(this).val();

                <?php  $num =  str_pad(7,6,'0',STR_PAD_LEFT )?>

            var successor_code = "SA"+ "---" + "FS";

            $('#successor_code').val(successor_code);

        });

    });


</script>