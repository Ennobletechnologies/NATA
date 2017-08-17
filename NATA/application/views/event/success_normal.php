
<div class="customer-head"> <span class="pull-left customer">
        <p>Dear <?php echo $this->session->userdata('fname');?> <?php echo $this->session->userdata('lname');?> ,</p>
        <p>Your Registration is now complete!<br>
		<br>
		You will get an email confirmation .
		</p>
        </span> </div>
		      <div class="customer-info"> <span class="pull-left">
        <p><a href="<?php echo base_url();?>event/index/getticket/<?php echo $last_id; ?>">Registration Details</a></p>
            </span>
        <div class="clearfix"></div>
       </div>
	   <p>Thank you for your Interest<p/>