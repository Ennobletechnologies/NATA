<section>
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading"><h4> 
            <i class="fa fa-pencil"></i>
              Edit Location</h4>
            </div>            
            <div class="panel-body">
     <form action="<?php echo base_url()?>events_admin/index/updateLocation" id="edit-profile" class="form-horizontal" method="post">
			  <?php foreach($locations as $loc) {?>
                <fieldset>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="location">Location</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control"  name="location" id="location" value="<?php echo $loc['m_locations_name'];?>" required>
					  <input type="hidden" class="form-control"  name="location_id" id="location_id" value="<?php echo $loc['m_locations_id'];?>">
                    </div>
                  </div>
			<div class="form-group">
                    <label class="control-label col-md-2" for="location">Location Email</label>
                    <div class=" col-md-6">
                      <input type="email" name="location_email" id="location_email" value="<?php echo $loc['location_email'];?>" class=" form-control" required>
                    </div>
                  </div>				  
                   <div class="panel-footer">                  
                  <div class="form-actions">
                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">
                  </div></div>
                </fieldset>
			  <?php } ?>
              </form>
          </div>   </div>         
        </div>
      </div>      
    </div>
  <div class="mb300"></div>
</section>