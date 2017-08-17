<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/newsletter-banner.jpg" class="img-responsive" alt="newsletter-banner"/></div>
<div class="breadcrumb-bg">
  <div class="container">
  	<div class="col-md-4 col-sm-5 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li><a href="<?php echo base_url(); ?>news">Media</a></li>
      <li class="active">News Letter</li>
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
      <div class="col-md-9 news-block">
          <div class="row">
<div class="col-md-12">              
          <div class="news-heading">
            <h4>News Letter	»</h4>
          </div>
</div>
          </div>
          <?php foreach ($paged_nl as $key=>$nl_news){ ?>
        <div class="row">
          <div class="col-md-4 col-sm-4"> <img src="<?php echo base_url(); ?>public/newsletter/<?php echo $nl_news['image']; ?>" class="img-responsive"  alt="news-1"> </div>
          <div class="col-md-8 col-sm-8">
            <div class="latest-news ">
              <h5><?php echo strip_slashes(substr($nl_news['title'],0,180)); ?></h5>
              <p><span class="fa fa-clock-o">&nbsp;</span><?php  echo date('M j Y', strtotime($nl_news['updated_date'])); ?></p>
              <p><?php echo strip_slashes(substr($nl_news['nl_desc'],0,250)); ?></p>
              <a href="<?php echo base_url(); ?>news/newsletter_readmore/<?php echo $nl_news['id']; ?>" class="btn slide_btn">Read More</a> </div>
          </div>
        </div>
        
        <div class="clearfix border-dot-bottom"></div>
        <?php } ?>
        <?php echo $pagination; ?>
        
        
      </div>
      <div class="col-md-3 latest-videos">
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