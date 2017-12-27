<!-- Bootstrap and necessary plugins -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/js/libs/tether.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/libs/pace.min.js') }}"></script>

<!-- Plugins and scripts required by all views -->
<script src="{{ asset('assets/js/libs/Chart.min.js') }}"></script>


<!-- GenesisUI main scripts -->

<script src="{{ asset('assets/js/app.js') }}"></script>




<!-- Datatables -->

<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>

<script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>

<script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>

<script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>

<script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>

<!-- Custom Theme Scripts -->

<script src="{{ asset('build/js/custom.min.js') }}"></script>



<!-- Datatables -->

<script>

    $(document).ready(function() {

        var handleDataTableButtons = function() {

            if ($("#datatable-buttons").length) {

                $("#datatable-buttons").DataTable({

                    dom: "Bfrtip",

                    buttons: [

                        {

                            extend: "copy",

                            className: "btn-sm"

                        },

                        {

                            extend: "csv",

                            className: "btn-sm"

                        },

                        {

                            extend: "excel",

                            className: "btn-sm"

                        },

                        {

                            extend: "pdfHtml5",

                            className: "btn-sm"

                        },

                        {

                            extend: "print",

                            className: "btn-sm"

                        },

                    ],

                    responsive: true

                });

            }

        };



        TableManageButtons = function() {

            "use strict";

            return {

                init: function() {

                    handleDataTableButtons();

                }

            };

        }();



        $('#datatable').dataTable();



        $('#datatable-keytable').DataTable({

            keys: true

        });



        $('#datatable-responsive').DataTable();



        $('#datatable-scroller').DataTable({

            ajax: "js/datatables/json/scroller-demo.json",

            deferRender: true,

            scrollY: 380,

            scrollCollapse: true,

            scroller: true

        });



        $('#datatable-fixed-header').DataTable({

            fixedHeader: true

        });



        var $datatable = $('#datatable-checkbox');



        $datatable.dataTable({

            'order': [[ 1, 'asc' ]],

            'columnDefs': [

                { orderable: false, targets: [0] }

            ]

        });

        $datatable.on('draw.dt', function() {

            $('input').iCheck({

                checkboxClass: 'icheckbox_flat-green'

            });

        });



        TableManageButtons.init();

    });


    $(document).ready(function(){
        $('#successor_name').change(function(){
            var successor_name = $(this).val();

                <?php  $num =  str_pad(7,6,'0',STR_PAD_LEFT )?>

            var successor_code = "SA"+ "---" + "FS";

            $('#successor_code').val(successor_code);

        });

    });


</script>