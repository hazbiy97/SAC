        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title desktop"><span class="fa fa-sign-out"></span> Sign <strong style="color:red">Out</strong> ?</div>
                    <div class="mb-content visible-xs">
                        <h2 class='text-center' style='color:#FFF'><span class="fa fa-sign-out"></span> Sign <strong style="color:red">Out ?</strong></h2>
                    </div>
                    <div class="mb-content desktop">
                        <p>Are you sure you want to sign off?</p>
                        <p>Press No if you want to continue work. Press Yes to Sign off from Ericcson Apps.</p>
                    </div>
                    <div class="mb-footer">

                        <div class="pull-right desktop">

                            <a href="<?php echo base_url();?>logout" class="btn btn-default btn-lg">Yes</a>

                            <button class="btn btn-default btn-lg mb-control-close">No<span class='desktop'>, Let me Back</span></button>

                        </div>

                        <div class="text-center visible-xs">

                            <a href="<?php echo base_url();?>logout" class="btn btn-default btn-lg">Yes</a>

                            <button class="btn btn-default btn-lg mb-control-close">No<span class='desktop'>, Let me Back</span></button>

                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url();?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url();?>assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->      
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>        
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-select.js'></script> 
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/validationengine/jquery.validationEngine.js'></script>  


        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/tableExport.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/libs/base64.js"></script>   


    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/noty/jquery.noty.js'></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tour/bootstrap-tour.min.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tour/bootstro.min.js"></script>


        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>-->
        
        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>-->

        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery-validation/jquery.validate.js"></script>-->
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/settings.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>
        
        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/demo_dashboard.js"></script>-->
        <!-- END TEMPLATE -->

        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/additional/kpi.js"></script>-->
    <!-- END SCRIPTS -->         
    </body>
</html>