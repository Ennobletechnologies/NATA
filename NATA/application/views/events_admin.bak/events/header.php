<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Event Booking Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>assets/admin/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/admin/css/pages/signin.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/admin/css/admin-styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/bootstrap-datetimepicker.min.css">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar-inner">
  <div class="container">
    <h3>Admin Dashboard</h3>
    <ul class="nav pull-right">
      <!--<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>-->
    </ul>
  </div>
</div>
</div>
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
	<?php $active=$this->uri->segment(3); ?>
      <ul class="mainnav">
        <li <?php if($active==="events") { echo "class='active'"; }?>><a href="<?php echo base_url()?>events_admin/index/events"><i class="fa fa-calendar"></i><span>Events</span> </a> </li>
        <li <?php if($active==="users") { echo "class='active'"; }?>><a href="<?php echo base_url()?>events_admin/index/users"><i class="fa fa-group"></i><span>Users</span> </a> </li>
        <li <?php if($active==="bookings") { echo "class='active'"; }?>><a href="<?php echo base_url()?>events_admin/index/bookings"><i class="fa fa-rotate-left"></i><span>Booking History</span> </a></li>
        <li <?php if($active==="getLocations") { echo "class='active'"; }?>><a href="<?php echo base_url()?>events_admin/index/getLocations"><i class="fa fa-map-marker"></i><span>Locations</span> </a> </li>
      </ul>
    </div>
  </div>
</div>
