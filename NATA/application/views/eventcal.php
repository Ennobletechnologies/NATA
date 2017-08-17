<style type="text/css">
.event_detail {
	display: none !important;
}
</style>
<div class="page-full-slider">
  <div class="page-inner-slider">
    <div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/news-banner.jpg" class="img-responsive"/></div>
  </div>
</div>
<div class="main block1">
  <div class="container inner-content">
    <div class="row margin-bottom-40">
      <div class="col-md-9 col-sm-12 news-block">
        <div class="row">
          <div class="col-md-12">
          <div class="news-heading1">
            <h4>Event Calender</h4>
          </div>
            <div id="evencal">
              <div class="calendar-big"> <?php echo $notes;?> </div>
              <div class="event_detail">
                <h2 class="s_date">Detail Event <?php echo "$day $month $year";?></h2>
                <div class="detail_event" style="display:none;">
                  <?php 
					if(isset($events)){
						$i = 1;
						foreach($events as $e){
						 if($i % 2 == 0){
								echo '<div class="info1"><h4>'.$e['time'].'</h4><p>'.$e['event'].''.$e['id'].'</p></div>';
							}else{
								echo '<div class="info2"><h4>'.$e['time'].'</h4><p>'.$e['event'].''.$e['id'].'</p></div>';
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
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 latest-videos">
        <div class="news-heading">
          <h4>Get in Touch with FB</h4>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <div class="row">
          <div class="widget col-md-12">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
