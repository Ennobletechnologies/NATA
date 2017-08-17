<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/video-banner.jpg" class="img-responsive" alt="video-banner"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li><a href="<?php echo base_url();?>youth">Youth</a></li>
      <li class="active">Youth Events</li>
    </ol>
  </div>
</div>
<div class="overlaybg" style="display: none;"></div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 news-block">
          <div class="news-heading">
            <h4>NATA Youth Events</h4>
          </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Update Soon</h3> 
          </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
      </div>
      <div class="col-md-3 latest-videos">
        <div class="news-heading">
          <h4>Latest Videos</h4>
        </div>
        <div class="row">
          <div class="col-md-12">
                        <?php foreach ($videos as $videos_data): ?>
                            <a href="<?php echo base_url(); ?>gallery/view/<?php echo $videos_data['videos_id']; ?>" style="text-decoration:none;"><h5><?php echo $videos_data['videos_title']; ?></h5></a>
                            <p><span class="fa fa-clock-o">&nbsp;</span><?php
                                $result = $videos_data['updated_date'];
                                echo date('M d ,Y', strtotime($result));
                                ?></p>
                            <img src="<?php echo $videos_data['videos_img']; ?>" alt="video_img"/> 
                        <?php endforeach; ?>
                    </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
      </div>
    </div>
    <hr/>
    <div class="row tv-coverage">
      <div class="news-heading">
        <h4>TV Coverage</h4>
      </div>
      <div class="col-md-4">
        <div id="slider2_container" class="scroll-tabs-bottom"> <!-- Slides Container -->
         <div u="slides" class="slides" >
                        <?php foreach ($tv as $tv_data):?>
                        <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url();?>public/tvcoverage/<?php echo $tv_data['image'];?>" alt="tvcourage" /></a></div>
                        <?php endforeach;?>
                    </div>
        </div>
      </div>
    </div>
  </div>
</div>