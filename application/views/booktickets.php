<header class="inner-carousel">
  <div class="inner-slider"> 
   <?php if($this->uri->segment(4)==21)
	   	  { $this->session->set_userdata("seg_value",21);?>
<img style="margin: -137px 0px;" src="<?php echo base_url()?>assets/images/idol.png" class="img-responsive" align="middle">

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
		  echo "<h2 style='color:black;'>Nata Idol Entry Form</h2>";
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
<div class="container mt40 mb40">
  <div class="col-lg-8">
    <div class="navigation">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>event/index">Home</a></li>
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
          <form role="form" action="<?php echo base_url()?>event/index/addUser" method="post">
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
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-md" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email Address" tabindex="4" required/>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="phoneNumber" id="phoneNumber" class="form-control input-md" placeholder="Phone Number" tabindex="6" pattern="[0-9]{10}" title="Please Enter Ten Digit mobile Number " required/>
                </div>
              </div>
            </div>
			<input type="hidden" name="m_events_id" id="m_events_id" value="<?php if(empty($_POST['m_events_id'])){echo "16"; } else {echo $_POST['m_events_id'];} ?>">
			
<input type="hidden" name="m_event_date_id" id="m_event_date_id" value="
<?php if(empty($_POST['m_event_date_id'])){ echo "21"; } else { echo $_POST['m_event_date_id']; } ?>">
			
			<input type="hidden" name="number_of_tickets" id="number_of_tickets" value="<?php if(empty($_POST['number_of_tickets'])){ echo "1"; } else { echo $_POST['number_of_tickets']; } ?>">
			
			<input type="hidden" name="m_events_cost" id="m_events_cost" value="<?php if(empty($_POST['m_events_cost'])){echo "20"; } else {echo $_POST['m_events_cost']; } ?>">
			
			<input type="hidden" name="m_events_name" id="m_events_name" value="<?php if(empty($_POST['m_events_name'])){echo "Nata Idol"; } else { echo $_POST['m_events_name'];}  ?>">
			
			<input type="hidden" name="m_event_datetime" id="m_event_datetime" value="<?php if(empty($_POST['m_event_datetime'])){echo "2016-04-29 09:05:00"; } else { echo $_POST['m_event_datetime'];} ?>">
			
	<input type="hidden" name="child_ticket_cost" id="child_ticket_cost" value="<?php if(empty($_POST['child_ticket_cost'])){echo "0"; } else { echo $_POST['child_ticket_cost'];}  ?>"/>
	
	<input type="hidden" name="childtickets" id="child_ticket_cost" value="<?php if(empty($_POST['child_ticket_cost'])){echo "0"; } else { echo $_POST['childtickets']; } ?>">
            <div class="row">
              <div class="col-xs-6 col-md-6 booking-btn">
                <input type="submit" value="Preview" class="btn btn-md" tabindex="7">
				
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
   <div class="col-md-4 col-sm-12">
    <div class="order-summary">
      <h5 class="text-uppercase bold" >Order summary</h5>
      <h5 class=" pb10"><?php if(empty($_POST['m_events_name'])){echo "<h4 style='padding-bottom: 16px;'>Nata Idol</h4>"; } else { echo $_POST['m_events_name'];} ?></h5>
      <table class="table table-striped">
	  <?php if(!empty($_POST['m_events_name'])){ ?>
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
          <td class="bold">Total Amount:<?php if(empty($_POST['number_of_tickets']))
		  { echo "$20 Only";}?></td>
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
		  <td>
		  <?php }?>
		  </td>
        </tr>

      </table>
	<br>
	<br>
		
    </div>
  </div>
</div>