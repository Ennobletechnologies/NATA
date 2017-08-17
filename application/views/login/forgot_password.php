<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot password</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-xs-offset-4">
      <div class="login-form">
        <div class="nata-logo"><img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive" alt="nata-logo"/></div>
        <form action="" method="post" class="form-signin" >
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" value="" class="form-control" placeholder="Email address" required autofocus>
          <input type="submit" name="submit" class="btn btn-success login-btn" />
          <?php echo form_close(); ?>
        </form>
        <?php
if(isset($_POST['email']))
		{
		if(!empty($password))
		{
foreach($password as $pass)
{
	$pw=$pass['password'];
	$email=$pass['email'];
}

$to = $email;
$subject = "Your password for nataus.org";
$txt = "Your password is :".$pw;
$headers = "From: info@nataus.org" . "\r\n" .
"CC: info@nataus.org";

mail($to,$subject,$txt,$headers);

echo "<p style='color:#FF0; background:rgba(255,255,255,0.2); padding:5px 10px; border-radius:10px'>password sent to your email id.. Please check in spam if not found in inbox..</p>";
echo "<br>"."<a href='http://www.nataus.org/user' class='btn btn-danger'>Click here to Login</a>";
		}
		else
		{
			echo "<p style='color:#FF0; background:rgba(255,255,255,0.2); padding:5px 10px; border-radius:10px'>Your email not found in the our records...</p>";
		}
		}
		?>
      </div>
    </div>
  </div>
</div>
</body>
</html>