<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
      <div class=" col-md-12">  
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3><i class="fa fa-map-marker">&nbsp;</i>Locations</h3>
              
			   <a href="<?php echo base_url()?>events_admin/index/add_location"><h3 class="pull-right btn btn-success btn-small">Add Location</h3></a>            
			</div>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><i class="fa fa-user">&nbsp;</i>Name Of Location</th>
					<th><i class="fa fa-user">&nbsp;</i>Email Of Location</th>
					<th width="150"><i class="fa fa-pencil">&nbsp;</i>Edit</th>
					<th width="150"><i class="fa fa-trash">&nbsp;</i>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
				<?php foreach($locations as $loc) { ?>

                  <tr>
                    <td><?php echo $loc['m_locations_name'];?></td>
					<td><?php echo $loc['location_email'];?></td>
					<td class="td-actions"><a href="<?php echo base_url()?>events_admin/index/editLocations/<?php echo $loc['m_locations_id'];?>" class="btn btn-small btn-success"><i class="fa  fa-pencil"> </i></a></td>
					<td>
					<a onclick="return deleletconfig()" href="<?php echo base_url()?>events_admin/index/DelLocations/<?php echo $loc['m_locations_id'];?>" class="btn btn-danger btn-small"><i class="fa fa-remove"> </i></a></td>
                   
				  </tr>
				 <?php  }?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
        
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<!--
        <?php if($this->session->flashdata('success_msg')) {?>
         
 
   <?php echo $this->session->flashdata('success_msg'); ?>

    <?php  }?>
<?php foreach($locations as $loc) { ?>
<?php echo $loc['m_locations_name']." ";?>
<a href="<?php echo base_url()?>events_admin/index/editLoc/<?php echo "LO000".$loc['m_locations_id'];?>">Edit</a>
<a href="<?php echo base_url()?>events_admin/index/deleteLoc/<?php echo "LO000".$loc['m_locations_id'];?>">Delete</a><br>
<?php }?>
-->