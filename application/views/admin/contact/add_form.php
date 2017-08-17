<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style.css" />
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
{title: 'page_content', content: 'page_content'},
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
    <div class=" col-lg-12 col-md-12"> <?php echo form_open_multipart('admin/insertcontact');?>
<div class="panel panel-primary">
<div class="panel-heading ">
  <ol class="breadcrumb">
  <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
  <li><a class="backtoadmin" href="<?php echo base_url() ?>admin/contact">Contact Us</a></li>
  <li class="active">Contact Us</li>
</ol>
  <div class="pull-right">
  <input type="hidden" name="published_on" value="<?php if (isset($all_pages_data['published_on']) != '')
			echo $all_pages_data['published_on'];
			else
			echo date('d D M,Y')
			?>" id="published_on"/>
  <input type="submit" class="btn btn-success" name="submit" value="<?php if (isset($all_pages_data['page_id']) != '')
			echo 'Update';
			else
			echo 'Save';
			?>" />
  <input type="hidden" name="pst_id" value="<?php if (isset($all_pages_data['page_id']) != '') echo $all_pages_data['page_id']; ?>" />
</div>
</div>
<div class="panel-body">
  <table class="table table-bordered">
  <tr>
<td>Title</td>
<td><input type="text" name="page_title" value="<?php if (isset($all_pages_data['page_title']) != '')
			echo $all_pages_data['page_title'];
			else
			echo set_value('page_title');
			?>" class="form-control" />
<span class="required"><?php echo form_error('page_title'); ?></span></td>
    </tr>
  <tr>
<td>Description:</td>
<td><textarea name="page_content" id="page_content" cols="55" rows="10"><?php if (isset($all_pages_data['page_content']) != '') echo $all_pages_data['page_content']; ?>
</textarea>
<span class="required"><?php echo form_error('page_content'); ?></span></td>
    </tr>
  <tr>
<td></td>
<td><input type="hidden" name="published_on" value="<?php if (isset($all_pages_data['published_on']) != '')
			echo $all_pages_data['published_on'];
			else
			echo date('d D M,Y')
			?>" id="published_on"/>
<input type="submit" class="btn btn-success" name="submit" value="<?php if (isset($all_pages_data['page_id']) != '')
			echo 'Update';
			else
			echo 'Save';
			?>" />
<input type="hidden" name="pst_id" value="<?php if (isset($all_pages_data['page_id']) != '') echo $all_pages_data['page_id']; ?>" /></td>
    </tr>
</table>
</div>
<div class="panel-footer">
  <p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p>
</div>
</div>
<?php echo form_close(); ?> </div>
  </div>
  </div>
</section>
</body>
</html>