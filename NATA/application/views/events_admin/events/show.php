<section>
  <div class="container">
    <div class="row">
      <div class=" col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4><i class="fa fa-search-plus">&nbsp;</i>Select to get details</h4>
          </div>
          <div class="panel-body">
          <form action="<?php echo base_url()?>events_admin/repoting/show" method="post" class="form-inline">
            <div class="form-group col-md-6">
			<div class="input-group col-md-12">
                            <select id="event_name" name="event_name" class="form-control col-md-6" required>
				<option value="">Select Event</option>
		        <option value="18">NATA IDOL - Second Round</option>
		        <option value="17">NATA Short Film Contest</option>
		        <option value="16">NATA IDOL - Dallas, TX</option>
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

