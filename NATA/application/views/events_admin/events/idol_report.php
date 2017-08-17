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
<?php
if(isset($_POST['event_name']))
{
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
        
          $event_id = $_POST['event_name'];
               $mainsql = "SELECT * FROM `m_bookings` LEFT JOIN m_users ON m_bookings.m_users_id=m_users.m_users_id LEFT JOIN m_events ON m_events.m_events_id=m_bookings.m_events_id LEFT JOIN m_event_date ON m_event_date.m_events_id=m_bookings.m_events_id WHERE m_bookings.m_events_id='$event_id' GROUP BY m_bookings_id";
                                        $query1 = $ci->db->query($mainsql);
                                        $row1 = $query1->result();
                                        $bookings = objectToArray($row1);
                                         

                ?>


			
<section>
 
  <div class="container">

			
				
      <div class="row" id="ajaxrefresh">
        <div class=" col-md-12" >
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4><i class="fa fa-list">&nbsp;</i>Booking History   <a style="
    float: right;
    color: white;
" href="<?php echo base_url()?>events_admin/repoting">Back to List</a></h4> 
            </div>
            <table class="table table-striped table-bordered" style="overflow-x: auto;
display: block;">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                   <th>Mobile Number</th>
                  <th><i class="fa fa-ticket">&nbsp;</i>Registration</th>
				  <th>Registration ID</th>
                  <th><i class="fa fa-dollar">&nbsp;</i>Price</th>
                <!--  <th><i class="fa fa-clock-o">&nbsp;</i>Event Date & Time</th>-->
                  <th><i class="fa fa-film">&nbsp;</i>Event</th>
				  <th><i class="fa fa-film">&nbsp;</i>Booked Date</th>
                  <th ><i class="fa fa-ticket">&nbsp;</i>City</th>
                   <?php if($event_id==17) { ?><th ><i class="fa fa-ticket">&nbsp;</i>Link</th> <?php } ?>
				
                  <!--<th class="td-actions"><i class="fa fa-ticket">&nbsp;</i>Status</th>-->
                  
                </tr>
              </thead>
              <tbody id="div2">
		<?php 
        foreach ($bookings as $bookingdata)
						  { 
						 ?>
                <tr id="div1">
                  <td><?php echo  $bookingdata['m_users_name']; ?></td>
                   <td><?php echo  $bookingdata['m_users_email']; ?></td>
                   <td><?php echo  $bookingdata['m_users_phone']; ?></td>
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
                  <!--<td><?php echo  date('M,d Y',strtotime($bookingdata['event_time'])); ?></td>-->
                  <td><?php echo  $bookingdata['m_events_name']; ?></td>
				  <td><?php echo  date('M,d Y',strtotime($bookingdata['m_users_register_date'])); ?></td>
                  <td><?php echo  $bookingdata['city']; ?></td>
                  <?php if($event_id==17) { ?> <td><?php echo  $bookingdata['link']; ?></td> <?php } ?>
				
        
                  
                </tr>
				<?php } 	?>
				
			  </tbody>
            </table>
	
          </div>
            
            
        </div>
      </div>

    </div>

</section>
<?php }else {  echo "Please Select one Event";} ?>

