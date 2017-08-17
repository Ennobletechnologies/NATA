<section>
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4><i class="icon-user">&nbsp;</i>Edit User Details</h4>
            </div>
            <br>
       <form action="<?php echo base_url()?>events_admin/index/updateUsers" id="edit-profile" class="form-horizontal" method="post">
			   <?php foreach($users as $user){?>
                <fieldset>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="usernamee">User Name</label>
                    <div class="input-group col-md-6">
                   <input type="text" class="form-control" name="m_users_name" id="username" value="<?php echo $user['m_users_name'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label  col-md-3" for="email">Email</label>
                    <div class="input-group col-md-6">
                  <input type="text" class="form-control" id="email" name="m_users_email" value="<?php echo $user['m_users_email'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="contact">Contact Number</label>
                    <div class="input-group col-md-6">
                  <input type="text" class="form-control" name="m_users_phone" id="contact" value="<?php echo $user['m_users_phone'] ?>">
				  <input type="hidden" name="m_users_id" value="<?php echo $user['m_users_id'] ?>">
                    </div>
                  </div>
                  <div class="panel-footer">
                    <div class="form-actions">
                      <input type="submit" name="submit" class="btn btn-primary" value="Save">
                    </div>
                  </div>
                </fieldset>
				 <?php } ?>
              </form>
          </div>
        </div>
      </div>
    </div>
    <div class="mb300"></div>
</section>