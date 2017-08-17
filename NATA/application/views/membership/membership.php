<div id="content">
<div class="signup_wrap"> </div>
<!--<div class="signup_wrap">-->
<div class="reg_form">
<div class="form_title">Sign Up</div>
<?php echo validation_errors('<p class="error">'); ?> <?php echo form_open("membership/registration"); ?>
<table>
<tr>
  <td><label for="user_name">Member Name:</label></td>
  <td><input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" /></td>
</tr>
<tr>
  <td><label for="name_of_spouse">Name of Spouse:</label></td>
  <td><input type="text" id="name_of_spouse" name="name_of_spouse" value="<?php echo set_value('user_name'); ?>" /></td>
</tr>
<tr>
  <td><label for="user_name">Children:</label></td>
  <td><input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" /></td>
</tr>
<tr>
  <td><label for="user_name">Age:</label></td>
  <td><input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" /></td>
</tr>
<tr>
  <td><label for="email_address">Your Email:</label></td>
  <td><input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" /></td>
</tr>
<tr>
  <td><label for="password">Password:</label></td>
  <td><input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" /></td>
</tr>
<tr>
  <td><label for="con_password">Confirm Password:</label></td>
  <td><input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" /></td>
</tr>
<tr>
  <td><input type="submit" class="greenButton" value="Submit" /></td>
</tr>
<?php echo form_close(); ?>
</div>
<!--<div class="reg_form">-->
</div>
<!--<div id="content">-->