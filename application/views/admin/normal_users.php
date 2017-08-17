<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="favicon.ico" rel='icon' type='image/x-icon'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Users</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<link href="<?php echo base_url()?>public/admin/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="<?php echo base_url()?>public/admin/js/bootstrap.js"></script>

<script type="text/javascript">
$(function () {
$("#btnShow").click(function(){
$('#demoModal').modal('show');
});
});
</script>
<script>
$(document).ready(function() {
    $('#report').DataTable();
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
            <div class="pull-right"> <a href="<?php echo base_url();?>user/register" class="btn btn-success">+ Add Member</a></div>
          </div>
          <div class="panel-body">
			  
            <table id="report" class="table table-bordered table-striped table-members ">
              <thead>
                <tr>
                  <th width="5%" class="text-center">S.No</th>
                  <th width="20%" class="text-center">User Name</th>
                  <th width="20%" class="text-center">Email</th>
				  <th width="20%" class="text-center">Phone Number </th>
				   <th width="20%" class="text-center">Membership Amount</th>
				   <th width="20%" class="text-center">Status</th>
                  <?php $user_level =  $this->session->userdata('user_level');
                if($user_level!='1'){
                ?>
                  <th width="20%" colspan="2" class="text-center">Action</th>
                  <?php }?>
                </tr>
              </thead> 
              <tbody style="text-align:center">
                <?php $i=1; foreach ($admin_users as $key=>$view_topstory){ ?>
				 <form action="<?php echo base_url(); ?>admin/updateStatus/<?php echo $view_topstory['id']; ?>">
				
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $view_topstory['username']; ?></td>

                  <td><?php echo $view_topstory['email']; ?></td>
				  <td><?php echo $view_topstory['homephone']; ?></td>
				   <td>$<?php echo $view_topstory['total_amt']; ?></td>
				   <td> 
				   <?php  $status = $view_topstory['status']; 
				   if($status==0) {  
				   echo '<button type="button" class="btn btn-info" id="btnShow">Approve</button>
				   <div class="modal fade" id="demoModal"  >
                   <div class="modal-dialog">
                   <div class="modal-content">
                   <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title" id="myModalLabel">Welcome To NATA Admin</h4>
                   </div>
                  <div class="modal-body">Do you want to Approve the membership..?</div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-primary">Yes</button>
                  </div>
                  </div>
                  </div>
                  </div> 
				  
				  ' ;				 
			       } 
				   else {
				   echo "<strong style='color:green'>Approved</strong>";
				   }
				   ?>
				  </td>
				  </form> 
				  
                  <?php $user_level =  $this->session->userdata('user_level');
                if($user_level!='1'){
                ?>
                  <td>
                      <a href="<?php echo base_url(); ?>admin/editMembers/<?php echo $view_topstory['id']; ?>" class="btn-edit"><i class="fa fa-pencil"></i>Edit</a>
                  </td>
                  <td>
                      <a href="<?php echo base_url(); ?>admin/deleteUser/<?php echo $view_topstory['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete <?php echo $view_topstory['username']; ?>? \n Click Ok to confirm!')"><i class="fa fa-trash"></i>Delete</a>
                   <?php }?>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
            </table>
          </div>
          <div class="panel-footer">
            <p>Copyright © 2015 - North American Telugu Association | All rights reserved. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>


<!-- <span id="top-link-block" class="">
    <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="fa fa-chevron-up"></i> Back to Top
    </a>
</span> -->
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