<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css"/>
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
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary ">
          <div class="panel-heading"> Edit <?php echo $this->session->userdata('user_name'); ?> Profile<a href="<?php echo base_url();?>user/welcome" class="btn pull-right dashboard-btn">Back To Dashboard</a></div>
          <div class="panel-body">
            <?php foreach ($profile as $key=>$users); ?>
            <?php echo form_open_multipart('user/member_update'); ?>
            <table class=" table table" >
              <tr>
                <td>Name</td>
                <td><?php echo form_input(array("name"=>'username',"value"=>$users['username'],"class"=>'form-control')); ?><?php echo form_error('username'); ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo form_input(array("name"=>'email',"value"=>$users['email'],"readonly"=>'true',"class"=>'form-control')) ?> <?php echo form_error('email'); ?></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><?php echo form_input(array("name"=>'password',"value"=>$users['pw_decode'],"readonly"=>'true',"class"=>'form-control')); ?> <?php echo form_error('password'); ?></td>
              </tr>
              <tr>
                <td>Name of Spouse</td>
                <td><?php echo form_input(array("name"=>'name_of_spouse',"value"=>$users['name_of_spouse'],"class"=>'form-control')); ?> <?php echo form_error('name_of_spouse'); ?></td>
              </tr>
              <tr>
                <td>Children1</td>
                <td><?php echo form_input(array("name"=>'children1',"value"=>$users['children1'],"class"=>'form-control')); ?> <?php echo form_error('children1'); ?></td>
              </tr>
              <tr>
                <td>Age</td>
                <td><?php echo form_input(array("name"=>'age1',"value"=>$users['age1'],"class"=>'form-control')); ?> <?php echo form_error('age1'); ?></td>
              </tr>
              <tr>
                <td>Children2</td>
                <td><?php echo form_input(array("name"=>'children2',"value"=>$users['children2'],"class"=>'form-control')); ?> <?php echo form_error('children2'); ?></td>
              </tr>
              <tr>
                <td>Age</td>
                <td><?php echo form_input(array("name"=>'age2',"value"=>$users['age2'],"class"=>'form-control')); ?> <?php echo form_error('age2'); ?></td>
              </tr>
              <tr>
                <td>Address</td>
                <td><?php echo form_input(array("name"=>'address',"value"=>$users['address'],"class"=>'form-control')); ?> <?php echo form_error('address'); ?></td>
              </tr>
              <tr>
                <td>AptNo</td>
                <td><?php echo form_input(array("name"=>'aptno',"value"=>$users['aptno'],"class"=>'form-control')); ?> <?php echo form_error('aptno'); ?></td>
              </tr>
              <tr>
                <td>City</td>
                <td><?php echo form_input(array("name"=>'city',"value"=>$users['city'],"class"=>'form-control')); ?> <?php echo form_error('city'); ?></td>
              </tr>
              <tr>
                <td>State</td>
                <td><?php echo form_input(array("name"=>'state',"value"=>$users['state'],"class"=>'form-control')); ?> <?php echo form_error('state'); ?></td>
              </tr>
              <tr>
                <td>Zip</td>
                <td><?php echo form_input(array("name"=>'zip',"value"=>$users['zip'],"class"=>'form-control')); ?> <?php echo form_error('zip'); ?></td>
              </tr>
              <tr>
                <td>Mobile phone</td>
                <td><?php echo form_input(array("name"=>'cellphone',"value"=>$users['cellphone'],"class"=>'form-control')); ?> <?php echo form_error('cellphone'); ?></td>
              </tr>
              <tr>
                <td>Apt No</td>
                <td><?php echo form_input(array("name"=>'aptno',"value"=>$users['aptno'],"class"=>'form-control')); ?> <?php echo form_error('aptno'); ?></td>
              </tr>
              <tr>
                <td>City</td>
                <td><?php echo form_input(array("name"=>'city',"value"=>$users['city'],"class"=>'form-control')); ?> <?php echo form_error('city'); ?></td>
              </tr>
              <tr>
                <td>State</td>
                <td><?php echo form_input(array("name"=>'state',"value"=>$users['state'],"class"=>'form-control')); ?> <?php echo form_error('state'); ?></td>
              </tr>
              <tr>
                <td>Zip</td>
                <td><?php echo form_input(array("name"=>'zip',"value"=>$users['zip'],"class"=>'form-control')); ?> <?php echo form_error('zip'); ?></td>
              </tr>
              <tr>
                <td>Home Phone</td>
                <td><?php echo form_input(array("name"=>'homephone',"value"=>$users['homephone'],"class"=>'form-control')); ?> <?php echo form_error('homephone'); ?></td>
              </tr>
              <tr>
                <td>Mobile phone</td>
                <td><?php echo form_input(array("name"=>'cellphone',"value"=>$users['cellphone'],"class"=>'form-control')); ?> <?php echo form_error('cellphone'); ?></td>
              </tr>
              <tr>
                <td>Fax</td>
                <td><?php echo form_input(array("name"=>'fax',"value"=>$users['fax'],"class"=>'form-control')); ?> <?php echo form_error('fax'); ?></td>
              </tr>
              <tr>
                <td>Solicited By</td>
                <td><?php echo form_input(array("name"=>'solicited_by',"value"=>$users['solicited_by'],"readonly"=>'true',"class"=>'form-control')); ?> <?php echo form_error('solicited_by'); ?></td>
              </tr>
              <tr>
                <td>Member Category</td>
                <td><?php echo form_input(array("name"=>'member_cat',"value"=>$users['member_cat'],"readonly"=>'true',"class"=>'form-control')); ?> <?php echo form_error('member_cat'); ?></td>
              </tr>
              <tr>
                <td>Membership Amount</td>
                <td><?php echo form_input(array("name"=>'memship_amt',"value"=>$users['memship_amt'],"readonly"=>'true',"class"=>'form-control')); ?> <?php echo form_error('memship_amt'); ?></td>
              </tr>
              <tr>
                <td>Donation towards NATA Community and Charitable Activities: </td>
                <td><?php echo form_input(array("name"=>'donation',"value"=>$users['donation'],"readonly"=>'true',"class"=>'form-control')); ?> <?php echo form_error('donation'); ?></td>
              </tr>
              <tr>
                <td>Total amount enclosed:</td>
                <td><?php echo form_input(array("name"=>'total_amt',"value"=>$users['total_amt'],"readonly"=>'true',"class"=>'form-control')); ?> <?php echo form_error('total_amt'); ?></td>
              </tr>
            </table>
          </div>
          <div class="panel-footer">
            <input type="hidden" name="user_id" value="<?php echo $users['id']; ?>" />
            <input type="submit" class="form_submit btn  btn-success" name="submit" value="Save" />
            <?php echo form_close(); ?> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="text-center">
  <div class="container">
    <div class="col-md-6">
      <p>Copyright © 2015 - North American Telugu Association | All rights reserved.</p>
    </div>
    <div class="col-md-6">
      <p>Designed and Developed by Infogen Software Inc</p>
    </div>
  </div>
</footer>
</body>
</html>