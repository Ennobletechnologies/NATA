<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NATA User Dashboard</title>
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
          <p class="member-tab">Welcome <?php echo $this->session->userdata('user_name'); ?> <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="member-home">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php  foreach ($profile as $key=>$users): ?>
        <div class="panel panel-primary">
          <div class="panel-heading">
              <div id="tabsmenu"><?php echo $users['member_name'];?>
              <a href="<?php echo base_url();?>user/member_edit/<?php echo $users['id'];?>"  class="btn btn-default pull-right" style="
    padding: 3px 13px 4px 11px;">Edit</a></div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Name</td>
                  <td><?php echo $users['username'];?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $users['email'];?></td>
                </tr>
                <tr>
                  <td>Name Of Spouse</td>
                  <td><?php echo $users['name_of_spouse'];?></td>
                </tr>
                <tr>
                  <td>Children</td>
                  <td><?php echo $users['children1'];?></td>
                </tr>
                <tr>
                  <td>Age</td>
                  <td><?php echo $users['age1'];?></td>
                </tr>
                <tr>
                  <td>Children</td>
                  <td><?php echo $users['children2'];?></td>
                </tr>
                <tr>
                  <td>Age</td>
                  <td><?php echo $users['age2'];?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><?php echo $users['address'];?></td>
                </tr>
                <tr>
                  <td>Apt No</td>
                  <td><?php echo $users['aptno'];?></td>
                </tr>
                <tr>
                  <td>City</td>
                  <td><?php echo $users['city'];?></td>
                </tr>
                <tr>
                  <td>State</td>
                  <td><?php echo $users['state'];?></td>
                </tr>
                <tr>
                  <td>Zip</td>
                  <td><?php echo $users['zip'];?></td>
                </tr>
				<tr>
                  <td>Status</td>
				  <td readonly="true">
				  <?php  $status = $users['status']; 
				   if($status==0) {
				  echo "<strong style='color:orange'>Waiting for approval</strong>";
				   }
				   else
				  echo "<strong style='color:green'>Approved</strong>";
				   ?>
				  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="panel-footer"><a href="<?php echo base_url();?>user/member_edit/<?php echo $users['id'];?>"  class="btn btn-success btn-lg" style="
    padding: 3px 13px 4px 11px;">Edit</a>
            <?php
            endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of right content-->
<footer class="text-center">
  <div class="container">
    <div >
      <p>Copyright © 2015 - North American Telugu Association | All rights reserved.</p>
    </div>
    
  </div>
</footer>
</body>
</html>