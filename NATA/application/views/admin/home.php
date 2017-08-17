<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="favicon.ico" rel='icon' type='image/x-icon'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NATA</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" />
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-4">
        <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url();?>admin"><img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive"/></a> </div>
      </div>
      <div class="col-md-6 col-xs-8">
        <div class="navbar-right">
          <p class="member-tab">Welcome <?php echo $this->session->userdata('user_name'); ?> <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="member-home">
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4><i class="fa fa-dashboard">&nbsp; &nbsp;</i><?php echo $this->session->userdata('user_name'); ?> Dashboard</h4>
      </div>
      <div class="panel-body dashboard">
        <?php 
        $user_level=$this->session->userdata("user_level");
        if($user_level == '1' || $user_level == '6'){
        ?>  
        <ul class="list-inline list-unstyled">
          <li><a href="<?php echo base_url() ?>admin/sliders"><i class="fa fa-image fa-3x "></i> <b>Sliders</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/news"><i class="fa fa-newspaper-o fa-3x "></i><b>News</b></a></li>
          <li><a href="<?php echo base_url();?>admin/newsletter"><i class="fa fa-envelope-o fa-3x "></i><b>News Letter</b></a></li>
          <li><a href="<?php echo base_url()?>admin/tvcoverage"><i class="fa fa-video-camera fa-3x "></i><span><b>TV Coverage</b></a></li>
          <li><a href="<?php echo base_url()?>admin/printcoverage"><i class="fa fa-file-video-o fa-3x "></i><b>Print Coverage</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/services"><i class="fa fa-ambulance fa-3x "></i><b>Services</b></a></li>
          <li><a href="<?php echo base_url() ?>admin/gallery"><i class="fa fa-image fa-3x "></i><b>Gallery</b></a></li>
          <li><a href="<?php echo base_url() ?>admin/videos"><i class="fa fa-film fa-3x"></i><b>Videos</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/admincal"><i class="fa fa-calendar fa-3x "></i><b>Event Calender</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/editAbout/1"><i class="fa fa-info-circle fa-3x "></i><b>About Nata</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/EditPolicies/2"><i class="fa fa-file-text fa-3x"></i><b>Policies</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/editChangeOfAdd"><i class="fa fa-map-marker fa-3x"></i><b>Change Of Address</b></span></a></li>
          <li><a href="<?php echo base_url(); ?>admin/message"><i class="fa fa-bullhorn fa-3x"></i><b>President Message</b></span></a></li>
          <li> <a href="<?php echo base_url(); ?>admin/members"><i class="fa fa-users fa-3x"></i><b>Members</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/sponsers/"><i class="fa fa-usd fa-3x"></i><b>Sponsers</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/projects"><i class="fa fa-line-chart fa-3x"></i><b>Projects</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/contact"><i class="fa fa-phone-square fa-3x"></i><b>Contact NATA</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/nata_sambaralu"><i class="fa fa-newspaper-o fa-3x"></i><b>Nata Samburalu</b></a></li>
          <li><a href="<?php echo base_url(); ?>admin/fund_raising"><i class="fa fa-cc-mastercard fa-3x"></i><b>Fund Raising</b></a></li>
          <li> <a href="<?php echo base_url(); ?>admin/nata_seva_days"><i class="fa fa-newspaper-o fa-3x"></i><b>Nata Sevadays</b></a></li>
          <li> <a href="<?php echo base_url(); ?>admin/nata_mata"><i class="fa fa-newspaper-o fa-3x"></i><b>Nata Maata</b></a> </li>
          <li> <a href="<?php echo base_url(); ?>admin/editAboutMembership"><i class="fa fa-info-circle fa-3x "></i><b>About Membership</b></a> </li>
          <li> <a href="<?php echo base_url(); ?>admin/editMemberBenfits"><i class="fa fa-gift fa-3x "></i><b>Membership Benefits</b></a> </li>
          <li> <a href="<?php echo base_url(); ?>admin/telugu"><i class="fa fa-language fa-3x "></i><b>Telugu news paper</b></a> </li>
          <li> <a href="<?php echo base_url(); ?>admin/getreport"><i class="fa fa-list-ul fa-3x "></i><b>Get Members report</b></a> </li>
          <li> <a href="<?php echo base_url(); ?>admin/getdonreport"><i class="fa fa-credit-card fa-3x"></i><b>Get Donations report</b></a> </li>
    	  <li> <a href="<?php echo base_url(); ?>admin/memberaccess"><i class="fa fa-user fa-3x"></i><b>Give member access</b></a> </li>
    	 
       </ul>
        <?php }else{ ?>
          <ul class="list-inline list-unstyled"> 
          <li> <a href="<?php echo base_url(); ?>admin/getreport"><i class="fa fa-list-ul fa-3x "></i><b>Get Members report</b></a> </li>
         </ul>
        <?php }?>
      </div>
      <div class="panel-footer">
        <p>Copyright © 2015 - North American Telugu Association | All rights reserved.</p>
          
    </div>
  </div>
  </div>
</section>
</body>
</html>