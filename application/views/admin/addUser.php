<style type="text/css">
.error
{
color:red;
}
</style>
<div id="content" style="float:left;margin: 10px 4px;">
<div class="signup_wrap">
</div><!--<div class="signup_wrap">-->
<div class="reg_form">
<div class="form_title"><u><b>Add Admin User</b></u></div>
<?php echo validation_errors('<p class="error">'); ?>
	<?php echo form_open("user/addAdmin"); ?>
	<table>
	<!-- required-->
		<tr><td>
			<label for="user_name">User Name:</label></td><td>
			<input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
			</td></tr>
			<tr><td>
			<label for="email_address">Email:</label></td><td>
			<input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
			</td></tr>
			<tr><td>
			<label for="password">Password:</label></td><td>
			<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
			</td></tr>
			<tr><td>
			<label for="con_password">Confirm Password:</label></td><td>
			<input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
			</td></tr>
			<tr><td>
			<label for="region">Region:</label></td><td>
			<select name="region" id="region">
				  <option value="all">Select Region</option>
				  <option value="north">North</option>
				  <option value="east">East</option>
				  <option value="west">West</option>
				  <option value="south">South</option>
			</select>
			</td></tr>
			
			        
			<tr><td><!-- required-->
			<input type="hidden" name="user_level" id="user_level" value="2">
			<input type="submit" class="greenButton" value="Submit" /></td></tr>
			
			</td></tr>
			</table>
	<?php echo form_close(); ?>
</div><!--<div class="reg_form">-->    
</div><!--<div id="content">-->