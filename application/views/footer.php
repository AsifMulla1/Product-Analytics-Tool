 <footer class="footer text-center" style="color: #007bb6;margin-top: 15px;">
    <h4 >Comtranse Technology, Kolhapur</h4><h4 style="color: #e00f7e"> </h4>
       
</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    
    <div class="chat-windows"></div>
  
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

 <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <!--  <script src="<?php echo base_url();?>web_resources/dist/js/Notification.js"></script> -->
    
    <script src="<?php echo base_url(); ?>assets3/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
        <!-- <script src="<?php echo base_url(); ?>dist/js/popper.min.js"></script> -->

    <!-- Theme settings -->
    <script src="<?php echo base_url(); ?>dist/js/app.init.horizontal.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets3/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
     <script src="<?php echo base_url(); ?>assets3/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url();?>web_resources/dist/js/sweetalert.min.js"></script>

     <script src="<?php echo base_url(); ?>assets3/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets3/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/pages/forms/select2/select2.init.js"></script>
    <!--This page plugins -->
    <script src="<?php echo base_url();?>assets3/DataTables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/pages/datatable/datatable-basic.init.js"></script>

    <!--Morris JavaScript -->
   <!--  <script src="<?php echo base_url(); ?>assets3/libs/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets3/libs/morris.js/morris.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets3/extra-libs/DataTables/datatables.min.js"></script>
     <!-- <script src="<?php echo base_url();?>assets3/libs/jquery-asColor/dist/jquery-asColor.min.js"></script> -->
   <!--  <script src="<?php echo base_url();?>assets3/libs/jquery-asGradient/dist/jquery-asGradient.js"></script> -->
        <script src="<?php echo base_url();?>web_resources/dist/js/parsley/parsley.min.js"></script>
                 <script src="<?php echo base_url('web_resources');?>/dist/js/jQuery.print.js"></script>


   <!--  <script src="<?php echo base_url();?>assets3/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>assets3/libs/%40claviska/jquery-minicolors/jquery.minicolors.min.js"></script> -->
  
    

   

    <script>
        $(document).ready(function() {
            $("#cardtype").change(function() {
                //           alert("hu");
                $(".payment-body-outer").css("display", "none");
                var cardType = $(this).children("option:selected").val();

                $("#" + cardType).show();
            });

        });
    </script>

</body>

<!-- Mirrored from wrappixel.com/demos/admin-templates/xtreme-admin/html/horizontal/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 05:28:17 GMT -->

</html>