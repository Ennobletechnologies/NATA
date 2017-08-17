<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/newsletter-banner.jpg" class="img-responsive"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <div class="col-md-4 col-sm-5">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <li class="active">Events</li>
      </ol>
    </div>
    <div class="col-md-8 col-sm-7 hidden-xs inner-marquee">
      <marquee behavior="scroll" scrollamount="7">
      <?php foreach ($view_news1 as $key => $rec_news):?>
      <span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?>
      <?php endforeach;?>
      </marquee>
    </div>
  </div>
</div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="latest_stories">
      <div class="latest_left">
        <div class="latest_head news-heading">
          <h4 class="">
          Events
          </h4>
        </div>
        <div class="clear"></div>
        <div class="news_content">
          <?php foreach ($view_events as $key=>$rec_news){ ?>
          <div class="filmy_news">
            <div class="news_col">
              <div class="news_txt">
                <div class="news"> <a href="<?php echo base_url(); ?>events/view/<?php echo $rec_news['idevent']; ?>" style="text-decoration:none;">
                  <h5><?php echo strip_slashes($rec_news['event_title']); ?></h5>
                  </a> <span class="update" style="margin:0px;"><?php echo date('M j Y', strtotime($rec_news['event_date'])); ?></span> <span class="read_more"><a href="<?php echo base_url(); ?>events/view/<?php echo $rec_news['idevent']; ?>"> Read More...</a></span> </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      
      <!-- left content--> 
      <!--<div class="latest_right">
                    	<div class="latest_add">
                   	    <img src="<?php echo base_url(); ?>public/images/add_4.jpg" width="336" height="280" /></div>
                        
                        <div class="related_stories">
                        	<div class="related_head"><span>related stories</span></div>
                            
                            <ul>
                            <?php foreach ($related_news as $key=>$r_news){ ?>
            	<li><a href="<?php echo base_url(); ?>news/view/<?php echo $r_news['news_id']; ?>/<?php echo urlencode($r_news['news_title']); ?>"><?php echo strip_slashes($r_news['news_title']); ?></a></li>
            	<?php } ?>             
            </ul>
            <span class="read_more"><a href="#" style="padding:0 0 10px 0; margin:0 10px 0 0">More..</a></span>
            
                   	    </div>
                        
                    </div>--> 
      
    </div>
  </div>
  <!-- main div end here--> 
  
</div>
