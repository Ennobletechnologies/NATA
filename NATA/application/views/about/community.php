<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/about-banner.jpg" alt="community service" class="img-responsive"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li class="active">Community Services</li>
    </ol>
  </div>
</div>
<div class="overlaybg" style="display: none;"></div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="news-heading">
          <h4>Contact Community Services</h4>
        </div>
        <div class="row">
          <div class="col-md-3 hidden-sm hidden-xs"></div>
          <div class="col-md-6 col-sm-12 col-xs-12 padding-bottom-10">
            <div class="form-heading">
              <p class="required"><span>*</span> All Fields are Compulsory</p>
            </div>
            <form class="donation-form" method="post" action="<?php echo base_url();?>natau/form_process">
              <div class="form-group">
                <label for="firstName">Full Name</label>
                <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo set_value('fname');?>">
                <span class="required"><?php echo form_error('fname');?></span> </div>
              <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <span class="required"><?php echo form_error('email');?></span> </div>
              <div class="form-group">
                <label for="phoneNumber">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Phone Number">
                <span class="required"><?php echo form_error('mobile');?></span> </div>
              <div class="form-group">
                <label for="phoneNumber">Subject</label>
                <textarea type="text" class="form-control" name="message" rows="4"></textarea>
                <span class="required"><?php echo form_error('message');?></span> </div>
              <div class="form-group">
                <div class="bfh-datepicker"> </div>
              </div>
              <input type="submit" name="submit" value="Submit" class="btn btn-success"/>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 latest-videos">
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
        <div class="row ">
          <div class="col-md-12 clients-scroll ">
            <marquee dir="rtl" direction="up" behavior="scroll" scrollamount="2" height="160px" >
            <?php foreach ($sponsers as $sponsers_data):?>
            <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>" class="img-responsive" alt="sponsers">
            <?php endforeach;?>
            </marquee>
          </div>
        </div>
      </div>
    </div>
    <div class="row tv-coverage ">
      <div class="col-md-12 news-heading">
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
