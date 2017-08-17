<html lang="en">
<head>
<meta charset="utf-8">
<title>Nata Event Calendar</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/colorbox.css"/>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.colorbox-min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-4">
        <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive"/></a> </div>
      </div>
      <div class="col-md-6 col-xs-8">
        <div class="navbar-right">
          <p class="member-tab">Welcome <?php echo $this->session->userdata('user_name'); ?> <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a> </p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="member-home">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Event Calender</li>
            </ol>
          </div>
          <div class="panel-body">
            <div class="calender" > <?php echo $notes;?> </div>
            <div class="event-details">
              <h2 class="s_date">Detail Event <?php echo "$day $month $year";?></h2>
              <div class="detail_event">
                <?php 
					if(isset($events)){
						$i = 1;
						foreach($events as $e){
							$myurl=base_url()."admin/calup/".$e['id'];
                                                        $eic="css/images/edit.png";
						 if($i % 2 == 0){
								echo '<div class="info1"><h4><img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4>'."<a href=".$myurl."><img title='Add image for event' class='eic' src='".base_url().$eic."'></a>".'<p>'.$e['event_title'].'</p>'.'<p>'.$e['event'].'</p></div>';
							}else{
								echo '<div class="info2"><h4><img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4>'."<a href=".$myurl."><img title='Add image for event' class='eic' src='".base_url().$eic."'></a>".'<p>'.$e['event_title'].'</p></div>';
							} 
							$i++;
						}
					}else
					{
						echo '<div class="message"><h4>No Event</h4><p>There\'s no event in this date</p></div>';
					}
				?>
                <input type="button" name="add" value="Add Event" val="<?php echo $day;?>" class="add_event"/>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
		$(".detail").live('click',function(){
			$(".s_date").html("Detail Event for "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '<input type="button" name="add" value="Add Event" val="'+day+'" class="add_event"/>';
                        var myurl= <?php base_url()?>'admin/calup/';
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
								html = html+'<div class="info1"><h4><img src="<?php echo base_url();?>css/images/delete.png" class="delete" alt="" title="delete this event" day="'+day+'" val="'+value.id+'" /></h4><p>'+value.event_title+'</p>'+
								'<a class="myedit" href="<?php echo base_url();?>admin/calup/'+value.id+'"><img title="Add image" class="edit" src="<?php echo base_url();?>css/images/edit.png"/></a>'+'</div>';
							}else{
								html = html+'<div class="info2"><h4><img src="<?php echo base_url();?>css/images/delete.png" class="delete" alt="" title="delete this event" day="'+day+'" val="'+value.id+'" /></h4><p>'+value.event_title+'</p>'+
								'<a class="myedit" href="<?php echo base_url();?>admin/calup/'+value.id+'"><img title="Add image" class="edit" src="<?php echo base_url();?>css/images/edit.png"/></a>'+'</div>';
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
					url: "<?php echo site_url("admin/delete_event");?>",
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
					href: '<?php echo site_url('admin/add_event');?>',
					data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>, day: $(this).attr('val')}
			});
		});
		$( document ).on( "click", ".detail", function() {
		$.colorbox({ href: '.detail_event ', inline: true, 
			     width: 500, height: 500, scrolling: false, opacity:.8 });
	});
</script>
</body>
</html>