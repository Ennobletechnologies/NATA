<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NATA Services</title>
<script type="text/javascript" src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
   selector: "textarea",
   theme: "modern",
   plugins: [
       "advlist autolink lists link image charmap print preview hr anchor pagebreak",
       "searchreplace wordcount visualblocks visualchars code fullscreen",
       "insertdatetime media nonbreaking save table contextmenu directionality",
       "emoticons template paste textcolor colorpicker textpattern"
   ],
   toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
   toolbar2: "print preview media | forecolor backcolor emoticons",
   image_advtab: true,
   templates: [
       {title: 'Test template 1', content: 'Test 1'},
       {title: 'Test template 2', content: 'Test 2'}
   ]
});
</script>
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
        <?php foreach ($edit_services as $key=>$services); ?>
        <?php echo form_open_multipart('admin/updateServices'); ?>
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li><a href="javascript: window.history.back()">Services</a></li>
              <li class="active">Edit Services</li>
            </ol>
            <div class="pull-right">
              <input type="hidden" name="region" value="default" id="region">
              <input type="submit" class="btn btn-success" name="submit" value="+ Add Services" />
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <tr>
                <td>Title</td>
                <td><?php echo form_input(array("name"=>'services_title',"value"=>$services['services_title'])); ?> <span class="required"><?php echo form_error('services_title'); ?></span></td>
              </tr>
              <tr>
                <td>Description:</td>
                <td><?php echo form_textarea(array("name"=>'services_description',"id"=>'area2',"value"=>stripslashes(str_replace(array('\n','\r'),' ',$services['services_desc'])))); ?> <span class="required"><?php echo form_error('services_description'); ?></span></td>
              </tr>
              <tr>
                <td>News Picture:</td>
                <td><?php echo form_upload('servicespic'); ?></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="hidden" name="servicesid" value="<?php echo $services['services_id']; ?>" />
                  <input type="submit" class="form_submit" name="submit" value="Submit" /></td>
              </tr>
            </table>
            <?php echo form_close(); ?>
            <div class="clear"></div>
          </div>
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