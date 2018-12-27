<!DOCTYPE html>
<html lang="en">   
<head>
    <title>151 Dev</title>
</head>  
<style>
	
   @import url('https://mittapp.com/ericsson/font/roboto/roboto.css');
   .wrapper{
   	display: flex;
    width: 75%;
    padding: 0;
    margin: 10px auto;
   	justify-content: center;
    /*min-height: calc(100vh - 70px);*/
    z-index: 0;
   }
  .body {
  	flex: 1;
  	flex-direction: row;
  	justify-content: center;
    width: 75%;  
    padding: 0;
    margin: 0;
  }
  .nav{
  	flex: 1;
  	margin: 10px 0px;
  	min-height: 50px;
  }
  .main {
  	flex: 1;
  	display: flex;
  	width: 100%;
  	background: white;
  	margin-top: 10px;
    //min-height: calc(100vh - 70px);
    padding: 20px;
  }
  .main > .carousel-container{
  	max-width: 40%;
  	flex: 1;
  	margin-right: 20px;
  }
  .carousel-inner > .item > .aspect{
  	display: flex;
  	padding-bottom: 75%;
  	justify-content: center;
  	background: gray;
  	overflow: hidden;
  }
  .carousel img{
  	position: absolute;
  	height: 100%;
  	width:auto;
  	object-fit: cover;
  	transform: scale(1);
  	-webkit-transition: all 0.3s ease; /* Safari and Chrome */
    -moz-transition: all 0.3s ease; /* Firefox */
    -ms-transition: all 0.3s ease; /* IE 9 */
    -o-transition: all 0.3s ease; /* Opera */
    transition: all 0.3s ease;
  }
  .description {
  	flex: 1;
  }
  .description button{
  	margin: auto;
  	margin-bottom: 10px;
  	display: block;
    border: none;
    color: white;
    text-align: center;
    font-size: 18px;
    max-height: 40%;
    width: 40%;
    background-color: gray;
    text-decoration: none;
  }
  .tiles {
    width: 100%;
    height: 100%;
  }

  .tile {
    position: relative;
    float: left;
    width: 33.333%;
    height: 100%;
    overflow: hidden;
  }

  .photo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transition: transform .5s ease-out;
  }

  .txt {
    position: absolute;
    z-index: 2;
    right: 0;
    bottom: 10%;
    left: 0;
    font-family: 'Roboto Slab', serif;
    font-size: 9px;
    line-height: 12px;
    text-align: center;
    cursor: default;
  }

  .x {
    font-size: 32px;
    line-height: 32px;
  }
</style>
<?php //Global Variable
    $STO_TOTAL = 0;
?>
	<!--
    <ul class='just-mobile' style="padding: 0px; float:none;">
       <div class='with-bottom-line' style="width: 100%; text-align: center; background: #e8e8e8; padding-top: 10px">
            <span class="lead" style="color:#777"> 
                <?php echo $tp_id; ?>
            </span>
        </div>
   </ul>-->

   <!-- filter dashboard mode
   <ul class="breadcrumb push-down-0">
     <div class='pull-left' style='padding-top:2px;font-size:11px;'>
         <a class='btn <?php echo ($filterby_tp ? 'btn-default' : 'btn-primary'); ?> btn-xs' href="
            <?php echo base_url().'dashboard/';?>">DASHBOARD
         </a><a class='btn <?php echo ($filterby_tp ? 'btn-primary' : 'btn-default'); ?> btn-xs' href="
            <?php echo base_url().'dashboard?filterby_tp=all';?>">DASHBOARD BY TP
         </a>
       </div> 
       <div class='pull-right desktop'>
            <?php echo $tp_id; ?>
        </div>
        
   </ul> 
