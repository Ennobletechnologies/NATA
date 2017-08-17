<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/news-banner.jpg" class="img-responsive"/></div>
<div class="inner-page">
  <div class="container inner-content">
      <div class="row">
      <div class="col-md-9 news-block">
        <div class="row">
		<?php foreach ($news_info as $rec_news){ ?>
          <div class="news-heading1">
            <h4><?php echo strip_slashes(substr($rec_news['news_title'],0,77)); ?></h4>
          </div>
          <div class="col-md-8 margin-bottom-10 col-xs-push-2 "> <img src="<?php echo base_url(); ?>public/News/<?php echo $rec_news['news_img']; ?>" class="img-responsive text-center" alt="news"></div>
          <div class="col-md-12">
            <?php echo strip_slashes($rec_news['news_desc']); ?>
            <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
          </div>
		   <?php } ?>
        </div>
      </div>
      <div class="col-md-3 latest-videos">
        <div class="news-heading">
          <h4>Latest Videos</h4>
        </div>
        <div class="row">
		<?php foreach ($latest_videos as $rec_news){ ?>
          <div class="col-md-12"><img src="<?php echo base_url(); ?>public/News/<?php echo $rec_news['news_img']; ?>">
            <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,77)); ?></h5>
            <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
          </div>
		  <?php } ?>
          <div class="col-md-12">
            <h3>Grand Sponcers</h3><br>	<img src="<?php echo base_url(); ?>img/prem_mallanna.jpg" class="img-responsive">
           
          </div>
          <div class="col-md-12">
          <marquee behavior="alternate"><h5 style="background:#C66; padding:10px; text-align:center; color:#fff">News Upateds
          </h5></marquee>
          </div>
		  <?php foreach ($view_news as $rec_news){ ?>
          <div class="col-md-12">
              <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,77)); ?></h5>
              <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
              <p><?php echo strip_slashes(substr($rec_news['news_desc'],0,77)); ?></p>
              <a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>" class="btn slide_btn text-right">Read More</a> </div>
			  <?php } ?>
    
              
        </div>
        
        </div>
    </div>
    <hr/>
  <div class="row tv-coverage">
			
      <div class="news-heading">
        <h4>TV Coverage</h4>
      </div>
	  <?php foreach ($tv_cover as $key=>$rec_news){ ?>
      <div class="col-md-4">
        <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,50)); ?></h5>
        <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
        <img src="<?php echo base_url(); ?>public/News/<?php echo $rec_news['news_img']; ?>" class="img-responsive" alt="news"> 
		<a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>" class="btn slide_btn">See More</a> </div>

		 <?php } ?>
    </div>
  </div>
</div>