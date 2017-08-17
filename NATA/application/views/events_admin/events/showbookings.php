<?php $ip=$_SERVER['REMOTE_ADDR']; ?>
<script type="text/javascript">
function imready(ids)
{
      	$.ajax({
                 type: 'POST',
                  context: 'application/json',
                    data: {id:ids,status:1},
                    url: 'http://www.nataus.org/events_admin/index/updatestatus',
                    success: function(msg) 
                    {
$('#ajaxrefresh').load(document.URL + ' #ajaxrefresh');
                    }
                });
}
function imnotready(ids)
{
	   	$.ajax({
                 type: 'POST',
                  context: 'application/json',
                    data: {id:ids,status:0},
                  url: 'http://www.nataus.org/events_admin/index/updatestatus',
                    success: function(msg) 
                    {
			$('#ajaxrefresh').load(document.URL + ' #ajaxrefresh');
                    }
                });
}
</script>

			
<section>
 
  <div class="container">

			
				
      <div class="row" id="ajaxrefresh">
        <div class=" col-md-12" >
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4><i class="fa fa-list">&nbsp;</i>Booking History</h4>
            </div>
            <table class="table table-striped table-bordered" >
              <thead>
                <tr>
				
                  <th>Name</th>
                  <th><i class="fa fa-ticket">&nbsp;</i>Tickets</th>
				  <th>Ticket ID</th>
                  <th><i class="fa fa-dollar">&nbsp;</i>Total Price</th>
                  <th><i class="fa fa-clock-o">&nbsp;</i>Event Date & Time</th>
                  <th><i class="fa fa-film">&nbsp;</i>Event</th>
				  <th><i class="fa fa-film">&nbsp;</i>Booked Time</th>
                  <th ><i class="fa fa-ticket">&nbsp;</i>Referred By</th>
                  <th class="td-actions"><i class="fa fa-ticket">&nbsp;</i>Status</th>
                 <?php $ipconstact="183.82.3.8"; if($ip==$ipconstact){?> <th class="td-actions"><i class="fa fa-ticket">&nbsp;</i>Status</th> <?php } ?>
                  
                </tr>
              </thead>
              <tbody id="div2">
		<?php 
        foreach ($bookings as $bookingdata)
						  { 
						 ?>
                <tr id="div1">
                  <td><?php echo  $bookingdata['m_users_name']; ?></td>
                  <td>Adult (<?php echo  $bookingdata['m_users_number_of_tickets']; ?>), Kids (<?php if($bookingdata['childtickets']) { echo  $bookingdata['childtickets']; } else { echo "0";}?>)</td>
				  <td><?php echo  "ET".$bookingdata['booking_id']; ?></td>
				  
                  <td><?php if(empty($bookingdata['childtickets'])) { $adult= ($bookingdata['m_users_number_of_tickets']*$bookingdata['ticket_cost']); echo  $adult; 
				  }
				  else{
					 $adult= ($bookingdata['m_users_number_of_tickets']*$bookingdata['ticket_cost']);
					 $kids= ($bookingdata['childtickets']*$bookingdata['child_ticket_cost']);
					 
					 echo  $adult + $kids;  
				  }
				  ?></td>
                  <td><?php echo  date('M,d h:i a',strtotime($bookingdata['m_events_datetime'])); ?></td>
                  <td><?php echo  $bookingdata['m_events_name']; ?></td>
				  <td><?php echo  date('M,d h:i a',strtotime($bookingdata['m_users_register_date'])); ?></td>
                  <td><?php echo  $bookingdata['referredby']; ?></td>
                  <td class="text-center">
				  <?php $sts= $bookingdata['booking_status']; if($sts==1){?>
				  Attended <input type="checkbox" name="status[]" checked="checked" disabled readonly id="status<?php echo  $bookingdata['m_bookings_id']; ?>" onclick="imnotready(<?php echo  $bookingdata['m_bookings_id']; ?>)"/>
				  <?php } else {?>
				  Booked <input type="checkbox" name="status[]" id="status<?php echo  $bookingdata['m_bookings_id']; ?>" onclick="imready(<?php echo  $bookingdata['m_bookings_id']; ?>)"/>
				  <?php } ?>
				  </td>
                                  
                                  <?php if($ip==$ipconstact){ ?>   <td><a onclick="return deleletconfig()" href="<?php echo base_url();?>events_admin/index/deleteBooking/<?php echo $bookingdata['m_bookings_id'];?>" class="btn btn-danger btn-small"><i class="fa fa-remove"> </i></a></td> <?php } ?>
                  
                </tr>
				<?php } 	?>
				
			  </tbody>
            </table>
	
          </div>
        </div>
      </div>

    </div>

</section>

