<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/noty/jquery.noty.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/noty/layouts/topRight.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/noty/themes/default.js'></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/iconfont.css" rel="stylesheet">
    <!--<script src="<?php echo base_url(); ?>assets/highchart/highcharts.js"></script>
    <script src="<?php echo base_url(); ?>assets/highchart/highcharts-more.js"></script>-->

    <style>
        .ekunbarloading {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 111;
            background: #FFF
        }
        
        #loading {
            position: absolute;
            left: calc(50% - 100px);
            top: calc(50% - 25px);
            z-index: 9999
        }
        
        .uil-ripple {
            position: absolute;
            left: calc(50% - 90px);
            top: calc(50% - 90px);
            opacity: .5;
            z-index: 999
        }
        
        .ld-l {
            opacity: 0;
            animation: ld-in 3s 0.0s ease infinite;
        }
        
        .ld-o {
            opacity: 0;
            animation: ld-in 3s 0.1s ease infinite;
        }
        
        .ld-a {
            opacity: 0;
            animation: ld-in 3s 0.2s ease infinite;
        }
        
        .ld-d {
            opacity: 0;
            animation: ld-in 3s 0.3s ease infinite;
        }
        
        .ld-i {
            opacity: 0;
            animation: ld-in 3s 0.4s ease infinite;
        }
        
        .ld-n {
            opacity: 0;
            animation: ld-in 3s 0.5s ease infinite;
        }
        
        .ld-g {
            opacity: 0;
            animation: ld-in 3s 0.6s ease infinite;
        }
        
        @keyframes ld-in {
            0% {
                opacity: 0;
                transform: scale(0);
            }
            30% {
                opacity: 1;
                transform: scale(1);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
    <script>
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".ekunbarloading").fadeOut("slow");
        });
    </script>


    <link href="<?php echo base_url(); ?>assets/font/_getfontbyekunbar.css" rel="stylesheet">

    <style>
        h1,
        h2,
        h3,
        h4,
        .widget,
        .x-navigation,
        .breadcrumb,
        .mb-title,
        .ericssonfont,
        .logo-lg {
            font-family: 'ericsson_capital', Arial;
            font-weight: 400 !important;
            text-shadow: none !important;
        }
        
        p {
            font-family: arial, helvetica, clean, sans-serif !important;
        }
    </style>

    <link rel="icon" href="<?php echo base_url(); ?>assets/coroowicaksono/img/logo.png" type="image/x-icon" />
    <!-- END META SECTION -->
    <style>
        .ts-button {
            display: none;
        }
        
        .popover-content {
            font-family: Arial;
        }
    </style>
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/homepage/theme-responsive.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>

    <div class="ekunbarloading">

        <svg id="loading">
        <g>
            <path class="ld-l" fill="#39C0C4" d="M43.6,33.2h9.2V35H41.6V15.2h2V33.2z"/>
            <path class="ld-o" fill="#39C0C4" d="M74.7,25.1c0,1.5-0.3,2.9-0.8,4.2c-0.5,1.3-1.2,2.4-2.2,3.3c-0.9,0.9-2,1.6-3.3,2.2
                c-1.3,0.5-2.6,0.8-4.1,0.8s-2.8-0.3-4.1-0.8c-1.3-0.5-2.4-1.2-3.3-2.2s-1.6-2-2.2-3.3C54.3,28,54,26.6,54,25.1s0.3-2.9,0.8-4.2
                c0.5-1.3,1.2-2.4,2.2-3.3s2-1.6,3.3-2.2c1.3-0.5,2.6-0.8,4.1-0.8s2.8,0.3,4.1,0.8c1.3,0.5,2.4,1.2,3.3,2.2c0.9,0.9,1.6,2,2.2,3.3
                C74.4,22.2,74.7,23.6,74.7,25.1z M72.5,25.1c0-1.2-0.2-2.3-0.6-3.3c-0.4-1-0.9-2-1.6-2.8c-0.7-0.8-1.6-1.4-2.6-1.9
                c-1-0.5-2.2-0.7-3.4-0.7c-1.3,0-2.4,0.2-3.4,0.7c-1,0.5-1.9,1.1-2.6,1.9c-0.7,0.8-1.3,1.7-1.6,2.8c-0.4,1-0.6,2.1-0.6,3.3
                c0,1.2,0.2,2.3,0.6,3.3c0.4,1,0.9,2,1.6,2.7c0.7,0.8,1.6,1.4,2.6,1.9c1,0.5,2.2,0.7,3.4,0.7c1.3,0,2.4-0.2,3.4-0.7
                c1-0.5,1.9-1.1,2.6-1.9c0.7-0.8,1.3-1.7,1.6-2.7C72.4,27.4,72.5,26.3,72.5,25.1z"/>
            <path class="ld-a" fill="#39C0C4" d="M78.2,35H76l8.6-19.8h2L95.1,35h-2.2l-2.2-5.2H80.4L78.2,35z M81.1,27.9h8.7l-4.4-10.5L81.1,27.9z"/>
            <path class="ld-d" fill="#39C0C4" d="M98,15.2h6.6c1.2,0,2.5,0.2,3.7,0.6c1.2,0.4,2.4,1,3.4,1.9c1,0.8,1.8,1.9,2.4,3.1s0.9,2.7,0.9,4.3
                c0,1.7-0.3,3.1-0.9,4.3s-1.4,2.3-2.4,3.1c-1,0.8-2.1,1.5-3.4,1.9c-1.2,0.4-2.5,0.6-3.7,0.6H98V15.2z M100,33.2h4
                c1.5,0,2.8-0.2,3.9-0.7c1.1-0.5,2-1.1,2.8-1.8c0.7-0.8,1.3-1.6,1.6-2.6s0.5-2,0.5-3c0-1-0.2-2-0.5-3c-0.4-1-0.9-1.8-1.6-2.6
                c-0.7-0.8-1.6-1.4-2.8-1.8c-1.1-0.5-2.4-0.7-3.9-0.7h-4V33.2z"/>
            <path class="ld-i" fill="#39C0C4" d="M121.2,35h-2V15.2h2V35z"/>
            <path class="ld-n" fill="#39C0C4" d="M140.5,32.1L140.5,32.1l0.1-16.9h2V35h-2.5l-11.5-17.1h-0.1V35h-2V15.2h2.5L140.5,32.1z"/>
            <path class="ld-g" fill="#39C0C4" d="M162.9,18.8c-0.7-0.7-1.5-1.3-2.5-1.7c-1-0.4-2-0.6-3.3-0.6c-1.3,0-2.4,0.2-3.4,0.7s-1.9,1.1-2.6,1.9
                c-0.7,0.8-1.3,1.7-1.6,2.8c-0.4,1-0.6,2.1-0.6,3.3c0,1.2,0.2,2.3,0.6,3.3c0.4,1,0.9,2,1.6,2.7c0.7,0.8,1.6,1.4,2.6,1.9
                s2.2,0.7,3.4,0.7c1.1,0,2.1-0.1,3.1-0.4c0.9-0.2,1.7-0.5,2.3-0.9v-6h-4.6v-1.8h6.6v9c-1.1,0.7-2.2,1.1-3.5,1.5
                c-1.3,0.3-2.5,0.5-3.9,0.5c-1.5,0-2.9-0.3-4.1-0.8s-2.4-1.2-3.3-2.2c-0.9-0.9-1.6-2-2.1-3.3s-0.8-2.7-0.8-4.2s0.3-2.9,0.8-4.2
                c0.5-1.3,1.2-2.4,2.2-3.3c0.9-0.9,2-1.6,3.3-2.2c1.3-0.5,2.6-0.8,4.1-0.8c1.6,0,3,0.2,4.1,0.7s2.2,1.1,3,2L162.9,18.8z"/>
        </g>
        </svg>

    </div>

    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-toggled">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar bootstro" data-bootstro-title="Left Sidebar" data-bootstro-content="By default, left sidebar on <b>MITTWMC</b> will auto-collapse for extend your screen. <br/><br/> This left sidebar contain of :<br/><br/><b>Ericsson Logo</b><br/>MITTWMC use Ericsson identity in scope of logotype, graphics and images. See brand portal on <b>internal.ericsson.com</b> for more information<br/><br/><b>User Information</b><br/>The User Information shown stores information about detail information by having some metadata set up by the login user.<br/><br/><b>Menu Navigation</b><br/>All of user information transferred across the functional interface between a source user and access system for delivery to a menu navigation. If you have problem with this menu provided, please contact your administrator!" data-bootstro-placement="right" data-bootstro-width="600px" data-bootstro-step="1">
            <!--
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
-->
            
            <script>
                $(function() {
                    // tour1.init();      
                    $(".start-tour").on("click", function() {
                        tour.start();
                    });
                });
            </script>


            <!-- END ADMIN MENU -->
            <!-- END X-NAVIGATION VERTICAL -->