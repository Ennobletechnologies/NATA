<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
<script type="text/javascript" src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css"/>
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
          <p class="member-tab">Welcome <?php echo $this->session->userdata('user_name'); ?> <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="member-home">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php foreach ($editUsers as $key=>$users); ?> 
      <?php echo form_open_multipart('admin/updateMembersAccess'); ?>
      <div class="panel panel-primary">
        <div class="panel-heading ">
          <ol class="breadcrumb">
            <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
            <li class="active">Edit Profile</li>
          </ol>
          <div class="pull-right">
            <input type="submit" class="btn btn-success" name="submit" value="Submit" />
          </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <tr>
              <td width="50%">Name</td>
              <td><?php echo form_input(array("name"=>'username',"value"=>$users['username'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('username'); ?></span></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><?php echo form_input(array("name"=>'password',"value"=>$users['password'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('password'); ?></span></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo form_input(array("name"=>'email',"value"=>$users['email'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('email'); ?></span></td>
            </tr>
            <tr>
              <td>Name of Spouse</td>
              <td><?php echo form_input(array("name"=>'name_of_spouse',"value"=>$users['name_of_spouse'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('name_of_spouse'); ?></span></td>
            </tr>
            <tr>
              <td>Children1</td>
              <td><?php echo form_input(array("name"=>'children1',"value"=>$users['children1'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('children1'); ?></span></td>
            </tr>
            <tr>
              <td>Age</td>
              <td><?php echo form_input(array("name"=>'age1',"value"=>$users['age1'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('age1'); ?></span></td>
            </tr>
            <tr>
              <td>Children2</td>
              <td><?php echo form_input(array("name"=>'children2',"value"=>$users['children2'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('children2'); ?></span></td>
            </tr>
            <tr>
              <td>Age</td>
              <td><?php echo form_input(array("name"=>'age2',"value"=>$users['age2'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('age2'); ?></span></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><?php echo form_input(array("name"=>'address',"value"=>$users['address'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('address'); ?></span></td>
            </tr>
            <tr>
              <td>AptNo</td>
              <td><?php echo form_input(array("name"=>'aptno',"value"=>$users['aptno'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('aptno'); ?></span></td>
            </tr>
            <tr>
              <td>City</td>
              <td><?php echo form_input(array("name"=>'city',"value"=>$users['city'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('city'); ?></span></td>
            </tr>
            <tr>
              <td>State</td>
              <td><?php echo form_input(array("name"=>'state',"value"=>$users['state'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('state'); ?></span></td>
            </tr>
            <tr>
              <td>Zip</td>
              <td><?php echo form_input(array("name"=>'zip',"value"=>$users['zip'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('zip'); ?></span></td>
            </tr>
            <tr>
              <td>Cellphone</td>
              <td><?php echo form_input(array("name"=>'cellphone',"value"=>$users['cellphone'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('cellphone'); ?></span></td>
            </tr>
            <tr>
              <td>Apt No</td>
              <td><?php echo form_input(array("name"=>'aptno',"value"=>$users['aptno'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('aptno'); ?></span></td>
            </tr>
            <tr>
              <td>City</td>
              <td><?php echo form_input(array("name"=>'city',"value"=>$users['city'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('city'); ?></span></td>
            </tr>
            <tr>
              <td>State</td>
              <td><?php echo form_input(array("name"=>'state',"value"=>$users['state'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('state'); ?></span></td>
            </tr>
            <tr>
              <td>Zip</td>
              <td><?php echo form_input(array("name"=>'zip',"value"=>$users['zip'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('zip'); ?></span></td>
            </tr>
            <tr>
              <td>Homephone</td>
              <td><?php echo form_input(array("name"=>'homephone',"value"=>$users['homephone'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('homephone'); ?></span></td>
            </tr>
            <tr>
              <td>Cellphone</td>
              <td><?php echo form_input(array("name"=>'cellphone',"value"=>$users['cellphone'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('cellphone'); ?></span></td>
            </tr>
            <tr>
              <td>Fax</td>
              <td><?php echo form_input(array("name"=>'fax',"value"=>$users['fax'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('fax'); ?></span></td>
            </tr>
            <tr>
              <td>Solicited By</td>
              <td><?php echo form_input(array("name"=>'solicited_by',"value"=>$users['solicited_by'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('solicited_by'); ?></span></td>
            </tr>
            <tr>
              <td>Member Category</td>
              <td><?php echo form_input(array("name"=>'member_cat',"value"=>$users['member_cat'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('member_cat'); ?></span></td>
            </tr>
            <tr>
              <td>Membership Amount</td>
              <td><?php echo form_input(array("name"=>'memship_amt',"value"=>$users['memship_amt'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('memship_amt'); ?></span></td>
            </tr>
            <tr>
              <td>Donation towards NATA 
                Community and Charitable Activities: </td>
              <td><?php echo form_input(array("name"=>'donation',"value"=>$users['donation'],"class"=>"form-control")); ?>
              <span class="required"><?php echo form_error('donation'); ?></span></td>
            </tr>
            <tr>
              <td>Total amount enclosed:</td>
              <td><?php echo form_input(array("name"=>'total_amt',"value"=>$users['total_amt'],"class"=>"form-control")); ?>
             <span class="required"><?php echo form_error('total_amt'); ?></span></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="hidden" name="user_id" value="<?php echo $users['id']; ?>" />
                <input type="submit" class="btn btn-success" name="submit" value="Submit" /></td>
            </tr>
          </table>
          <div class="clear"></div>
        </div>
        <div class="panel-footer">
          <p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p>
        </div>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
  <!-- end of right content-->
  
  <div class="clear"></div>
</div>
<!--end of center_content-->

</div>
</body>
</html>