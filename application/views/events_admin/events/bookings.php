<section>
  <div class="container">
    <div class="row">
      <div class=" col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4><i class="fa fa-search-plus">&nbsp;</i>Search User to get details</h4>
          </div>
          <div class="panel-body">
          <form action="<?php echo base_url()?>events_admin/index/show_bookings" method="post" class="form-inline">
            <div class="form-group col-md-6">
			<div class="input-group col-md-12">
            <select id="event_name" name="event_name" class="form-control col-md-6">
				<option value="">Select Event</option>
		<?php foreach($events as $event) {?>
        <option value="<?php echo $event['m_events_id'] ?>"><?php echo $event['m_events_name'] ?></option>
		<?php } ?>
                </select>
             </div>
              
            </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          </form>
        </div>
		</div>
      </div>
    </div>
  </div>
  



</section>

