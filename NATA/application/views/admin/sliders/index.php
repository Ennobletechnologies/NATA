<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nata Sliders</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
    function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>
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
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Sliders</li>
            </ol>
            <div class="pull-right"> <a href="<?php echo base_url(); ?>admin/addSliders" class="btn btn-success">+ Add New</a></div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="4%">S.No</th>
                  <th width="50%">Image</th>
                  <th width="10%">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1;
	//foreach ($banner as $key =>$value ) {echo $banner[$key]['banner_title'];}
    foreach ($sliders as $key =>$value )
    {
    	?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><img src="<?php echo base_url()?>uploads/<?php echo $value['filename']?>" width="200" height="70" /></td>
                  <td><a href="<?php echo base_url()?>admin/deleteSlider/<?php echo $value['id'];?>" class="btn-delete"> <i class="fa fa-trash"></i>Delete</a></td>
                </tr>
                <?php 
    $i++; }
    ?>
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