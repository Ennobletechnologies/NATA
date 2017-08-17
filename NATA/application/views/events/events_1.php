<div class="inner-page">
<div class="container inner-content">
	<div class="row">
		<div class="col-md-9 col-sm-12 news-block">
		
        			<div class="latest_left">
                    	<div class="news-heading">
                        <h4>Events</h4>
                    </div>
                         <?php foreach ($events_info as $news_info); ?>
                        <div class="latest_content padding-bottom-80">
                        <h4><?php echo strip_slashes($news_info['event_title']); ?></h4>
                        
                        <span class="update"><?php echo $news_info['event_date']; ?></span>
                        <div class="clear"></div>
                        
                        <div class="content_latest">
                        
                       
        <div class="post_txt">
<?php echo strip_slashes($news_info['event']); ?>


</div>
                            <?php if(!empty($news_info['imagename'])){ ?>
                            
<div class="news_img"><img src="<?php echo base_url(); ?>public/event/<?php echo $news_info['imagename']; ?>"/></div>
                            <?php } ?>
                        </div>
                        <div class="clear"></div>
       
    
              </div>
                        
                    </div>
                    
                    
                    <!-- left content-->
                       
        </div>
		
		<div class="col-md-3 col-sm-12">
			<div class="news-heading1"><h4>Facebook</h4></div>
			<div class="row">
          <div class="widget col-md-12">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
          </div>
        </div>
			</div>
     </div>         
    </div><!-- main div end here-->


</div>
