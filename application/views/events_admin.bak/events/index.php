<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3><i class="fa fa-list">&nbsp;</i>List Of Events</h3>
              <div class="pull-right"> <a href="<?php echo base_url()?>events_admin/index/add_event" class="btn btn-success">Add Event</a> </div>
            </div>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><i class="fa fa-film">&nbsp;</i>Event Name</th>
                    <th width="100"><i class="fa fa-pencil">&nbsp;</i>Edit</th>
                    <th width="100"><i class="fa fa-trash-o">&nbsp;</i>Delete</th>
                 
                  </tr>
                </thead>
                <tbody>
				<?php foreach($events as $event) { ?>
                  <tr>
                    <td><?php echo $event['m_events_name'];?></td>
                    <td class="td-actions" align="center"><a href="<?php echo base_url()?>events_admin/index/edit/<?php echo "EV000".$event['m_events_id'];?>" class="btn btn-small btn-success"><i class="fa  fa-pencil"> </i></a></td>
                    <td align="center"><a href="<?php echo base_url()?>events_admin/index/delete/<?php echo "EV000".$event['m_events_id'];?>" class="btn btn-danger btn-small"><i class="fa  fa-remove"> </i></a></td>
              
                  </tr>
				
                  <?php }?>
                </tbody>
              </table>
          </div>
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
<script type="text/javascript">
			function acc_status_chkd(aid)
					{   
			var link="<?php echo base_url();?>" ;
			$.ajax({
                    type: "POST",
                    context: "application/json",
                    data: {id:aid,status:1},
                    url: link + "index.php/events_admin/index/updatestatus",
                    success: function(msg) 
                    {
                        //oTable.fnDraw();
						//alert("status0");
                    }
                })
					}
			function acc_status_unchkd(aid)
					{
			var link="<?php echo base_url();?>" ;
			$.ajax({
                    type: "POST",
                    context: "application/json",
                    data: {id:aid,status:0},
                    url: link + "index.php/events_admin/index/updatestatus",
                    success: function(msg) 
                    {
                        	//	alert("status1");
                    }
                })
					}
					</script>
<!--
        <?php if($this->session->flashdata('success_msg')) {?>
         
 
   <?php echo $this->session->flashdata('success_msg'); ?>

    <?php  }?>
<?php foreach($events as $event) { ?>
<a href="<?php echo base_url()?>events_admin/index/get_event/<?php echo "EV000".$event['m_events_id'];?>"><?php echo $event['m_events_name'];?></a>
<a href="<?php echo base_url()?>events_admin/index/edit/<?php echo "EV000".$event['m_events_id'];?>">Edit</a>
<a href="<?php echo base_url()?>events_admin/index/delete/<?php echo "EV000".$event['m_events_id'];?>">Delete</a><br>
<?php }?>
-->