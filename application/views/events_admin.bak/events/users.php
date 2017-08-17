 <div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3><i class="fa fa-list">&nbsp;</i>User Details</h3>
            </div>
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th><i class="fa fa-user">&nbsp;</i>User Name</th>
                  <th><i class="fa fa-envelope">&nbsp;</i>Email-id</th>
                  <th width="150"><i class="fa fa-phone">&nbsp;</i>Contact number</th>
                  <th width="100"><i class="fa fa-pencil">&nbsp;</i>Edit</th>
                  <th width="100"><i class="fa fa-trash">&nbsp;</i>Delete</th>
                
                </tr>
              </thead>
              <tbody>
			  <?php foreach($users as $user){?>
                <tr>
                  <td><?php echo $user['m_users_name'] ?></td>
                  <td><?php echo $user['m_users_email'] ?></td>
                  <td ><?php echo $user['m_users_phone'] ?></td>
                  <td class="td-actions" align="center"><a href="<?php echo base_url()?>events_admin/index/editUsers/<?php echo $user['m_users_id'] ?>" class="btn btn-small btn-success"><i class="fa fa-pencil"> </i></a></td>
                  <td align="center"><a onclick="return deleletconfig()" href="<?php echo base_url()?>events_admin/index/deleteUsers/<?php echo "USR00".$user['m_users_id'] ?>" class="btn btn-danger btn-small"><i class="fa fa-remove"> </i></a></td>
                
                </tr>
			  <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>