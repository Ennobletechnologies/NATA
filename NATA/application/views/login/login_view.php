<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="favicon.ico" rel='icon' type='image/x-icon'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nata Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-xs-offset-4">
      <div class="login-form">
      <div class="nata-logo"><img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive" alt="nata-logo"/></div>
      
      <form action="<?php echo base_url()?>user/login" method="post" class="form-signin">
        <h2 class="form-signin-heading">Login to your Account</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" value="" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" type="password" id="pass" name="pass"  class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <input type="submit" class="btn btn-success login-btn" value="Sign in" />
                <a href="<?php echo base_url()?>user/forgot" class="forgot"> Forgot passowrd </a>
                
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>