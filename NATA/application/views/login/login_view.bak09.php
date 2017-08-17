<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="favicon.ico" rel='icon' type='image/x-icon'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nata Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />

</head>
<body>
<div id="loginpanelwrap">
  	
	<div class="loginheader">
    <!--<div class="logintitle"><a href="#"><img src="<?php echo base_url()?>public/admin/images/logo.png"  style="margin-left:55px;" /></a></div>-->
    </div>

     
    <div class="loginform">


<div class="signin_form" style="float:left;margin: 10px 4px;">
<table>
<form action="<?php echo base_url()?>user/login" method="post">
		<tr><td><label for="email">Email:</label></td>
    	<td><input type="text" id="email" name="email" value="" /></td></tr>
	    <tr><td><label for="pass">Password:</label>
		<td><input type="password" id="pass" name="pass" value="" /></tr>
       <tr> <td></td><td><input type="submit" class="" value="Sign in" /></tr>
    <?php echo form_close(); ?>
	
	
</table>
</div><!--<div class="signin_form">-->
 <div class="clear"></div>
    </div>
 

</div>

    	
</body>
</html>