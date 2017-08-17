<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Event Calendar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/colorbox.css"/>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.colorbox-min.js"></script>
<style type="text/css">
.event_detail
{
display:none !important;
}
</style>
</head>
<body>
	<div id="evencal">
		<div class="calendar">
			<?php echo $notes;?>
			</div>
		<div class="event_detail">
			<h2 class="s_date">Detail Event <?php echo "$day $month $year";?></h2>
			<div class="detail_event" style="display:none;">
				<?php 
					if(isset($events)){
						$i = 1;
						foreach($events as $e){
						 if($i % 2 == 0){
								echo '<div class="info1"><h4>'.$e['time'].'</h4><p>'.$e['event'].'</p></div>';
							}else{
								echo '<div class="info2"><h4>'.$e['time'].'</h4><p>'.$e['event'].'</p></div>';
							} 
							$i++;
						}
					}else{
						echo '<div class="message"><h4>No Event</h4><p>There\'s no event in this date</p></div>';
					}
				?>
				</div>
		</div>
	</div>
	<script>
		$(".detail").live('click',function(){
			$(".s_date").html("Detail Event for "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("evencal/detail_event");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'</h4><p>'+value.event+'</p></div>';
							}else{
								html = html+'<div class="info2"><h4>'+value.time+'</h4><p>'+value.event+'</p></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html+add;
					$( ".detail_event" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
		});
		$(".delete").live("click", function() {
			if(confirm('Are you sure delete this event ?')){
				var deleted = $(this).parent().parent();
				var day =  $(this).attr('day');
				var add = '<input type="button" name="add" value="Add Event" val="'+day+'" class="add_event"/>';
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: "<?php echo site_url("evencal/delete_event");?>",
					data:{<?php echo "year: $year, mon: $mon";?>, day: day,del: $(this).attr('val')},
					success: function(data) {
						if(data.status){
							if(data.row > 0){
								$('.d'+day).html(data.row);
							}else{
								$('.d'+day).html('');
								$( ".detail_event" ).fadeOut("slow").fadeIn("slow").html('<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>'+add);
							}
							deleted.remove();
						}else{
							alert('an error for deleting event');
						}
					}
				});
			}
		});
		$(".add_event").live('click', function(){
			$.colorbox({ 
					overlayClose: false,
					href: '<?php echo site_url('evencal/add_event');?>',
					data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>, day: $(this).attr('val')}
			});
		});
		/*$( document ).on( "click", ".detail", function() {
			$( ".event_detail" ).show( "slow", function() {
    // Animation complete.
			});
		});
		
		$(".detail").live('click', function(){
			$.colorbox({ 
					overlayClose: false,
					$( ".event_detail" ).show( "slow", function() {
			});
		});*/
	$( document ).on( "click", ".detail", function() {
		$.colorbox({ href: '.detail_event ', inline: true, 
			     width: 400, height: 260, scrolling: false, opacity:.8 });
			});
	
</script>
</body>
</html>