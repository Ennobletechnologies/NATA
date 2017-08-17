<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/gallery-banner.jpg" class="img-responsive"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <div class="col-md-4 col-sm-12">
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="news.html">Services</a></li>
        <li class="active">Volunteers</li>
      </ol>
    </div>
    <div class="col-md-8 col-sm-12 inner-marquee">
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
    <div class="row">
      <div class="col-md-9 news-block">
        <div class="row">
          <div class="news-heading">
            <h4>Volunteers Information</h4>
          </div>
          <div class="col-md-6 col-xs-offset-3">
          	<div class="form-heading">
            </div>
              <?php 
              $fname = $this->input->post('fname');
              ?>
              <h4 style="color: green;">Thank You <?php echo $fname;?> for contacting with us.We will get back to you shortly!</h4>
          </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
      </div>
      <div class="col-md-3 latest-videos">
        <div class="news-heading">
          <h4>Volunteers</h4>
        </div>
        <div class="row">
          <div class="col-md-12"> <a href="volunteers.html"><img src="<?php echo base_url();?>img/volunteers.jpg" class="img-responsive thumbnail" alt="resp"></a> </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <?php foreach ($sponsers as $sponsers_data):?>
                <div class="row">
                    <div class="col-md-12">
                        <h5><?php echo $sponsers_data['title'];?></h5>
                        <p><span class="fa fa-clock-o">&nbsp;</span><?php
                        $result = $sponsers_data['updated_date'];
                        echo date('D M,Y',strtotime($result));?></p>
                        <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>"> </div>
                </div>
                <?php endforeach;?>
        <div class="clearfix border-dot-bottom"></div>
        <div class="row">
          <div class="widget col-md-12">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
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
                        <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url();?>public/tvcoverage/<?php echo $tv_data['image'];?>" /></a></div>
                        <?php endforeach;?>
                    </div>
        </div>
      </div>
    </div>
  </div>
</div>
