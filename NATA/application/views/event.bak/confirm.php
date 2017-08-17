<?php $seg_value = $this->session->userdata("seg_value");
$city = $_POST['city'];
$setMyTag = $_POST['setMyTag'];
$this->session->set_userdata("city",$city);
$this->session->set_userdata("copy_email",$setMyTag);
 ?>
<header class="inner-carousel">
  <div class="inner-slider"> <img src="<?php echo base_url()?>assets/images/2.jpg" class="img-responsive">
    <div class="container">
      <div class="event-heading">
        <h2>Confirmation</h2>
      </div>
    </div>
  </div>
</header>
<div class="container mt40">
  <div class="col-lg-8">
    <div class="contact-details">
      <h4 class="contact-heading">Check your Details</h4>
      <div class="row">
        <div class="col-md-10 col-xs-offset-1">
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="fname" id="fname" class="form-control input-md" value="<?php echo $_POST['fname']; ?>" readonly>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control input-md" value="<?php echo $_POST['lname']; ?>" tabindex="2" readonly>
              </div>
            </div>
          </div>
          <div class="form-group"> </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control input-md" value="<?php echo $_POST['email']; ?>" tabindex="4" readonly>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="phoneNumber" name="phoneNumber" class="form-control input-md" value="<?php echo $_POST['phoneNumber']; ?>" tabindex="6" readonly>
              </div>
            </div>
          </div>
		  <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
				<label>Age</label>
                  <input type="text" name="age" id="age" class="form-control input-md" placeholder="Age"  tabindex="5" value="<?php echo $_POST['age']; ?>" readonly/>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
				<label>Audio/Video link</label>
                  <input type="text" name="link" id="link" class="form-control input-md" placeholder="Audio/Video link of you tube" value="<?php echo $_POST['link']; ?>" tabindex="6" readonly/>
                </div>
              </div>
            </div>
               <?php if($seg_value == 23 || $seg_value==24|| $seg_value==25){?> 
                <input type="hidden" id="city" name="city" value="No Data">
                        
                    <?php }else { ?>
			<div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
				<label>City</label>
			<select name="city" class="form-control valid" id="" style="padding:5px;" readonly>
                  <option value="<?php echo $_POST['city']; ?>" ><?php echo $_POST['city']; ?></option>
                  
                  </select>
                 
                </div>
              </div>
         
            </div>
                    <?php } ?>
		  <form action="https://globalgatewaye4.firstdata.com/pay" method="POST" name="myForm" id="myForm">
            <?php
$adlut=($_POST['number_of_tickets'])*($_POST['m_events_cost']); 
$child = ($_POST['childtickets'])*($_POST['child_ticket_cost']);

$totalamount=$adlut+$child;
$x_login = "WSP-NATA-zLh8LABdEw"; // Take from Payment Page ID in Payment Pages interface
$transaction_key = "7~ltCXMUZbtg9sQ7Uv1~"; // Take from Payment Pages configuration interface
$x_amount = $totalamount;
$x_currency_code = "USD"; // Needs to agree with the currency of the payment page
srand(time()); // initialize random generator for x_fp_sequence
$x_fp_sequence = rand(1000, 100000) + 123456;
$x_fp_timestamp = time(); // needs to be in UTC. Make sure webserver produces UTC

// The values that contribute to x_fp_hash
$hmac_data = $x_login . "^" . $x_fp_sequence . "^" . $x_fp_timestamp . "^" . $x_amount . "^" . $x_currency_code;
$x_fp_hash = hash_hmac('MD5', $hmac_data, $transaction_key);

echo ('<input name="x_login" value="' . $x_login . '" type="hidden">' );
echo ('<input name="x_amount" value="' . $x_amount . '" type="hidden">' );
echo ('<input name="x_fp_sequence" value="' . $x_fp_sequence . '" type="hidden">' );
echo ('<input name="x_fp_timestamp" value="' . $x_fp_timestamp . '" type="hidden">' );
echo ('<input name="x_fp_hash" value="' . $x_fp_hash . '" size="50" type="hidden">' );
echo ('<input name="x_currency_code" value="' . $x_currency_code . '" type="hidden">');

// create parameters input in html
foreach ($_POST as $a => $b) {
	echo "<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."'>";
}

?>
            <input type="hidden" name="x_show_form" value="PAYMENT_FORM"/>
            <input id="submit" class="btn btn-md btn-success"  type="submit" name="submit" value="Make Payment">
			<!--<a href="<?php echo base_url()?>event/index/booktickets/21" class="btn btn-default">Back</a>-->
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-12">
    <div class="order-summary">
      <h5 class="text-uppercase bold">Order summary</h5>
      <h5 class=" pb10" style='padding-top:5px;padding-bottom: 5px;'><?php echo $_POST['m_events_name']; ?></h5>
      <table class="table table-striped">
	  <?php if(!$seg_value==21) {?>
        <tr>
          <td width="70%"><p>Adult :<?php echo $_POST['number_of_tickets'] ?> ticket(s)
              </p>
			  <?php if(!empty($_POST['childtickets'])){?>
			  <p>Children :<?php $tickets = $_POST['number_of_tickets']+$_POST['childtickets'];echo $_POST['childtickets']; ?> ticket(s)
              </p>
			  <?php } else { $tickets = $_POST['number_of_tickets'];} ?>
			  
            <h5> <?php echo date("D, j M, Y g:i a", strtotime($_POST['m_event_datetime'])); ?> </h5></td>
          <td width="30%" style="background:#e2e2e2; text-align:center"><h2><?php echo $tickets; ?></h2>
            <p>Ticket(s)</p></td>
        </tr>
		<?php } ?>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="bold">Total Amount </td>
	
		   <?php if(!empty($_POST['number_of_tickets']))
		  {?>
          <td><h3>$<?php $adlut=($_POST['number_of_tickets'])*($_POST['m_events_cost']); 
		   if(!empty($_POST['childtickets'])){
		  $child = ($_POST['childtickets'])*($_POST['child_ticket_cost']);
		  echo $adlut+$child;
		   }
		   else
		   {
			echo $adlut;   
		   }
		  
		  ?></h3></td>
		  <?php } ?>
	
        </tr>

      </table>
	<br>
	<br>
		
    </div>
  </div>
</div>
