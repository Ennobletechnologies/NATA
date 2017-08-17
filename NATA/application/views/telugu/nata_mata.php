<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/nata-mata-banner.jpg" class="img-responsive" alt="nata-mata"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li><a href="<?php echo base_url();?>telugu_newspapers">Telugu</a></li>
      <li class="active">Nata Mata</li>
    </ol>
  </div>
</div>
<div class="overlaybg" style="display: none;"></div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 news-block"><div class="news-heading">
            <h4>Nata Mata</h4>
          </div>
        <div class="row">
          
          <div class="col-md-12 col-sm-12 margin-both">
            <h4 style="color:#F00"><span class="fa fa-hand-o-right">&nbsp;</span>Click to view the latest Editions.</h4>
          </div>
          <div class="col-md-6 col-sm-6 padding-bottom-40"> <a href="<?php echo base_url();?>public/natamata/nata_mata_2014.pdf" target="_blank"> <img src="<?php echo base_url();?>img/nata-2014.jpg" class="img-responsive thumbnail-img" alt="nata-mata"> </a> </div>
          <div class="col-md-6 col-sm-6"><a href="<?php echo base_url();?>public/natamata/nata-mata-ugadi.pdf" target="_blank"> <img src="<?php echo base_url();?>img/nata-2013.jpg" class="img-responsive thumbnail-img" alt="nata-mata"> </a> </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
      </div>
      <div class="col-md-3 latest-videos">
        <div class="news-heading">
          <h4>Latest Videos</h4>
        </div>
        <?php foreach ($videos as $videos_data):?>
        <div class="row">
          <div class="col-md-12"> <a href="<?php echo base_url();?>gallery/view/<?php echo $videos_data['videos_id'];?>">
            <h5><?php echo $videos_data['videos_title'];?></h5>
            </a>
            <p><span class="fa fa-clock-o">&nbsp;</span>June 10, 2014</p>
            <img src="<?php echo $videos_data['videos_img'];?>" alt="videos"> </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <?php endforeach;?>
        <div class="row">
          <div class="col-md-12 clients-scroll">
            <marquee dir="rtl" direction="up" behavior="scroll" scrollamount="2" height="160px" >
            <?php foreach ($sponsers as $sponsers_data):?>
            <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>" class="img-responsive" alt="sponsers">
            <?php endforeach;?>
            </marquee>
          </div>
        </div>
      </div>
    </div>
    <hr/>
    <div class="row tv-coverage">
    <div class="col-md-12">
      <div class="news-heading">
        <h4>TV Coverage</h4>
      </div></div>
      <div class="col-md-4">
        <div id="slider2_container" class="scroll-tabs-bottom"> <!-- Slides Container -->
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
