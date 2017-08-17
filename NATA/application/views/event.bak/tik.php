<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Ticket</title>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.css">
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/css/full-slider.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.bootstrap-touchspin.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.bootstrap-touchspin.js"></script>
</head>
<body>
<div class="col-md-2"><a href="#" onclick="printtable()" style="font-size:22px" class="btn blue pull-right">Print Ticket</a></div>
<div class="container mt40">
  <div class="col-lg-8 col-xs-offset-2">
  <?php foreach($tickets as $tic){ ?>
    <div class="contact-details">
      <div class="mail-head"> 
      <br/>
      </div>
      <div class="customer-head"> <span class="pull-left customer">
        <p>Dear1 <?php echo $tic['m_users_name'];?> ,</p>
        <p>Your ticket(s) are <b>Confirmed!</b></p>
        </span> </div>
      <div class="customer-info"> <span class="pull-left">
        <p>BOOKING ID</p>
        <h3><?php echo "ET".$tic['booking_id'];?></h3>
        </span>
        <div class="clearfix"></div>
       
        <table class="table orders">
            	<tr><td>
				<?php  $td=$tic['event_time'];
				$tobeformatdate = new DateTime($td);
            $finaldate = date_format($tobeformatdate, 'M,d Y');
				?>
				<h3>Event Name<br/><span><?php echo $tic['event_name'];?> , <?php echo $tic['m_events_venue'];?></span><br/> <?php
				 echo $finaldate = date_format($tobeformatdate, 'h:i:s a');
				?> | <?php
				 echo $finaldate = date_format($tobeformatdate, 'M,d Y');
				?> </h3></td>
				<td><h4 class="show-times" style="color:#fff;"><i class="fa fa-ticket"></i><br/>
          <br/>
            </h4></td></tr>
            </table>
       
        <div class="order-details">
          <p>ORDER SUMMARY</p>
        <table class="table table-striped">
        <thead>
        	<tr><th>TICKET INFO</th><th></th></tr>
        </thead>
        <tbody>
            <tr><td>Quantity</td><td><?php echo $qnt = $tic['m_users_num_of_tickets']+$tic['childtickets'];?></td></tr>
            <tr><td>(+) Internet handling fees 
            incl. of Service Tax </td><td>$0.00</td></tr>
            <tr><td>Additional Charge </td><td>$0.00 </td></tr>
            <tr><td>Discount</td><td>$0.00</td></tr>
            </tbody>
            <tfoot>
            <tr><td>AMOUNT PAID</td><td>$<?php echo ($tic['ticket_cost']*$tic['m_users_num_of_tickets'])+($tic['child_ticket_cost']*$tic['childtickets']);?></td></tr>
            </tfoot>
        </table>
        </div>
        <div>
        	<table class="table">
            	<tr><td><h2> BOOKING DATE & TIME<br/><span><?php $td1=$tic['m_users_register_date'];
				$tobeformatdate1 = new DateTime($td1);
            $finaldate1 = date_format($tobeformatdate1, 'M,d Y h:i a'); echo $finaldate1;?></span></h2></td><td><h2 style="text-align:right;"><b>CONFIRMATION NUMBER</b> <br/>
          <span><?php echo "ET".$tic['booking_id'];?></span></h2></td></tr>
            </table>
        </div>
      </div>
     
        <p><b>Important Instructions</b><br/>
          <br/>
          Tickets once booked cannot be exchanged, cancelled or refunded.
          The Credit Card and Credit Card Holder must be present at the ticket counter while collecting the ticket(s).</p>
      
	  <table class="table" style="background:#444;">
            	<tr><td><h2 style="color:#fff;"></h2></td></tr>
      </table>
      
    </div>
  <?php } ?>

  <?php foreach($tickets as $tic){ ?>
	<div class="contact-details" id="divToPrint"  style="display:none;">
      <div class="mail-head" style=" border-bottom:10px solid #333;"> 
         
        <br/>
      </div>
	  
      <div class="customer-head"> <span class="pull-left customer">
        <p>Dear <?php echo $tic['m_users_name'];?></p>
        <p>Your ticket(s) are <b>Confirmed!</b></p>
        </span> </div>
      <div class="customer-info"> <span class="pull-left">
        <p>BOOKING ID</p>
        <h3 style="font-size:13px;"><?php echo "ET".$tic['booking_id'];?></h3>
        </span>
        <div class="clearfix"></div>
       
        <table class="table orders" style="background:#444;">
            	<tr><td>
				<?php  $td=$tic['event_time'];
				$tobeformatdate = new DateTime($td);
            $finaldate = date_format($tobeformatdate, 'M,d Y');
				?>
				<h2 style="color:#fff; font-size:12px;"><b style="margin-bottom:5px; font-size:13px;">Event Name</b> :<br/><br/><?php echo $tic['event_name'];?>, <?php echo $tic['m_events_venue'];?><br/><?php
				 echo $finaldate = date_format($tobeformatdate, 'h:i a');
				?>  | <?php
				 echo $finaldate = date_format($tobeformatdate, 'M,d Y');
				?> </h2></td>
				<td><h4 class="show-times" style="color:#444;">
         
          </h4></td></tr>
        </table>
       
        <div class="order-details" style="margin-top:-50px;">
          <h3 style="font-size:13px; margin-left:7px; border-bottom:2px solid #333; line-height:25px;"><b>ORDER SUMMARY</b></h3>
        <table class="table table-condensed">
        <thead>
        	<tr><td style="font-size:11px;">TICKET INFO.</td><td style="font-size:11px;"></td></tr>
        </thead>
        <tbody>
            <tr><td style="font-size:11px;">Quantity</td><td style="font-size:11px;"><?php echo $qnt = $tic['m_users_num_of_tickets']+$tic['childtickets'];?></td></tr>
            <tr><td style="font-size:11px;">(+) Internet handling fees 
            incl. of Service Tax </td><td style="font-size:11px;">$0</td></tr>
            <tr><td style="font-size:11px;">Additional Charge </td><td style="font-size:11px;">$0.00 </td></tr>
            <tr><td style="font-size:11px;">Discount</td><td style="font-size:11px;">$0.00</td></tr>
            </tbody>
            <tfoot>
            <tr><td style="font-size:11px;">AMOUNT PAID</td><td style="font-size:11px;">$<?php echo ($tic['ticket_cost']*$tic['m_users_num_of_tickets'])+($tic['child_ticket_cost']*$tic['childtickets']);?></td></tr>
            </tfoot>
        </table>
        </div>
        <div>
        	<table class="table" style="margin-top:-30px;">
            	<tr><td><h2 style="font-size:13px;"> <b>BOOKING DATE & TIME</b><br/><span style="font-size:12px;"><?php $td1=$tic['m_users_register_date'];
				$tobeformatdate1 = new DateTime($td1);
            $finaldate1 = date_format($tobeformatdate1, 'M,d Y h:i a'); echo $finaldate1;?></span></h2></td><td><h2 style="text-align:right; font-size:13px;"><b>CONFIRMATION NUMBER</b> <br/>
          <span><?php echo "ET".$tic['booking_id'];?></span></h2></td></tr>
            </table>
        </div>
      </div>
     
      <p style="font-size:11px; margin-top:-25px; margin-left:8px;"><b style="font-size:12px;">Important Instructions</b><br/>
          Tickets once booked cannot be exchanged, cancelled or refunded.<br/>
          The Credit Card and Credit Card Holder must be present at the ticket counter while collecting the ticket(s).<br/>
          </p>
      <table class="table" style="background:#444; border-bottom:10px solid #333; margin-top:-10px;">
            	<tr><td ></td></tr>
      </table>
      
    </div>
	  <?php } ?>

  </div>
</div>

<script type="text/javascript">
    function printtable()
    {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1200,height=550');
        popupWin.document.open();
        //popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.write('<html><head><link href="http://www.nataus.org/assets/css/custom.css" rel="stylesheet" type="text/css"><link href="http://www.nataus.org/assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css"/><link href="http://www.nataus.org/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/><link href="http://www.nataus.org/assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
</body>
</html>