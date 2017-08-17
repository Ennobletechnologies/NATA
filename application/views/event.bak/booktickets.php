 <?php
                $ci = & get_instance();
                $ci->load->database();
                 function objectToArray($d) {
                    if (is_object($d)) {
                        
                        $d = get_object_vars($d);
                    }

                    if (is_array($d)) {
                     return array_map(__FUNCTION__, $d);
                    } else {

                        return $d;
                    }
                }
                $id = $this->uri->segment(4);
               $mainsql = "SELECT * FROM `m_events`  LEFT JOIN m_event_date ON m_events.m_events_id=m_event_date.m_events_id where m_event_date.m_event_date_id='$id'";
                                        $query1 = $ci->db->query($mainsql);
                                        $row1 = $query1->result();
                                        $cost = objectToArray($row1);
                                         foreach ($cost as $to_cost) {
                                            $m_events_cost= $to_cost['m_events_cost'];
                                       $m_events_name= $to_cost['m_events_name'];
                                         }

                ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<header class="inner-carousel">
  <div class="inner-slider">
    <?php 
    $segment_value = $this->uri->segment(4);
    if($this->uri->segment(4)==21 || $this->uri->segment(4)==23 || $this->uri->segment(4)==24 || $this->uri->segment(4)==25 )
       	  { $this->session->set_userdata("seg_value",$segment_value);?>
      <img src="<?php echo base_url()?>assets/images/form-banner.jpg" class="img-responsive" ><span class="booking-heading"><h1><?php if($this->uri->segment(4)==21) {
echo "NATA IDOL Entry Form <h4>send email to : nataidol@nataus.org</h4>";} elseif($this->uri->segment(4)==23) {
echo "NATA Short Film Contest Form <h4>send email to : shortfilm@nata2016.org</h4>";} elseif($this->uri->segment(4)==24) {
echo "NATA IDOL 2nd Round <h4>send email to : nataidol@nataus.org</h4>";} elseif($this->uri->segment(4)==25) {
echo "NATA IDOL 2nd Round <h4>send email to : nataidol@nataus.org</h4>";}else{} ?></span>
    <?php  }
	  else
	  {
	  ?>
    <img src="<?php echo base_url()?>assets/images/2.jpg" class="img-responsive">
    <?php } ?>
    <div class="container">
      <div class="event-heading">
        <?php if($this->uri->segment(4)==21)
	  {
		  echo "<h2 style='color:#666; text-transform:uppercase; padding-top:65px; letter-spacing:.21em'></h2>";
	  }
	  else
	  {
	  ?>
        <h2>Contact Information</h2>
        <h5>Happy to share you Information</h5>
        <?php } ?>
      </div>
    </div>
  </div>
</header>
<div class="container mb40">
  <div class="col-lg-8">
    <div class="navigation">
      <ol class="breadcrumb">
        <li></li>
        <?php if(!$this->uri->segment(4)==21)
	  {
		  echo "<li>Contact Information</li>";
	  }
	 ?>
      </ol>
    </div>
    <div class="contact-details">
      <?php if($this->uri->segment(4)==21)
	  {
		  echo '<h4 class="contact-heading">Details</h4>';
	  }
	  else{?>
      <h4 class="contact-heading">Share your Contact Details</h4>
      <?php		  
	  }
	 ?>
      <div class="row">
        <div class="col-md-10 col-xs-offset-1">
          <form role="form" name="myForm" onsubmit="return validateForm();" action="<?php echo base_url()?>event/index/addUser" method="post">
            <hr class="colorgraph">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="fname" id="fname" class="form-control input-md" placeholder="First Name" pattern="[A-Za-z]{3,15}" title="Minimun Three letters" tabindex="1" required/>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="lname" id="lname" class="form-control input-md" placeholder="Last Name" tabindex="2" required/>
                </div>
              </div>
                <?php if($this->uri->segment(4) == 23 || $this->uri->segment(4)==24|| $this->uri->segment(4)==25){?> 
                <input type="hidden" id="city" name="city" value="No Data">
                 <input type="hidden" name="setMyTag" id="setMyTag" value="No Data">
		<input type="hidden" name="date_of_event" id="setMyTag1" value="No Email">   
                    
                    <?php }else { ?>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <select name="city" class="form-control valid" id="city" style="padding:5px;" required>
                <option>Choose your City</option>
				<?php foreach($locations as $loc) { ?>
<option myTag="<?php echo $loc['location_email'];?>" myTag1="<?php echo $loc['idol_date'];?>" value="<?php echo $loc['m_locations_name'];?>"><?php echo $loc['m_locations_name'];?></option>
<?php } ?>
                
                  </select>
				  <input type="hidden" name="setMyTag" id="setMyTag" value="">
				  <input type="hidden" name="date_of_event" id="setMyTag1" value="">
                </div>
              </div>
                <?php } ?>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="url" name="link" id="link" class="form-control input-md" placeholder="link of youtube" tabindex="6" required/>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="number" name="age" id="age" class="form-control input-md" placeholder="Age"  tabindex="5" required/>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="phoneNumber" id="phoneNumber" class="form-control input-md" placeholder="Phone Number" tabindex="6" pattern="[0-9]{10}" title="Please Enter Ten Digit mobile Number " required/>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-md" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email Address" tabindex="4" required/>
                </div>
              </div>
              
            </div>
            <input type="hidden" name="m_events_id" id="m_events_id" value="<?php if(empty($_POST['m_events_id'])){echo "16"; } else {echo $_POST['m_events_id'];} ?>">

                <input type="hidden" name="m_event_date_id" id="m_event_date_id" value="
