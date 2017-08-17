<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/news-banner.jpg" class="img-responsive"/></div>
<div class="breadcrumb-bg">
  <div class="container">
  	<div class="col-md-4 col-sm-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li><a href="<?php echo base_url(); ?>news">Media</a></li>
      <li class="active">News</li>
    </ol>
    </div>
    <div class="col-md-8 col-sm-12 inner-marquee">
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
	  <?php foreach ($latest_videos as $key=>$rec_news){ ?>
      <div class="row">
        <div class="col-md-12"><img src="<?php echo $rec_news['videos_img']; ?>">
          <h5><a href="<?php echo base_url(); ?>gallery/view/<?php echo $rec_news['videos_id']; ?>"><?php echo strip_slashes(substr($rec_news['videos_title'],0,50)); ?></a></h5>
          <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
        </div>
      </div>
      <?php } ?>
          <div class="clearfix border-dot-bottom"></div>
        <div class="row">
          <div class="widget col-md-12">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
          </div>
        </div>
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
                        <?php foreach ($tv as $tv_data):?>
                        <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url();?>public/tvcoverage/<?php echo $tv_data['image'];?>" /></a></div>
                        <?php endforeach;?>
                    </div>
    </div>
        </div>
      
    </div>
  </div>
</div>