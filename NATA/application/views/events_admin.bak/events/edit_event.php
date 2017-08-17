<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading"> <i class="icon-user"></i>
              <h3><i class="fa fa-pencil">&nbsp;</i>Edit Events</h3>
            </div>
            <br>
            <form action="<?php echo base_url()?>events_admin/index/updateEvent" method="post" enctype="multipart/form-data" id="add_event" class="form-horizontal">
			<?php foreach($editdata as $ed){ ?>
              <fieldset>
                <div class="form-group">
                  <label class="control-label col-md-3" for="eventname">Event Name</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" name="eventname" id="eventname" value="<?php echo $ed['m_events_name']?>" required>
                  </div>
                </div>
				
                <!--<div class="form-group" id="content" >
                  <label for="dtp_input1" class="col-md-3 control-label">Event Date</label>
				  <div class="col-md-6">
				  <?php foreach($eventtimings as $etime){ ?>
                  <div class="input-group date form_datetime" data-date="" data-date-format="d M Y - H:ii p" data-link-field="dtp_input1">
				    <input class="form-control" id="" name="datetimepicker[]" size="16" type="text" value="<?php echo date("Y-m-d H:i:s", strtotime($etime['m_event_datetime'])); ?>" readonly>
					<span class="input-group-addon"><span class="fa fa-remove"></span></span> <span class="input-group-addon"><span class="fa fa-calendar"></span></span> 
					</div>
			<?php } ?>
			</div>
                </div>
                <a id="cmd" style="margin-left:290px; color:#f04;"><i class="fa fa-plus">&nbsp;</i>Addmore Dates</a>-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="venue">Venue</label>
                  <div class="input-group col-md-6">
                    <textarea name="venue" id="venue" rows="5" class="form-control"><?php echo $ed['m_events_venue']?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="comment">Event Information</label>
                  <div class="input-group col-md-6">
                    <textarea rows="5" class="form-control" name="eventinfo" id="eventinfo"><?php echo $ed['m_events_info']?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="venue">Image</label>
                  <div class="input-group col-md-6">
                    <input type="file" class="form-control" name="picture" id="picture"><a title="event picture" target="_blank" href="<?php echo base_url()?>public/uploads/admin_events/thumb/<?php echo $ed['m_events_pic']?>">show image</a>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="price">Price</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" name="price" id="price" value="<?php echo $ed['m_events_cost']?>">
                  </div>
                </div>
				     <div class="form-group">
                  <label class="control-label col-md-3" for="childprice">Child Ticket Price</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" name="childprice" id="childprice" value="<?php echo $ed['child_ticket_cost']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="price">Number Of Tickets</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" id="number_of_tickets" name="number_of_tickets" value="<?php echo $ed['number_of_tickets']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="price">Location</label>
                  <div class="input-group col-md-6">
                    <select id="sel1" class="form-control" name="location" id="location">
                      <?php foreach($locations as $loc) { ?>
<option value="<?php echo $loc['m_locations_id'];?>" <?php if ($loc['m_locations_id'] == $ed['m_events_loc']) { ?>selected="selected"<?php } ?>><?php echo $loc['m_locations_name'];?></option>
<?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="artistsinfo ">Artists Information</label>
                  <div class="input-group col-md-6">
                    <textarea rows="5" class="form-control" name="artistsinfo" id="artistsinfo"><?php echo $ed['m_events_artists']?></textarea>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="form-actions">
				  <input type="hidden" name="m_events_id" id="" value="<?php echo $ed['m_events_id']?>">
			  <input type="submit" name="submit" id="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
              </fieldset>
			<?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--
<form action="<?php echo base_url()?>events_admin/index/insertevent" method="post" enctype="multipart/form-data" id="add_event">
<?php foreach($editdata as $ed){ ?>
<p>Event Name:<input type="text" name="eventname" id="eventname" value="<?php echo $ed['m_events_name']?>"></p>
<p>Date Time:<input type="text" name="datetime" id="datetime" value="<?php echo $ed['m_events_datetime']?>"></p>
 <?php foreach($eventtimings as $etime) { ?>
 <p><?php echo date("Y-m-d H:i:s", strtotime($etime['m_event_datetime'])); ?></p>
 <?php } ?>
<p>Venue:<textarea name="venue" id="venue"><?php echo $ed['m_events_venue']?></textarea></p>
<p>Event Information:<textarea name="eventinfo" id="eventinfo"><?php echo $ed['m_events_info']?></textarea></p>
<p>Image:<input type="file" name="picture" id="picture"><a title="event picture" target="_blank" href="<?php echo base_url()?>public/uploads/admin_events/thumb/<?php echo $ed['m_events_pic']?>">show image</a></p>
<p>Entry Price:<input type="text" name="price" id="price" value="<?php echo $ed['m_events_cost']?>"></p>
<p>Location:<select name="location" id="location">
<?php foreach($locations as $loc) { ?>
<option value="<?php echo $loc['m_locations_id'];?>" <?php if ($loc['m_locations_id'] == $ed['m_events_loc']) { ?>selected="selected"<?php } ?>><?php echo $loc['m_locations_name'];?></option>
<?php } ?>
</select>
</p>
<input type="hidden" name="m_events_id" id="" value="<?php echo $ed['m_events_id']?>">
<p>Artists Info:<textarea name="artistsinfo" id="artistsinfo"><?php echo $ed['m_events_artists']?></textarea></p>
<p><input type="submit" name="submit" id="submit"></p>
<?php }?>

</form>
-->