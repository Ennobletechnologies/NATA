<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Sponsers</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
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
    <div class="col-md-12"><?php echo form_open_multipart("admin/addSponsersImage");?>
      <div class="panel panel-primary">
        <div class="panel-heading ">
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>admin">Back to Admin</a></li>
            <li><a href="<?php echo base_url() ?>admin/sponsers">List of Sponsors</a></li>
            <li class="active">Add Sponsors</li>
          </ol>
          <div class="pull-right">
            <input type="submit" name="Upload" value="Upload" class="btn btn-success" />
          </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <tr>
              <td>Image</td>
              <td><?php echo form_upload("spn_image")?></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="Upload" value="Upload" class="btn btn-success" /></td>
            </tr>
          </table>
        </div>
        <div class="panel-footer">
          <p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p>
        </div>
      </div>
      <?php echo form_close();?> </div>
  </div>
</div>
</body>
</html>