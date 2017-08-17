<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Edit Member Benefits</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
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
<section class="member-home" id="top">
  <div class="container">
    <div class="row">
      <div class=" col-lg-12 col-md-12">
        <?php foreach ($membenfits as $key=>$rec_topstory); ?>
        <?php echo form_open_multipart('admin/updateMemberBenfits'); ?>
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Edit Member Benefits</li>
            </ol>
            <div class="pull-right">
              <input type="submit" class="btn btn-success" name="submit" value="Submit" />
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <tr>
                <td>Title</td>
                <td><?php echo form_input(array("name"=>'title',"value"=>$rec_topstory['mb_title'])); ?> <?php echo form_error('title'); ?></td>
              </tr>
              <tr>
                <td>Description:</td>
                <td><?php echo form_textarea(array("name"=>'body',"id"=>'area2',"class"=>'wide-content',"value"=>stripslashes(str_replace(array('\n','\r'),' ',$rec_topstory['mb_body'])))); ?> <?php echo form_error('body'); ?></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="hidden" name="id" value="<?php echo $rec_topstory['mb_id']; ?>" />
                  <input type="submit" class="btn btn-success" name="submit" value="Submit" /></td>
                <td></td>
              </tr>
            </table>
          </div>
          <div class="panel-footer">
            <p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p>
          </div>
        </div>
        <?php echo form_close(); ?></div>
    </div>
  </div>
</section>
</body>
</html>