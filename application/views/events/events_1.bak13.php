<div class="inner-page">
<div class="container inner-content">

    			<div class="latest_stories padding-bottom-200">
        			<div class="latest_left">
                    	<div class="news-heading">
                        <h4>Events</h4>
                    </div>
                         <?php foreach ($events_info as $news_info); ?>
                        <div class="latest_content">
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
              
              
    </div><!-- main div end here-->


</div>
<div class="clearfix border-dot-bottom"></div>