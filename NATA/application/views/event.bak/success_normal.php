
<div class="customer-head"> <span class="pull-left customer">
        <p>Dear <?php echo $this->session->userdata('fname');?> <?php echo $this->session->userdata('lname');?> ,</p>
        <p>Your ticket(s) are <b>Confirmed!</b><br>
		<br>
		You will get a email link to get the ticket(s), however you will get ticket(s) from below link now.
		</p>
        </span> </div>
		      <div class="customer-info"> <span class="pull-left">
        <p><a href="<?php echo base_url();?>event/index/getticket/<?php echo $last_id; ?>">Get Tickets Now</a></p>
            </span>
        <div class="clearfix"></div>
       </div>
	   <p>Thanks for booking event...<p/>