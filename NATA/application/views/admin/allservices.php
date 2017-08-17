<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NATA Services</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" />
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-4">
        <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive"/></a> </div>
      </div>
      <div class="col-md-6 col-xs-8">
        <div class="navbar-right">
          <p class="member-tab">Welcome <?php echo $this->session->userdata('user_name'); ?> <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a> </p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="member-home">
  <div class="container">
    <div class="row">
      <div class=" col-lg-12 col-md-12">
        <?php echo form_open_multipart('admin/insertnews'); ?>
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Services</li>
            </ol>
            <div class="pull-right"><a href="<?php echo base_url();?>admin/addservices" class="btn btn-success">+ Add Services</a>
            </div>
          </div>
          <div class="panel-body"> 
        <table class="table table-bordered">
          <thead>
            <tr>
              <th width="5%" >S.No</th>
              <th width="60%" >Title</th>
              <th width="10%" >Image</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1; foreach ($services as $key=>$view_topstory){ ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $view_topstory['services_title']; ?></td>
              <td><img src="<?php echo base_url(); ?>public/services/<?php echo $view_topstory['services_img']; ?>" width="100" /></td>
              <td><a href="<?php echo base_url(); ?>admin/EditServices/<?php echo $view_topstory['services_id']; ?>" class="btn-edit"><i class="fa fa-pencil"></i>Edit</a></td>
              
              <td><a href="<?php echo base_url(); ?>admin/DeleteServices/<?php echo $view_topstory['services_id']; ?>" class="btn-delete"><i class="fa fa-trash"></i>Delete</a></td> 
            </tr>
            <?php $i++; } ?>
            <tr>
              <td colspan="4"><?php echo $pagination;?></td>
            </tr>
          </tbody>
        </table>
      </div>
    <div class="panel-footer"><p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p></div>
  </div>
  <!--end of center_content--> 
  
</div>
</body>
</html>