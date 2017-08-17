<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Get Reports</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  </link>
  <script>
  $(function() {
    $( "#fromdate" ).datepicker();
    $( "#todate" ).datepicker();
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
<section class="member-home">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading ">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>admin">Back to Admin</a></li>
                <li class="active">Members Report</li>
              </ol>
          </div>
            <div class="panel-body">
            <table class="table table-bordered">
                <form action="<?php echo base_url() ?>admin/showdonreport" method="post">
                <tr>
                    <td><select id="" required>
                        <option value="View">View all Donation data</option>
                      </select></td>
                    <td><input type="submit" class="btn btn-success" name="submit" value="Submit" /></td>
                  </tr>
              </form>
              </table>
            <?php if(isset($_POST['submit'])) {?>
            <?php echo $_POST['fromdate']; print_r($report);?>
            <?php } ?>
          </div>
            <div class="panel-footer">
             <p>Copyright © 2015 - North American Telugu Association | All rights reserved.</p> </div>
        </div>
          </div>
      </div>
      </div>
  </div>
  </section>
</body>
</html>