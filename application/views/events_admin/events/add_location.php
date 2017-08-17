<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading"><i class="icon-user"></i>
              <h3>Add Location</h3>
            </div>
            <div class=" panel-body">
              <form action="<?php echo base_url()?>events_admin/index/insertlocation" method="post" enctype="multipart/form-data" id="add_event" class="form-horizontal">
                <fieldset>
                  <div class="form-group">
                    <label class="control-label col-md-2" for="location">Location</label>
                    <div class=" col-md-6">
                      <input type="text" name="location" id="location" class=" form-control" value="" required>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="control-label col-md-2" for="location">Location Email</label>
                    <div class=" col-md-6">
                      <input type="email" name="location_email" id="location_email" class=" form-control" required>
                    </div>
                  </div>
                  <div class="panel-footer">
                  <div class="form-actions">
				  <input type="submit" name="submit" id="submit" class="btn btn-primary">
                  </div></div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mb300"></div>
</div>
