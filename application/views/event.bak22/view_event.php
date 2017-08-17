<header class="inner-carousel">
  <div class="inner-slider"> <img src="<?php echo base_url()?>assets/images/3.jpg" class="img-responsive">
    <div class="container">
      <div class="event-heading">
	  <?php foreach($events as $event) { ?>
        <h2><?php echo $event['m_events_name'];?></h2>
		        <h5>From <?php echo date('M,j Y h:i:s a' ,strtotime($event['m_events_datetime']));?></h5>
	  <?php }?>
      </div>
    </div>
  </div>
</header>
<div class="container mt40">
  <div class="col-lg-8">
  <div class="navigation">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>event/index">Home</a></li>
        <li><?php echo $event['m_events_name'];?></li> 
       </ol>
    </div>
    <p class="tickets-tab"><a href="#">Buy Tickets</a></p>
	<?php foreach($events as $event) { ?>
    <div class="mt20">
      <h5><?php echo $event['m_events_venue'];?></h5>
      <p></p>
    </div>
		<?php }?>
    <table border="0" class="table table-striped table-events">
      <thead>
        <tr>
          <th width="20%">Time</th>
          <th width="20%">No. of Tickets</th>
          <th width="20%">Entry Price</th>
          <th width="20%">Action</th>
        </tr>
      </thead>
      <tbody>
	  <?php foreach($eventtimings as $etime) { ?>
        <tr>
		<form action="<?php echo base_url()?>event/index/booktickets/<?php echo $etime['m_event_date_id'] ?>" method="post" id="booktiket" name="booktiket" onsubmit="return myFunction();">
<?php if($etime['m_events_id']==15) { ?>
<td><?php echo date("D j M, g:i a", strtotime($etime['m_event_datetime'])); ?> - 10:00 pm</td>
<?php } else {?>
<td><?php echo date("D j M, g:i a", strtotime($etime['m_event_datetime'])); ?></td>
<?php }?>
<!-- <td><?php echo date("D j M, g:i a", strtotime($etime['m_event_datetime'])); ?></td>-->
          <td><div class="input-group">
              <input id="number_of_tickets" type="text" value="1" name="number_of_tickets" >
              
            </div>
			<div class="input-group">
			<a class="childtick">Kids Tickets</a>
			<div class="childdiv " style="display:none;">
			<input type="text" name="childtickets" id="childtick" placeholder="Num of Child Tickets.Ex:1" value="0">
			</div>
			</div>
          </td>
          <td>$<?php echo $etime['m_events_cost'] ?>
		  
		  	<div class="childdiv" style="display:none;">
			<br><span></span><br>
			$<?php echo $etime['child_ticket_cost'] ?> 
			</div>
			
		  </td>
		  <input type="hidden" name="m_event_date_id" id="m_event_date_id" value="<?php echo $etime['m_event_date_id'] ?>">
<input type="hidden" name="m_event_datetime" id="m_event_datetime" value="<?php echo $etime['m_event_datetime'] ?>">
<input type="hidden" name="m_events_cost" id="m_events_cost" value="<?php echo $etime['m_events_cost'] ?>">
<input type="hidden" name="m_events_id" id="m_events_id" value="<?php echo $etime['m_events_id'] ?>">
<input type="hidden" name="m_events_name" id="m_events_name" value="<?php echo $event['m_events_name'] ?>">
<input type="hidden" name="child_ticket_cost" id="child_ticket_cost" value="<?php echo $etime['child_ticket_cost'] ?>"/>
          <td class="booking-btn"><input type="submit" name="book" value="Book Tickets" id="submit" class="btn"></td>
		  </form>
        </tr>
       <?php }?>
      </tbody>
    </table>
  </div>
  <div class="col-lg-4">
  <?php foreach($events as $event) { ?>
    <h4>Event Description</h4>
    <p><?php echo $event['m_events_info'];?></p>
  <?php } ?>
      </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.bootstrap-touchspin.js"></script> 
<script>
	  $("input[name='number_of_tickets']").TouchSpin({
      verticalbuttons: true,
      verticalupclass: 'glyphicon glyphicon-plus',
      verticaldownclass: 'glyphicon glyphicon-minus'
    });
</script> 

<script>
function myFunction() {
    var x = document.forms['booktiket']['number_of_tickets'].value;
	x1 = document.getElementById("number_of_tickets").value;
    if (x == 0 || x == "0") {
        alert("minimum 1 ticket need to select");
        return false;
    }
}
</script>
<script>
$(document).ready(function(){
    $(".childtick").click(function(){
	
        $(".childdiv").toggle();
		
    });
});
</script>
