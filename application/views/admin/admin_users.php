<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
</head>
<body>
<div id="">
  	
	<div class="header">
   <div class="title"><a href="<?php echo base_url()?>admin/index"><img src="<?php echo base_url()?>public/admin/images/logo.png"/></a></div>
    
    <div class="header_right">Welcome Admin, <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a><br><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a> </div>
    
    </div>
    
    <div class="submenu">
    
    </div>          
                    
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <div style="float:left; width:100%; background:#bad7e6;
    
    -moz-border-radius-topleft:6px;
    -webkit-border-top-left-radius:6px;
    -khtml-border-top-left-radius:6px;
    border-top-left-radius:6px;
-moz-border-radius-topt:6px;
-webkit-border-top-right-radius:6px;
-khtml-border-top-right-radius:6px;
border-top-right-radius:6px;">
<span class="form_sub_buttons">
	<a href="<?php echo base_url();?>admin/addUser" class="button green">+ Add Admin User</a>
   
    </span><div style="float:left; height:auto; width:200px;"><h2>Users</h2></div></div>
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
            <th width="21%">SNo</th>
            <th width="41%">User Name</th>
            <th width="10%">Email</th>
            <th width="40%">Action</th>
        </tr>
    </thead>
    <tbody>
    
    	<?php $i=1; foreach ($admin_users as $key=>$view_topstory){ ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $view_topstory['username']; ?></td>
<td><?php echo $view_topstory['email']; ?></td>
<td><a href="<?php echo base_url(); ?>admin/editUsers/<?php echo $view_topstory['id']; ?>">Edit</a></td>
<td><a href="#<?php echo base_url(); ?>admin/deleteUser/<?php echo $view_topstory['id']; ?>">Delete</a></td>
</tr>
<?php $i++; } ?>
    	
    </tbody>
</table>

	
    </div>
     </div><!-- end of right content-->
                     
    
    <div class="clear"></div>
    </div> <!--end of center_content-->
    

</div>

    	
</body>
</html>