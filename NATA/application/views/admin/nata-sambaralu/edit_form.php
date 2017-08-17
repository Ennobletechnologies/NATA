<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Update Nata Sambaralu</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/font-awesome/css/font-awesome.css" />
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
              <div class=" col-lg-12 col-md-12"> <?php echo form_open_multipart('admin/updatenata_sambaralu'); ?>
        <div class="panel panel-primary">
                  <div class="panel-heading ">
            <ol class="breadcrumb">
                      <li><a href="<?php echo base_url() ?>admin">Back to Admin</a></li>
                      <li><a href="<?php echo base_url() ?>admin/nata_sambaralu">Nata Sambaralu</a></li>
                      <li class="active">Edit Nata Sambaralu</li>
                    </ol>
            <div class="pull-right"> <input type="submit" class="btn btn-success" name="submit" value="<?php if(isset($nsambaralu_data['ns_id']) !='') echo 'Update'; ?>" /></div>
          </div>
                  <div class="panel-body">
            <table class="table table-bordered">
                      <tr>
                <td>Nata Sambaralu Title</td>
                <td><input type="text" name="ns_title" value="<?php if(isset($nsambaralu_data['ns_title']) !='') echo $nsambaralu_data['ns_title']; ?>"/>
                          <span class="required"><?php echo form_error('ns_title'); ?></span></td>
              </tr>
                      <tr>
                <td>Nata Sambaralu Description:</td>
                <td><?php echo form_textarea(array("name"=>'ns_desc',"id"=>'area2',"value"=>stripslashes(str_replace(array('\n','\r'),' ',$nsambaralu_data['ns_desc'])))); ?><span class="required"><?php echo form_error('ns_desc'); ?></span></td>
              </tr>
                      <tr>
                <td>Picture</td>
                <td><input type="text" name="ns_image" id="ns_image"/>
                          (If you want to change image,provide Youtube URL)</td>
                <td></td>
              </tr>
                      <tr>
                <td><input type="hidden" name="published_on" value="<?php if(isset($nsambaralu_data['published_on']) !='') echo $nsambaralu_data['published_on']; ?>" /></td>
                <td><input type="hidden" name="pst_id" value="<?php if(isset($nsambaralu_data['ns_id']) !='') echo $nsambaralu_data['ns_id'];?>"/>
                          <input type="submit" class="btn btn-success" name="submit" value="<?php if(isset($nsambaralu_data['ns_id']) !='') echo 'Update'; ?>" /></td>
                <td></td>
              </tr>
                    </table>
          </div>
                </div>
        <?php echo form_close(); ?> </div>
            </div>
  </div>
        </section>
</body>
</html>