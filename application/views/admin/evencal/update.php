<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
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
        </div>
      </div>
    </div>
  </div>
</header>
<section class="member-home">
  <div class="container">
    <div class="row">
      <div class="col-md-12">  <?php echo form_open_multipart('admin/evencalImg'); ?>
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li><a href="<?php echo base_url() ?>admin/admincal">Calender</a></li>
              <li class="active">Update data/Add Image</li>
            </ol>
            <div class="pull-right"><input type="submit" class="btn btn-success" name="submit" value="Submit" /></div>
          </div>
          <div class="panel-body">
          <table class="table table-bordered">
            <?php foreach ($eventdata as $edata):?>
            <tr>
              <td>Title</td>
              <td><?php echo form_input(array("name"=>'event_title',"value"=>$edata['event_title'])); ?></td>
            </tr>
            <tr>
              <td>Description:</td>
              <td><?php echo form_textarea(array("name"=>'event',"id"=>'area2',"value"=>stripslashes(str_replace(array('\n','\r'),' ',$edata['event'])))); ?></td>
            </tr>
            <tr>
              <td>Pic:</td>
              <td><?php echo form_upload('image'); ?></td>
              <?php //echo form_error('image'); ?>
              <input type="hidden" name="idevent" id="idevent" value="<?php echo $this->session->userdata('idevent');?>">
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" class="btn btn-success" name="submit" value="Submit" /></td>
            </tr>
            <?php endforeach?>
          </table></div>
        </div>        
          <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</section>
</body>
</html>