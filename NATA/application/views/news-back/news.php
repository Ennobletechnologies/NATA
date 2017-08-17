<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/news-banner.jpg" class="img-responsive"/></div>
<div class="inner-page">
  <div class="container inner-content">
  <div class="row">
    <div class="col-md-9 news-block">
      <div class="row">
        <div class="news-heading1">
          <h4>Latest Updates</h4>
        </div>
        <div class="col-md-8"> 
		<?php foreach ($top_one_news as $key=>$rec_news){ ?>
		<img src="<?php echo base_url(); ?>public/News/<?php echo $rec_news['news_img']; ?>" class="img-responsive" alt="news">
          <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,80)); ?></h5>
          <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
          <p><?php echo strip_slashes(substr($rec_news['news_desc'],0,90)); ?></p>
          <a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>" class="btn slide_btn">Read More</a> 
		  <?php } ?>
		 </div>
        <div class="col-md-4 additional-news">
		<?php foreach ($view_news as $key=>$rec_news){ ?>
          <div class="latest-news">
            <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,80)); ?></h5>
            <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
            <p><?php echo strip_slashes(substr($rec_news['news_desc'],0,90)); ?></p>
            <a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>" class="btn slide_btn">Read More</a> 
			
		</div>
         
			 <?php } ?>
        </div>
      </div>
    </div>
    <div class="col-md-3 latest-videos">
      <div class="news-heading">
        <h4>Latest Videos</h4>
      </div>
	  <?php foreach ($latest_videos as $key=>$rec_news){ ?>
      <div class="row">
        <div class="col-md-12"><img src="<?php echo base_url(); ?>public/News/<?php echo $rec_news['news_img']; ?>">
          <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,50)); ?></h5>
          <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
        </div>
      </div>
      <?php } ?>
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
		<a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>" class="btn slide_btn">Read More</a> </div>

		 <?php } ?>
    </div>

  </div>
</div>


<!--<div class="inner-page">
<div class="container inner-content">
 <?php foreach ($view_news as $key=>$rec_news){ ?>
 
 <div class=""><img src="<?php echo base_url(); ?>public/News/thumb/<?php echo $rec_news['news_img']; ?>"/></div>
                 <a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>" style="text-decoration:none;"><h5><?php echo strip_slashes($rec_news['news_title']); ?></h5></a>
				 <span class="" ><?php echo $rec_news['updated_date']; ?></span>
				  <div class=""><?php echo strip_slashes(substr($rec_news['news_desc'],0,100)); ?>  </div>
				  <span class="read_more"><a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>"> Read More...</a></span>
 
   <?php } ?>
</div>
   </div>-->