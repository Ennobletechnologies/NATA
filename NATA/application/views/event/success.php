<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Success</title>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.css">
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/css/full-slider.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.bootstrap-touchspin.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.bootstrap-touchspin.js"></script>
</head>
<body>
<div class="container mt40">
  <div class="col-lg-8 col-xs-offset-2">
    <div class="contact-details" id="divToPrint">
      <div class="mail-head"> 
        <br/>
      </div>
	  <?php $seg_value = $this->session->userdata("seg_value"); ?>
	  <?php if($seg_value==21) { 
//	  $this->load->view('event/tik_21');
$this->load->view('event/success_21');	  
	} else {

$this->load->view('event/success_normal');
	}
	?>

     </div>
     
       
      
    </div>
  </div>
</div>

</body>
</html>
