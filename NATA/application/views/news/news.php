<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/news-banner.jpg" class="img-responsive"/></div>
<div class="breadcrumb-bg">
  <div class="container">
  	<div class="col-md-4 col-sm-5 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="news">Media</a></li>
      <li class="active">News</li>
    </ol>
    </div>
    <div class="col-md-8 col-sm-7 hidden-xs inner-marquee">
    <marquee behavior="scroll" scrollamount="7">
<?php foreach ($view_news1 as $key => $rec_news):?>
<span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?> 
<?php endforeach;?>
</marquee>    
  </div></div>
</div>
<div class="inner-page">
  <div class="container inner-content">
  <div class="row">
    <div class="col-md-9 col-sm-8 ol-xs-12 news-block">
      <div class="row">
        <div class="news-heading1">
          <h4 class="text-left">Latest Updates</h4>
        </div>
        <div class="col-md-8 col-sm-12 ol-xs-12 "> 
		<?php foreach ($top_one_news as $key=>$rec_news){ ?>
		<img src="<?php echo base_url(); ?>public/News/<?php echo $rec_news['news_img']; ?>" class="img-responsive" alt="news">
          <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,80)); ?></h5>
          <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
          <p><?php echo strip_slashes(substr($rec_news['news_desc'],0,469)); ?></p>
          <a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>" class="btn slide_btn">Read More</a> 
		  <?php } ?>
		 </div>
        <div class="col-md-4 col-sm-12 ol-xs-12 additional-news">
		<?php foreach ($view_news as $key=>$rec_news){ ?>
          <div class="latest-news">
            <h5><?php echo strip_slashes(substr($rec_news['news_title'],0,80)); ?></h5>
            <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
            <p><?php echo strip_slashes(substr($rec_news['news_desc'],0,90)); ?></p>
            <a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>" class="btn slide_btn">Read More</a> 
			
		</div>
         
			 <?php } ?>
        </div>
      </div>
    </div>
      <div class="clearfix"></div>
    <div class="col-md-12 col-sm-4 ol-xs-12 latest-videos">
      <div class="news-heading">
        <h4>Latest Videos</h4>
      </div>
	  <?php foreach ($latest_videos as $key=>$rec_news){ ?>
      <div class="row">
        <div class="col-md-12"><img src="<?php echo $rec_news['videos_img']; ?>" alt="videos">
          <h5><a href="<?php echo base_url(); ?>gallery/view/<?php echo $rec_news['videos_id']; ?>"><?php echo strip_slashes(substr($rec_news['videos_title'],0,50)); ?></a></h5>
          <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
        </div>
      </div>
      <?php } ?>
          <div class="clearfix border-dot-bottom"></div>
        
    </div>
    </div>
  
    <hr/>
     <div class="row tv-coverage">
      <div class="news-heading">
        <h4>TV Coverage</h4>
      </div>
      <div class="col-md-4">
      <div id="slider2_container" class="scroll-tabs-bottom">        <!-- Slides Container -->
        <div u="slides" class="slides" >
                        <?php 
                        foreach ($tv as $tv_data):?>
                        <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url();?>public/tvcoverage/<?php echo $tv_data['image'];?>" /></a></div>
                        <?php endforeach;?>
                    </div>
    </div>
        </div>
      
    </div>

  </div>
</div>