<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="favicon.ico" rel='icon' type='image/x-icon'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Users</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
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
<section class="member-home"  id="top">
  <div class="container">
    <div class="row">
      <div class=" col-lg-12 col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Members List</li>
            </ol>
            <div class="pull-right"> <a href="<?php echo base_url();?>admin/createmember" class="btn btn-success">+ Add Member</a></div>
          </div>
          <div class="panel-body">
            <table id="example" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="5%" class="text-center">S.No</th>
                  <th width="30%" class="text-center">User Name</th>
                  <th width="30%" class="text-center">Email</th>
				  <th width="20%" class="text-center">Edit </th>
				  <th width="20%" class="text-center">Delete </th>
                  <?php $user_level =  $this->session->userdata('user_level');
                if($user_level!='1'){
                ?>
                  <th width="20%" colspan="2" class="text-center">Action</th>
                  <?php }?>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach ($admin_users as $key=>$view_topstory){ ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $view_topstory['username']; ?></td>
                  <td><?php echo $view_topstory['email']; ?></td>
                  <?php $user_level =  $this->session->userdata('user_level');
                if($user_level=='1'){
                ?>
                  <td>
                      <a href="<?php echo base_url(); ?>admin/editMembersAccess/<?php echo $view_topstory['id']; ?>" class="btn-edit"><i class="fa fa-pencil"></i>Edit</a>
                  </td>
                  <td>
                      <a href="<?php echo base_url(); ?>admin/deleteMemberAccess/<?php echo $view_topstory['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete <?php echo $view_topstory['username']; ?>? \n Click Ok to confirm!')"><i class="fa fa-trash"></i>Delete</a>
                   <?php }?>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
            </table>
          </div>
          <div class="panel-footer">
            <p>Copyright © 2015 - North American Telugu Association | All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<span id="top-link-block" class="">
    <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="fa fa-chevron-up"></i> Back to Top
    </a>
</span>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


<script type="text/javascript">
// Only enable if the document has a long scroll bar
// Note the window height + offset
if ( ($(window).height() + 100) < $(document).height() ) {
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: {top:100}
    });
}
</script>
</body>
</html>