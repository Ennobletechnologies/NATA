<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Message</li>
            </ol>
            <div class="pull-right"> <a href="<?php echo base_url();?>admin/add_new_msg" class="btn btn-success">+ Add New</a></div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="5%" >S.No</th>
                  <th width="60%" >Title</th>
                  <th width="10%" >Image</th>
                  <th colspan="2" >Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($msg as $key=>$message){ ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $message['title']; ?></td>
                  <?php if($message['image']){?>
                  <td><img src="<?php echo base_url(); ?>public/News/<?php echo $message['image']; ?>" width="100" /></td>
                  <?php }?>
                  <td style="vertical-align:middle"><a href="<?php echo base_url(); ?>admin/EditMsg/<?php echo $message['id']; ?>" class="btn-edit"><i class="fa fa-edit"></i>Edit</a></td>
                </tr>
                <?php $i++; } ?>
              </tbody>
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