<div class="inner-page">
    <div class="container inner-content">

        <div class="latest_left">
            <div class="latest_head"><h1>Videos</h2></div>





            <div class="clear"></div>

            <div class="news_content">

                <?php foreach ($videos as $key => $vid) { ?>

                    <div class="filmy_news">
                        <div class="news_col">
                            <div class="news_txt">
                                <div class="news">
                                    <a href="<?php echo base_url(); ?>gallery/view/<?php echo $vid['videos_id']; ?>" style="text-decoration:none;"><h5><?php echo strip_slashes($vid['videos_title']); ?></h5></a>
                                    <span class="update" style="margin:0px;"><?php echo $vid['updated_date']; ?></span>
                                    <div class="news_img"><img src="<?php echo $vid['videos_img']; ?>"/></div>

    <!--<div class="news_cont"><?php echo strip_slashes(substr($vid['videos_desc'], 0, 10)); ?>  </div>-->


                                    <span class="read_more"><a href="<?php echo base_url(); ?>gallery/view/<?php echo $vid['videos_id']; ?>"> Read More...</a></span>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>







            </div>

        </div>






    </div><!-- main div end here-->



</div>






/* ---------------------- */
<div class="inner-page">
<div class="container inner-content">
    			
        			<div class="">
                    	<?php foreach ($fullvideo as $news_info); ?>
                        <div class="">
                        <h4><?php echo strip_slashes($news_info['videos_title']); ?></h4>
                        
                        <span class="update"><?php echo $news_info['updated_date']; ?></span>
                        <div class="clear"></div>
                        
                        <div class="">
                        
                       
        <div class="">
<?php echo strip_slashes($news_info['videos_desc']); ?>


</div>

                        </div>
                          
    
              </div>
                        
                    </div>
                    
                    
                          
    </div><!-- main div end here-->


</div>