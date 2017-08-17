<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nata Members Report on<?php echo date('m/d/Y H:m')?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/font-awesome/css/font-awesome.css" />
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

<section class="member-home" id="top">
  <div class="container">
    <div class="row">
      <div class=" col-lg-12 col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Report for all members</li>
            </ol>
            <div class="pull-right">  <?php if (isset($_POST['submit'])) { ?>
            <a href="#" onClick="printdiv('div_print');" class="btn btn-success">Print Report</a>
            <?php } ?>  </div>
          </div>
          <div class="panel-body" style="height:800px;overflow-y:auto; overflow-x: auto ">
            <?php if (isset($_POST['submit'])) { ?>
            <div id="div_print">
            <table id="report" class="table table-bordered table-fixed" cellspacing="0" width="100%" >
            <thead>
                <tr>
                  <th> SNo.</th>
                  <th> Member Registration Date</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Spouse Name</th>
                  <th>Email</th>
                  <th>Home Phone</th>
                  <th>Children1 Name</th>
                  <th>Children1 Age</th>
                  <th>Children2 Name</th>
                  <th>Children2 Age</th>
                  <th>Address1</th>
                  <th>Address2</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Zip</th>
                  <th>Cellphone</th>
                  <th>Solicited by</th>
                  <th>Total Amount</th>
                </tr>
                </thead>            
     			<tbody>
                <?php $i=1;
				foreach ($myreport as $report) 
				{
                    if($report['total_amt']!=0)
                    {
				?>
                <tr>
                  <td><?php echo $i; $i++;?></td>
                  <td><?php echo date ('m/d/Y', strtotime($report['dated'])); ?></td>
                  <td><?php echo $report['member_name']; ?></td>
                  <td><?php echo $report['lastname']; ?></td>
                  <td><?php echo $report['name_of_spouse']; ?></td>
                  <td><?php echo $report['email']; ?></td>
                  <td><?php echo $report['homephone']; ?></td>
                  <td><?php echo $report['children1']; ?></td>
                  <td><?php echo $report['age1']; ?></td>
                  <td><?php echo $report['children2']; ?></td>
                  <td><?php echo $report['age2']; ?></td>
                  <td><?php echo $report['aptno']; ?></td>
                  <td><?php echo $report['address']; ?></td>
                  <td><?php echo $report['city']; ?></td>
                  <td><?php echo $report['state']; ?></td>
                  <td><?php echo $report['zip']; ?></td>
                  <td><?php echo $report['cellphone']; ?></td>
                  <td><?php echo $report['solicited_by']; ?></td>
                  <td>$<?php echo $report['total_amt']; ?></td>
                </tr>
                <?php } ?>
                <?php } ?>
                </tbody>
              </table> 
            </div>
            <?php //echo "<pre>";print_r($myreport);echo "</pre>";?>
            <?php } ?>
            
          </div>          
          <div class="panel-footer">
            <p>Copyright © 2015 - North American Telugu Association | All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>
</body>
<script>
$(document).ready(function() {
    $('#report').DataTable();
} );
</script>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
</html>