<?php if(empty($_POST['m_event_date_id'])){ echo "21"; } else { echo $_POST['m_event_date_id']; } ?>">
                    
                    
            <input type="hidden" name="number_of_tickets" id="number_of_tickets" value="<?php if(empty($_POST['number_of_tickets'])){ echo "1"; } else { echo $_POST['number_of_tickets']; } ?>">
                <input type="hidden" name="m_events_cost" id="m_events_cost" value="<?php echo $m_events_cost;?>">
            <input type="hidden" name="m_events_name" id="m_events_name" value="<?php echo $m_events_name;?>">
            <input type="hidden" name="m_event_datetime" id="m_event_datetime" value=" <?php if($this->uri->segment(4)==21) {
echo "2016-04-29 09:05:00";} elseif($this->uri->segment(4)==23) {
echo "2016-04-30 09:00:0";} elseif($this->uri->segment(4)==24) {
echo "2016-05-18 09:00:00";}elseif($this->uri->segment(4)==25) {
echo "2016-05-18 09:00:00";}else{    echo $_POST['m_event_datetime']; } ?>">
            <input type="hidden" name="child_ticket_cost" id="child_ticket_cost" value="<?php if(empty($_POST['child_ticket_cost'])){echo "0"; } else { echo $_POST['child_ticket_cost'];}  ?>"/>
            <input type="hidden" name="childtickets" id="child_ticket_cost" value="<?php if(empty($_POST['child_ticket_cost'])){echo "0"; } else { echo $_POST['childtickets']; } ?>">
            <div class="row">
  <!--            <p>
                <input type="checkbox" name="accept" required value="">
                Please review the <a href="http://www.nata2016.org/assets/pdf/NATAIdol2016_Rules&Regulations.pdf" target="_blank"> Terms & Conditions.</a> Guidelines to participate in NATA IDOL event.Click here if you'd like to print the Terms/To view the Terms OR I agree to the Terms& Conditions</p>-->
              <div class="col-xs-6 col-md-6 booking-btn">
                <input type="submit" value="Preview" class="btn btn-md" tabindex="7">
              </div>
            </div>
          </form>
        </div>
      </div>
      <p class="panel panel-default pa10 mt10" style="background:#FFF189; border-color:#FFC520; font-size:16px;"> <b>NOTE: </b>If you have any questions please send email to <?php if($this->uri->segment(4)==21) {
echo "nataidol@nataus.org";} elseif($this->uri->segment(4)==23) {
echo "shortfilm@nata2016.org";} elseif($this->uri->segment(4)==24) {
echo "nataidol@nataus.org";}elseif($this->uri->segment(4)==25) {
echo "nataidol@nataus.org";}else{} ?></p>
    </div>
  </div>
  <div class="col-md-4 col-sm-12 mt40">
    <div class="order-summary ">
      <h5 class="text-uppercase bold" style="padding-bottom: 7px;">Order summary</h5>
      <h5 class=" pb10">
        <?php echo $m_events_name;?>
      </h5>
      <table class="table table-striped">
        <?php if(!empty($_POST['m_events_name'])){ ?>
          <?php if($this->uri->segment(4)==23 || $this->uri->segment(4)==24 || $this->uri->segment(4)==25){}else { ?>
        <tr>
          <td width="70%"><p>Adult :<?php echo $_POST['number_of_tickets'] ?> ticket(s) </p>
            <?php if(!empty($_POST['childtickets'])){?>
            <p>Children :
              <?php $tickets = $_POST['number_of_tickets']+$_POST['childtickets'];echo $_POST['childtickets']; ?>
              ticket(s) </p>
            <?php } else { $tickets = $_POST['number_of_tickets'];} ?>
            <h5> <?php echo date("D, j M, Y g:i a", strtotime($_POST['m_event_datetime'])); ?> </h5></td>
          <td width="30%" style="background:#e2e2e2; text-align:center"><h2><?php echo $tickets; ?></h2>
            <p>Ticket(s)</p></td>
        </tr>
          <?php } ?>
        <?php } ?>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="bold">Total Amount:
            <?php if(empty($_POST['number_of_tickets']))
		  { echo "$".$m_events_cost." Only";}?></td>
          <?php if(!empty($_POST['number_of_tickets']))
		  {?>
          <td><h3>$
              <?php $adlut=($_POST['number_of_tickets'])*($_POST['m_events_cost']); 
		   if(!empty($_POST['childtickets'])){
		  $child = ($_POST['childtickets'])*($_POST['child_ticket_cost']);
		  echo $adlut+$child;
		   }
		   else
		   {
			echo $adlut;   
		   }
		  
		  ?>
            </h3></td>
          <td><?php }?></td>
        </tr>
		
		
      </table>
      <br>
      <br>
	  
      <script>
$(function() { 
    $("#city").change(function(){ 
        var element = $(this).find('option:selected'); 
        var myTag = element.attr("myTag"); 
		alert(myTag);
        $('#setMyTag').val(myTag);
		
var element1 = $(this).find('option:selected'); 
        var myTag1 = element1.attr("myTag1"); 
		alert(myTag);
        $('#setMyTag1').val(myTag1);
		
    }); 
}); 
function validateForm() {
    var x = document.forms["myForm"]["city"].value;
    if (x == null || x == "") {
        alert("City must be select");
        return false;
    }
}
</script>


    </div>
  </div>
</div>
</body>
</html>
