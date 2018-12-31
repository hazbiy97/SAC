<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAC</title>
  <!--===============================================================================================-->  
  <link rel="icon" href="<?php echo base_url();?>assets/img/logo.png" type="image/x-icon" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/ login/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/css-hamburgers/hamburgers.min.css">

   <link rel="stylesheet" href="<?php echo base_url();?>assets/homepage/css/main.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/main.css">
  <!--===============================================================================================-->
</head>

<body>
	<?php if(isset($_view) && $_view)
		  $this->load->view($_view);
	?>   

 	<script src="<?php echo base_url();?>assets/homepage/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url();?>assets/homepage/js/plugins.js"></script>
	<script src="<?php echo base_url();?>assets/homepage/js/main.js"></script>


</body>
</html>