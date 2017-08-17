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
          <li> <a href="<?php echo base_url(); ?>admin/createmember"><i class="fa fa-pencil-square-o fa-3x "></i><b>Create Member Access User</b></a> </li>
          <li> <a href="<?php echo base_url(); ?>admin/members_access"><i class="fa fa-user fa-3x"></i><b>Show User List</b></a> </li>
    	  
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