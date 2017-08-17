<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading"> <i class="icon-user"></i>
              <h3><i class="fa fa-plus">&nbsp;</i>Add Events</h3>
            </div>
            <br>
            <form action="<?php echo base_url()?>events_admin/index/insertevent" method="post" enctype="multipart/form-data" id="add_event" class="form-horizontal">
              <fieldset>
                <div class="form-group">
                  <label class="control-label col-md-3" for="eventname">Event Name</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" id="eventname" name="eventname" value="Newyear Celebrations" required>
                  </div>
                </div>
      
                <div class="form-group" id="content" >
                  <label for="dtp_input1" class="col-md-3 control-label">Event Date</label>
                  <div class="input-group col-md-6 date form_datetime" data-date="2015-01-01T12:00:01Z" data-date-format="mm/dd/yyy HH:ii:ss" data-link-field="dtp_input1">
                    <input class="form-control" name="datetimepicker[]" id="" size="16" type="text" value="<?php echo date('Y-m-d H:i:s');?>" readonly required>
                    <span class="input-group-addon"><span class="fa fa-remove"></span></span> <span class="input-group-addon"><span class="fa fa-calendar"></span></span> </div>
                  <input type="hidden" value="0" id="dtp_input1" />
                </div>
                <a id="cmd" style="margin-left:290px; color:#f04;"><i class="fa fa-plus">&nbsp;</i>Addmore Dates</a>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="venue">Venue</label>
                  <div class="input-group col-md-6">
                    <textarea rows="5" id="venue" name="venue" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="eventinfo">Event Information</label>
                  <div class="input-group col-md-6">
                    <textarea rows="5" name="eventinfo" id="eventinfo" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="venue">Image</label>
                  <div class="input-group col-md-6">
                    <input type="file" name="picture" id="picture"class="form-control" required>
					<small>Best Image dimensions are 500x350(width x height)</small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="price">Price</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" name="price" id="price" value="500" required>
                  </div>
                </div>
				     <div class="form-group">
                  <label class="control-label col-md-3" for="childprice">Child Ticket Price</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" name="childprice" id="childprice" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="tickets">Number Of Tickets</label>
                  <div class="input-group col-md-6">
                    <input type="text" class="form-control" id="tickets" name="tickets" value="10" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="location">Location</label>
                  <div class="input-group col-md-6">
                    <select id="sel1" name="location" id="location" class="form-control" required>
                     <?php foreach($locations as $loc) { ?>
<option value="<?php echo $loc['m_locations_id'];?>"><?php echo $loc['m_locations_name'];?></option>
<?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="artistsinfo ">Artists Information</label>
                  <div class="input-group col-md-6">
                    <textarea rows="5" name="artistsinfo" id="artistsinfo" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="form-actions">
				  <input type="submit" name="submit" class="btn btn-primary" id="submit" value="save">
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!--
<form action="<?php echo base_url()?>events_admin/index/insertevent" method="post" enctype="multipart/form-data" id="add_event">
<p>Event Name:<input type="text" name="eventname" id="eventname"></p>
<p>Date Time:<input type="text" name="datetime" id="datetime"></p>
<p>Venue:<textarea name="venue" id="venue"></textarea></p>
<p>Event Information:<textarea name="eventinfo" id="eventinfo"></textarea></p>
<p>Image:<input type="file" name="picture" id="picture"></p>
<p>Entry Price:<input type="text" name="price" id="price"></p>
<p>Location:<select name="location" id="location">
<?php foreach($locations as $loc) { ?>
<option value="<?php echo $loc['m_locations_id'];?>"><?php echo $loc['m_locations_name'];?></option>
<?php } ?>
</select>
</p>
<p>Artists Info:<textarea name="artistsinfo" id="artistsinfo"></textarea></p>
<p><input type="submit" name="submit" id="submit"></p>

</form>-->
