<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NATA Gallery</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/font-awesome/css/font-awesome.css" />
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
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li><a href="<?php echo base_url();?>admin/gallery" class="button green">Gallery</a></li>
              <li class="active">All Albums</li>
            </ol>
            <div class="pull-right"><a href="<?php echo base_url();?>admin/addalbum" class="btn btn-success">+ Create Album</a> <a href="<?php echo base_url(); ?>admin/addBannerImage" class="btn btn-success">+ Add New</a> </div>
          </div>
          <div class="panel-body">
              <?php echo form_open_multipart("admin/addBanner");?>
            <table class="table table-bordered">
                <tr>
                  <td >Select Album</td>
                  <td>
                  
                  <select name="alb_id" class="form-control" >
                      <?php foreach($album as $opt): ?>
                      <option value="<?php echo $opt['id'];?>"><?php echo $opt['name'];?></option>
                      <?php endforeach;?>
                    </select></td>
                </tr>
                <tr>
                  <td>Title</td>
                  <td>
				  <input type="text" name="title" class="form-control" />
				 <!-- <?php echo form_input("title",set_value('title'))?>--></td>
                </tr>
                <tr>
                  <td>Image</td>
                  <td><input name="userfile[]" id="userfile" type="file" multiple="" class="btn btn-default" /></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
				  <input type="submit" name="Upload" class="btn btn-success"/>
				  <!--<?php echo form_hidden("uploadpic",1) ?><?php echo form_submit("Submit","Upload");?>--></td>
                </tr>
              </table>
              <?php echo form_close();?>
            </table>
          </div>
          <div class="panel-footer">
            <p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>