-->
   
	  <div class="page-content-wrap">
	   	<div class="wrapper">
	      <div class="body">
	      	<span class="nav">
		   			Details > <a href="<?php echo base_url().'homepage';?>">Rumah</a> > <?php if(isset($rumahs[0])) echo $rumahs[0]['houseId']; ?>
		   		</span>
	      	<div class="main">
	      		<div class="carousel-container">
	      			<div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators" style="bottom: 0px; padding-bottom: 0px">
						    	<?php 
						    	if(sizeof($rumahs) > 1):
						    		foreach ($rumahs as $key => $rumah) :?>
							      <li data-target="#myCarousel" data-slide-to="<?php echo $key?>" class="<?php echo $key == 0 ? 'active' : null ?>"></li>
						    	<?php endforeach; ?>
						    	<!-- Left and right controls -->
								    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#myCarousel" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right"></span>
								      <span class="sr-only">Next</span>
								    </a>
						    	<?php endif?>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner">
						    	<?php foreach ($rumahs as $key => $rumah) :?>
						    		<div class="item <?php echo $key == 0 ? 'active': null; ?>">
						    			<div class="aspect" data-scale='1.2'>
							        	<img class='details-image' src="<?php echo asset_url().'img/rumah/'.$rumah['houseId'].'/'.$rumah['imageName'];?>" alt="Los Angeles">
							      	</div>
							      </div>
						    	<?php endforeach; ?>
						    </div>

						    
						  </div>
						</div>
						<div class= "description">
							<h2 style="margin-top: 0"><?php echo $rumahs[0]['name'];?></h2>
							<h4 style="margin-top: 0"><?php echo $rumahs[0]['description'];?></h4>
							<h5 style="margin-top: 0; color: grey"><?php echo $rumahs[0]['priceRange'];?></h5>
							<hr>
							<button >Contact Us</button>
							<span>(Full Description)</span>
						</div>
					</div>
	      </div>
	   </div>
   </div>
    

