<html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" />
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
              <li class="active">Member Access Register</li>
            </ol>
               </div>
		</div>
	  </div>
	 </div>
	</div>
  </section>	
<center>
	
<form class="form-horizontal" action="<?php echo base_url() ?>user/addMember" method="POST">
  <div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<div class="search-box">
				<div class="caption">
					<h2 style="color:white"><b>Create Member Access Register<b></h2>
					<h4 style="color:yellow"><b>Fill All The Details <span style="color:white;">*</span><b></h4>
				</div>
				<br><br>
				<form action="" class="loginForm">
					<div class="input-group">
						<input type="text" id="user_name" name="user_name" class="form-control" placeholder="Full Name" value="<?php echo set_value('user_name'); ?>" required>
						<input type="text"  id="email_address" class="form-control" placeholder="Email" name="email_address" value="<?php echo set_value('email_address'); ?>" required>
						<input type="password" id="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" required>
						<input type="password" class="form-control" id="con_password" name="con_password" placeholder="Confirm Password" value="<?php echo set_value('con_password'); ?>" required>
						<input type="number" class="form-control" name="user_level" id="user_level" value="5" readonly>
						<input style='background-color:green;color:white' type="submit" class="form-control" value="Submit">
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
</form>