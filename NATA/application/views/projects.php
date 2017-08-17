<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/newsletter-banner.jpg" class="img-responsive" alt="newsletter-banner"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <div class="col-md-4 col-sm-5">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <li><a href="<?php echo base_url();?>projects">Projects</a></li>
        <li class="active">Nata Projects</li>
      </ol>
    </div>
    <div class="col-md-8 col-sm-7 hidden-xs inner-marquee">
      <marquee behavior="scroll" scrollamount="7">
      <?php foreach ($view_news1 as $key => $rec_news):?>
      <span class="fa fa-newspaper-o"> </span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?>
      <?php endforeach;?>
      </marquee>
    </div>
  </div>
</div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 col-sm-8 news-block">
        <div class="news-heading">
          <h4>Nata Projects »</h4>
        </div>
        <?php foreach ($projects as $projects_data):?>
        <div class="row">
          <div class="col-md-4 col-sm-5"> <img src="<?php echo base_url();?>public/projects/<?php echo $projects_data['project_image'];?>" class="img-responsive"  alt="news-1"> </div>
          <div class="col-md-8 col-sm-7">
            <div class="latest-news ">
              <h5><?php echo $projects_data['project_title'];?></h5>
              <p><span class="fa fa-clock-o">&nbsp;</span>
                <?php 
                           $result = $projects_data['published_on']; 
                            echo $result;?>
              </p>
              <?php echo strip_slashes(substr($projects_data['project_desc'],0,200)); ?><br/>
              <a href="<?php echo base_url();?>projects/project_overview/<?php echo $projects_data['project_id'];?>" class="btn slide_btn">Read More</a> </div>
          </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <?php endforeach;?>
        <div class="row ">
          <div class="col-md-12 col-sm-12">
            <ul class="pagination">
              <li><?php echo $pagination;?></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 latest-videos">
        <div class="news-heading">
          <h4>Latest Videos</h4>
        </div>
        <?php foreach ($videos as $videos_data):?>
        <div class="row">
          <div class="col-md-12"> <a href="<?php echo base_url();?>gallery/view/<?php echo $videos_data['videos_id'];?>">
            <h5><?php echo $videos_data['videos_title'];?></h5>
            </a>
            <p><span class="fa fa-clock-o">&nbsp;</span>
              <?php
                        $result = $videos_data['updated_date'];
                        echo date('D M,Y',strtotime($result));?>
            </p>
            <img src="<?php echo $videos_data['videos_img'];?>" alt="videos"> </div>
        </div>
        <?php endforeach;?>
        <div class="clearfix border-dot-bottom"></div>
        <?php foreach ($sponsers as $sponsers_data):?>
        <div class="row">
          <div class="col-md-12">
            <h5><?php echo $sponsers_data['title'];?></h5>
            <p><span class="fa fa-clock-o">&nbsp;</span>
              <?php
                        $result = $sponsers_data['updated_date'];
                        echo date('D M,Y',strtotime($result));?>
            </p>
            <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>" alt="sponsers"> </div>
        </div>
        <?php endforeach;?>
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