<script type="text/javascript">
    $(document).ready(function() {
        //AppendDashboard();
        setTimeout(function(){
           //DashboardBox();
        }, 3000);

        setTimeout(function(){
           $('#load-refresh-1').fadeOut("slow");
        }, 1500);
    });

    $('.carousel')
    .on('mouseover', function(){
    	console.log(JSON.stringify($(this)));
      $('.aspect').children('img').css({'transform': 'scale('+ $('.aspect').attr('data-scale') +')'});
    })
    .on('mouseout', function(){
       $('.aspect').children('img').css({'transform': 'scale(1)'});
    });/*
    .on('mousemove', function(e){
      $('.aspect').children('img').css({'transform-origin': ((e.pageX - $('.aspect').offset().left) / $('.aspect').width()) * 100 + '% ' + ((e.pageY - $('.aspect').offset().top) / $('.aspect').height()) * 100 +'%'});
    });*/
    
   /*
    function AppendDashboard(){
        <?php if(!($tp_id == null && $filterby_tp)) { ?>
            $('#get_sto_total').empty();
            $('#get_sto_nd').empty();
            $('#get_sto_r').empty();
            $('#get_sto_f').empty();
            $('#get_sto_v').empty();
            $('#get_sto_total').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:24px">');
            $('#get_sto_nd').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');
            $('#get_sto_r').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');
            $('#get_sto_f').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');
            $('#get_sto_v').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');

            $('#get_rfi_total').empty();
            $('#get_rfi_c').empty();
            $('#get_rfi_total').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:24px;line-height:18px">');
            $('#get_rfi_c').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');

            $('#get_3_sto_nd').empty();
            $('#get_3_sto_nd').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');

            $('#get_4_sto_r').empty();
            $('#get_4_sto_r').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');

            $('#get_5_sto_f').empty();
            $('#get_5_sto_f').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');

            $('#get_6_sto_v').empty();
            $('#get_6_sto_v').append('<span class="fa fa-circle-o-notch fa-spin" style="font-size:18px;line-height:18px">');
        <?php }else{ 
            foreach ($TPs as $TP) { ?> 
                $('#get_".$TP['row_number']."_sto').empty();
                $('#get_".$TP['row_number']."_sto').append('<span class=\"fa fa-circle-o-notch fa-spin\" style=\"font-size:18px;line-height:18px\">');
           <?php }
        }?>
    };

    function DashboardBox(){
        var role = '<?php echo $role;?>';
        var url = '<?php echo base_url();?>autoloader/box_dashboard_completed/';
        var tp_id = '<?php if(isset($tp_id)){echo $tp_id;};?>';
        <?php if(!($tp_id == null && $filterby_tp)) { ?>
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                data: {
                   role: role,
                   tp_id: tp_id
                },
                success: function(result) {
                    //BOX1
                    $('#get_sto_total').empty();
                    $('#get_sto_nd').empty();
                    $('#get_sto_r').empty();
                    $('#get_sto_f').empty();
                    $('#get_sto_v').empty();
                    $('#get_sto_desc').empty();
                    $('#get_sto_total').append(result.get_sto_total);
                    $('#get_sto_nd').append(result.get_sto_nd);
                    $('#get_sto_r').append(result.get_sto_r);
                    $('#get_sto_f').append(result.get_sto_f);
                    $('#get_sto_v').append(result.get_sto_v);
                    $('#get_sto_desc').append(result.get_sto_desc);
                    $('#bar_0').data('percentage',result.get_sto_desc+'%');
                    $('#bar_0').css("width",result.get_sto_desc+'%');

                    //BOX2
                    $('#get_rfi_total').empty();
                    $('#get_rfi_c').empty();
                    $('#get_rfi_desc').empty();
                    $('#get_rfi_total').append(result.get_rfi_total);
                    $('#get_rfi_c').append(result.get_rfi_c);
                    $('#get_rfi_desc').append(result.get_rfi_desc);
                    $('#bar_1').data('percentage',result.get_rfi_desc+'%');
                    $('#bar_1').css("width",result.get_rfi_desc+'%');


                    //BOX3
                    $('#get_3_sto_nd').empty();
                    $('#get_3_sto_nd_desc').empty();
                    $('#get_3_sto_nd').append(result.get_sto_nd);
                    $('#get_3_sto_nd_desc').append(result.get_sto_nd_desc);
                    $('#bar_3').data('percentage',result.get_sto_nd_desc+'%');
                    $('#bar_3').css("width",result.get_sto_nd_desc+'%');

                    //BOX4
                    $('#get_4_sto_r').empty();
                    $('#get_4_sto_r_desc').empty();
                    $('#get_4_sto_r').append(result.get_sto_r);
                    $('#get_4_sto_r_desc').append(result.get_sto_r_desc);
                    $('#bar_4').data('percentage',result.get_sto_r_desc+'%');
                    $('#bar_4').css("width",result.get_sto_r_desc+'%');

                    //BOX5
                    $('#get_5_sto_f').empty();
                    $('#get_5_sto_f_desc').empty();
                    $('#get_5_sto_f').append(result.get_sto_f);
                    $('#get_5_sto_f_desc').append(result.get_sto_f_desc);
                    $('#bar_5').data('percentage',result.get_sto_f_desc+'%');
                    $('#bar_5').css("width",result.get_sto_f_desc+'%');

                    //BOX6
                    $('#get_6_sto_v').empty();
                    $('#get_6_sto_v_desc').empty();
                    $('#get_6_sto_v').append(result.get_sto_v);
                    $('#get_6_sto_v_desc').append(result.get_sto_desc);
                    $('#bar_6').data('percentage',result.get_sto_desc+'%');
                    $('#bar_6').css("width",result.get_sto_desc+'%'); 
                }
            });
        <?php } else { 
            foreach ($TPs as $TP){
                $sto_percentage = number_format(($TP['sto_total']/$STO_TOTAL*100),2,'.',',');
                echo "$('#get_".$TP['row_number']."_sto').empty();";
                echo "$('#get_".$TP['row_number']."_desc').empty();";
                echo "$('#get_".$TP['row_number']."_sto').append(".$TP['sto_total'].");";
                echo "$('#get_".$TP['row_number']."_desc').append(".$sto_percentage.");";
            }
        } ?>
    };

    setInterval(function(){
        AppendDashboard();
        DashboardBox();
   }, 15 * 60 * 1000);*/
</script> 
</html>