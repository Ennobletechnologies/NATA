<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>About Nata</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" />
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<script type="text/javascript" src="../../nicEdit-latest.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {

		    new nicEditor({fullPanel : true}).panelInstance('area2');
});
</script>-->
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
<style type="text/css">
.wide-content {
	width: 1000px !important;
}
</style>
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
              <li><a href="<?php echo base_url() ?>admin/editAbout/1">Edit About Us</a></li>
              <li class="active">About NATA</li>
            </ol>
            
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
<div id="panelwrap">

  <div class="center_content">
    <table class="table table-bordered">
      <thead>
        <tr>
        <td width="15%"></td>
          <th width="10%" >S.No</th>
          <th width="50%" >Title</th>
          <th width="30%" >Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; foreach ($view_topstory as $key=>$view_topstory){ ?>
        <tr>
        <td><a href="<?php echo base_url()?>admin/index"><img src="<?php echo base_url()?>public/admin/images/logo.png" class="img-responsive"/></a></td>
          <td style="vertical-align:middle; text-align:center"><?php echo $i; ?></td>
          <td style="vertical-align:middle; text-align:center"><?php echo $view_topstory['title']; ?></td>
          <td style="vertical-align:middle; text-align:center"><a href="<?php echo base_url(); ?>admin/editAbout/<?php echo $view_topstory['id']; ?>" class="btn-edit"><i class="fa fa-edit"></i>Edit</a></td>
          
          <!--<td><a href="<?php echo base_url(); ?>admin/DeleteTopstory/<?php echo $view_topstory['id']; ?>">Delete</a></td>--> 
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
</body>
</html>
