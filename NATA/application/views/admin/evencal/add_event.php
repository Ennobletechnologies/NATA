<?php 
	$h = '<select name="hour" id="hour">';
	$m = '<select name="minute" id="minute">';
	for($i = 0; $i< 60; $i++){
		if($i < 24){
			$h .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
		}
		$m .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
	}
	$h .= '</select>';
	$m .= '</select>';
?>

<div style="width:500px;overflow:auto; color:#000000; margin-bottom:20px;" align="center">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
  <h4>Adding event for <?php echo "$day $month $year"?></h4>
  <div class="spacer"></div>
  <table class="table table-striped">
    <tr>
      <td>Title <span class="require">*</span></td>
      <td>:</td>
      <td><input type="text" name="title" id="title" class="form-control"/></td>
    </tr>
    <tr>
      <td>Event <span class="require">*</span></td>
      <td>:</td>
      <td><textarea name="event" id="event" col="36" rows="3" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td>
        <input type="button" name="save" value="Save" class="save btn btn-success">&nbsp;&nbsp;<input type="button" name="cancel" value="Cancel" class="cancel btn btn-default">
        </td>
    </tr>
  </table>
  <script>	
	$('.cancel').click(function(){
		var data = false;
		$.fn.colorbox.close(data);
	});
	
	$('.save').click(function(){
		if($('#event').val().length > 0){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: "<?php echo site_url("evencal/do_add");?>",
				data:{<?php echo "year:$year,mon:$mon,day:$day";?>, hour:$('#hour').val(), minute: $('#minute').val(), event:$('#event').val(), title:$('#title').val()},
				success: function(data) {
					if(data.status){
						//$.fn.colorbox.close(data);
						window.location = '<?php echo site_url("admin/detail/$year/$mon/$day")?>';
					}else{
						$('.spacer').html(data.message);
					}
				}
			});
		}else{
			$('.spacer').html('Please complete the field')
			$('#event').attr('class','error_require');
		}
	});
	</script> 
</div>
