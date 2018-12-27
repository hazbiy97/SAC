
<style type="text/css">
    .btn-info{
        background: #1caf9a !important;
        border-color: #1caf9a !important;
    }
    //hazbiy Icon
    .hz-notif-error{
        background-image: url("<?php echo base_url(); ?>/assets/hazbiyIcon/");
        background-position: center center;
    }
    .icon-notif{
        background-image: url("<?php echo base_url();?>/assets/hazbiyIcon/notifications-bell-button.png");
    }
    .overlay {
        background: gray;
        opacity: .9;
    }
    .list-group-status.status-read:after {
        background: gray;
    }
</style>

<!-- START X-NAVIGATION -->
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="<?php echo base_url(); ?>" class="logo" style="font-family: 'Source Sans Pro', sans-serif;">

        <!--<img src="<?php echo base_url(); ?>assets/coroowicaksono/img/mronline_logo.png" style="height:30px;margin-top:-5px;margin-right:10px;font-weight:100" class="desktop">-->

        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        <span class="logo-lg">(151 Dev)</span>
    </a>
        <a href="<?php echo base_url(); ?>" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile" >
        <a href="#" class="x-navigation-minimize profile-mini">
                    <img src="<?php echo base_url(); ?>assets/img/cover/<?php
                        if (isset($pict)) {
                            echo $pict;
                        }
                        else {
                            "unknown";
                        } ?>.png" alt="Site Logo"/>
                                                </a>
        <div class="profile">
            <div class="profile-image">
                <img src="<?php echo base_url(); ?>assets/img/cover/.png" alt="Big Site Logo" style="border:0;border-bottom: 3px solid #FFF;border-radius:0" />
            </div>
            <div class="profile-data">
                <div class="profile-data-name">
                    <?php
                            $namenya;
                            $namaawal = explode(" ", $namenya);
                            //echo $namaawal[0]; 
                            echo $namenya?>
                </div>
                <div class="profile-data-title">
                    <?php echo $fromnya; ?>
                </div>
            </div>
            <div class="profile-controls">
                <a href="<?php echo base_url(); ?>profile" class="profile-control-left"><span class="fa fa-cogs"></span></a>
                <a href="<?php echo base_url(); ?>profile/contactperson" class="profile-control-right"><span class="fa fa-group"></span></a>
            </div>
        </div>
    </li>

    <li>
        <a href="<?php echo base_url(); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
    </li>

    <li class="xn-openable">
        <a href="#"><span class="fa fa-tasks"></span> <span class="xn-text">Report</span></a>
        <ul>
                <li><a href="<?php echo base_url(); ?>main/stolist"><span class="fa fa-tasks"></span> (Menu 1)</a></li>
                <li><a href="<?php echo base_url(); ?>main/rfilist"><span class="fa fa-tasks"></span> (Menu 2)</a></li>
        </ul>
    </li>

    <!--Only admin can see this button (Hazbiy's Edit)-->
    <?php if($role == "ADMIN")
        {?>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-cloud-upload"></span> <span class="xn-text">Uploader</span></a>
        <ul>
            <li><a href="<?php echo base_url(); ?>uploader/ps"><span class="fa fa-cloud-upload"></span> RFI Bulk Approval</a></li>
        </ul>
    </li>
        <?php } ?>

    <!--<li class="xn-openable">
        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
        <ul>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-bar-chart-o"></span>Another Chart #1</a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>report/performancebysh"><span class="fa fa-bar-chart-o"></span> DSP Performance</a></li>
                    <li><a href="<?php echo base_url(); ?>report/chartshshareperf"><span class="fa fa-bar-chart-o"></span> MR Size</a></li>
                    <li><a href="<?php echo base_url(); ?>report/shreportperformance"><span class="fa fa-bar-chart-o"></span> DSP Share</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-bar-chart-o"></span> Another Chart #2</a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>report/shreportperformance"><span class="fa fa-bar-chart-o"></span> PTP Share</a></li>
                    <li><a href="<?php echo base_url(); ?>report/simpleoutstanddsakunc"><span class="fa fa-bar-chart-o"></span> PTP Back-Log</a></li>
                    <li><a href="<?php echo base_url(); ?>report/PTPProgress"><span class="fa fa-bar-chart-o"></span> PTP Progress</a></li>
                    <li><a href="<?php echo base_url(); ?>report/InvoiceProgress"><span class="fa fa-bar-chart-o"></span> Invoice Progress</a></li>
                </ul>
            </li>
        </ul>
    </li>-->

    <!--<li class="xn-openable">
        <a href="#"><span class="fa fa-cloud-download"></span> <span class="xn-text">Downloader</span></a>
        <ul>
            <li><a href="<?php echo base_url(); ?>kuncanother/viewerPTP"><span class="fa fa-cloud-download"></span> Plan Spec</a></li>
        </ul>
    </li>-->


    <!--<li class="xn-openable" style="width:100%">
        <a href="#">
                    <i class="fa fa-cogs"></i> <span class='xn-text'>Setting</span>
                </a>
        <ul class="treeview-menu">
            <?php
                        if ($mronlinerole == "LDM_ADMIN") {
                            echo "<li><a href='" . base_url() . "ekunbar/ELCC'><span class='fa fa-dot-circle-o'></span> LCC Mapping</a></li>";
                            echo "<li><a href='" . base_url() . "ekunbar/ActLCC'><span class='fa fa-dot-circle-o'></span> Single Form Mapping</a></li>";
                        }
                        echo "<li><a href='" . base_url() . "uploader/ps_master'><span class='fa fa-dot-circle-o'></span> Plan Spec Detail Master</a></li>";
                        echo "<li><a href='" . base_url() . "admin/admin'><span class='fa fa-dot-circle-o'></span> Administration</a></li>";
                        ?>
        </ul><br/><br/>
    </li>-->
</ul>
<!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->

<!-- PAGE CONTENT -->
<div class="page-content page-min-15px">

    <!-- START X-NAVIGATION VERTICAL -->
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- TOGGLE NAVIGATION -->
        <li class="xn-icon-button bootstro" data-bootstro-title="Un-Collapse Menu" data-bootstro-content="By default, your screen will collapse to extend your screen. Let's <b>Un-collapse</b> by using this button to view the differences." data-bootstro-placement="bottom"
            data-bootstro-width="400px" data-bootstro-step="2">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>
        <!-- MR SEARCH --
        <li class="xn-search bootstro" data-bootstro-title="Global Search" data-bootstro-content="Let's Find <b>STO</b> / <b>RFI</b>!<br/>You can search any STO/RFI by using this little form." data-bootstro-placement="bottom" data-bootstro-width="400px" data-bootstro-step="3">
            <form role="form">
                <input type="text" name="mrsearch" id="mrsearch" placeholder="Search" value="" />
            </form>
        </li>
        -- END MR SEARCH -->
        <!-- END TOGGLE NAVIGATION -->
        <!-- SEARCH - Not yet in use -->
        <!--<li class="xn-search">
                <form role="form" action="http://eidwhd.com/dash/smart">
                    <input type="text" name="search" placeholder="Search..."/>
                </form>
            </li>-->
        <!-- END SEARCH -->

        <!-- SIGN OUT --
        <li class="xn-icon-button pull-right bootstro" data-bootstro-title="Logout" data-bootstro-content="For the last, don't forget to logout if you need to away from your device!" data-bootstro-placement="left" data-bootstro-width="400px" data-bootstro-step="4">
            <a href="<?php echo base_url(); ?>logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
        </li>
        -- END SIGN OUT -->



        <li class="xn-icon-button pull-right bootstro desktop" data-bootstro-title="MITTWMC v1 - Tour" data-bootstro-content="Welcome to the new <b>MITTWMC</b>. <br/><br/>Learning <b>MITTWMC</b> made easy. Below you'll find basic tutorials for getting started for MITTAPP. Please use next button on the bottom right."
            data-bootstro-placement="left" data-bootstro-width="400px" data-bootstro-step="0"> <a href="#" onclick="bootstro.start('.bootstro');"><span class="fa fa-info" style="color:#00A9D4"></span></a>
        </li>

        <!-- notif -->
        <?php if($role!='TP'){ ?>
        <li class="xn-icon-button pull-right">
            <a id="notifclicked_notification" href="#"><span class="fa fa-warning" id="notif_loading"></span></a>
            <div class="informer informer-danger" id="informer"><span id="countnotif"></span></div>
            <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-warning"></span> Admin Notification</h3>                                
                    <div class="pull-right">
                        <span class="label label-danger" id="label_notif" onclick="loadNotif()" style="cursor: pointer"><i class="" id="notif" ></i></span>
                    </div>
                </div>
                <div class="panel-body list-group list-group-contacts" id="notiflist" style="height: 200px; overflow: auto">
                    <div id="notiflist_view">
                        
                    </div>
                    <a href="#" id="spinner" class="list-group-item" style="font-size: 70px;text-align: center;">
                        <span class="fa fa-spinner fa-spin"></span>
                    </a>
                    <!--
                    <a href="#" class="list-group-item">
                        <div class="list-group-status status-away"></div>
                        <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                        <span class="contacts-title">Dmitry Ivaniuk</span>
                        <p>Donec risus sapien, sagittis et magna quis</p>
                    </a>-->
                </div>     
                <div class="panel-footer text-center">
                    <a href="<?php echo base_url();?>main/notiflist">Show all Notification</a>
                </div>                            
            </div>                        
        </li>
        <?php } ?>
        <!-- notif -->
    </ul>

<style type="text/css">
    .list-group-status.status-online:after{
        background:#E04B4A;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#notif_loading').removeClass("fa-warning faa-ring animated fa-4x");  
        $('#notif_loading').addClass("fa-spinner fa-spin");
        setTimeout(function(){
            loadNotif();
        },1000);
    })

    function loadNotif(){
            $('#notif_loading').removeClass("fa-warning faa-ring animated fa-4x");
            $('#notiflist_view').empty();
            $("#notiflist_view").fadeOut(0);
            $('#notif_loading').addClass("fa-spinner fa-spin");
            $('#informer').fadeOut(0);
            $('#label_notif').fadeOut(0, function(){$('#notif').empty();});
            $('.listnotif_detail').remove();
            $("#spinner").fadeIn(0);
            var url = '<?php echo base_url();?>autoloader/notifications';
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                success: function(result) {
                    $('#label_notif').removeClass("label-success label-danger");
                    $('#label_notif').addClass("label-success");
                    if(!result.is_empty){
                        result.data.forEach(function(notification, index){
                            if(notification.TYPE == 'STO'){
                                var link = '/rfi/dir_sto/'+notification.FNAME;
                                var notifTitle = 'STO List Updated';
                                var notifBody = 'STO has been updated from '+notification.FNAME;
                                var imageSource = '/assets/hazbiyIcon/Files-Txt-icon.png';
                            }else {
                                var link = '/rfi/dir_inbox_log/'+notification.FNAME;
                                var notifTitle = 'STO Progress Status Updated';
                                var notifBody = 'STO Progress Status has been updated from SDE';
                                var imageSource = '/assets/hazbiyIcon/email-envelope-outline-shape-with-rounded-corners.png';
                            }
                            var status = notification.SEEN == 0 ? 'status-away': 'status-read';
                            var notificationList = ' <a href="'+link+'" target="_blank" class="list-group-item" onclick="updateSeen('+notification.NOTIFID+')"> <div class="list-group-status '+status+'"></div><img style="border: 0px" src="'+imageSource+'" class="pull-left" alt="STO"/><span class="contacts-title">'+notifTitle+'</span><p>'+notifBody+'</p></a>';
                            $("#notiflist_view").append(notificationList);
                        });
                        $("#spinner").fadeOut(1000,function(){
                            $('#countnotif').empty();
                            $('#countnotif').append(result.counts[0].unseen_total).next(function(){console.log("lah")});
                            $("#notiflist_view").fadeIn(500);
                            $('#label_notif').fadeIn(500);
                            $('#informer').fadeIn(500);
                        });     
                        $('#notif').append("Click to refresh");   
                        $('#notif_loading').fadeOut(1000,function(){
                            $('#notif_loading').removeClass("fa-warning faa-ring animated fa-4x fa-spinner fa-spin");
                            $('#notif_loading').addClass("fa-bell").fadeIn(500);
                        });
                    }else{//blom kelar
                        $("#spinner").fadeOut(1000,function(){
                            $("#notiflist_view").fadeIn(500);
                            $('#label_notif').fadeIn(500);
                        });
                        $('#notif').append("Notification empty");   
                        $('#notif_loading').removeClass("fa-spinner fa-spin");
                        $('#notif_loading').addClass("fa-warning faa-ring animated fa-4x");
                    }
                },
                error: function(result){//blom kelar
                    $('#label_notif').removeClass("label-success label-danger");
                    $('#label_notif').addClass("label-danger");
                    
                    $("#notiflist_view").append('<a onclick="loadNotif()" class="list-group-item"> <div class="list-group-status status-offline"></div><img src="/assets/hazbiyIcon/warning-triangle.png" style="border: 0px" class="pull-left" alt="Alert"/><span class="contacts-title">Failed to load</span><p>unknown error</p></a>');
                    $("#spinner").fadeOut(1000,function(){
                        $("#notiflist_view").fadeIn(500);
                        $('#label_notif').fadeIn(500);
                    });
                    $('#notif').append("Click to refresh");   
                    $('#countnotif').append(0);
                    $('#notif_loading').removeClass("fa-spinner fa-spin");
                    $('#notif_loading').addClass("fa-warning faa-ring animated fa-4x");

                }
            });
    }

    function updateSeen(NOTIFID){
        //loadNotif();
        var url = '<?php echo base_url();?>autoloader/updateSeen/'+NOTIFID;
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                success: function(result) {
                   loadNotif();
                },
                error: function(result){
                    //blom kelar
                }
            });
    }
</script>