<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/about-banner.jpg" alt="banner"/></div>
<div class="breadcrumb-bg">
  <div class="container">
  	<div class="col-md-4 col-sm-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li><a href="<?php echo base_url();?>natau">NATA</a></li>
      <li class="active">Organization</li>
    </ol>
    </div>
    <div class="col-md-8 col-sm-12 inner-marquee">
    <marquee behavior="scroll" scrollamount="7">
<?php foreach ($view_news as $key => $rec_news):?>
<span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?>
<?php endforeach;?>
</marquee>
  </div></div>
</div>
<div class="inner-page">
  <div class="container inner-content ">
    <div class="row">
      <div class="col-md-9 ">
        <div class="news-heading">
          <h4>Organization</h4>
        </div>
        <div class="organize-chart">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center nata-org-logo"><img src="<?php echo base_url();?>img/nata-logo.png" alt="nata-logo" class="img-responsive"></div>
          </div>
          <div class="row hidden-xs">
            <div class="col-md-2 col-sm-2"></div>
            <div class="col-md-8 col-sm-8 line-vertical-top padding-top-10 padding-bottom-10"></div>
            <div class="col-md-2 col-sm-2"></div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center line-vertical-bottom"><a href="<?php echo base_url();?>natau/board_of_directors" class="btn board-btn">Board of Directors</a></div>
          </div>
          <div class="row hidden-xs">
            <div class="col-md-2 col-sm-2"></div>
            <div class="col-md-8 col-sm-8 border-top"></div>
            <div class="col-md-2 col-sm-2"></div>
          </div>
          <div class="row">
            <div class="hidden-md col-sm-1 col-xs-2 "></div>
            <div class="col-md-4 col-sm-4 col-xs-10 text-center line-vertical-top horizental-line"><a href="<?php echo base_url();?>natau/advisory_council" class="btn advisory-btn">Advisory Council</a></div>
            <div class="col-md-4 col-sm-4 hidden-xs border-center"></div>
            <div class="hidden-md col-sm-2 col-xs-2 "></div>
            <div class="col-md-4 col-sm-4 col-xs-10 text-center line-vertical-top horizental-line"><a href="<?php echo base_url();?>natau/executive_committee" class="btn excutive-btn">Executive Committee</a></div>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-5 hidden-xs"></div>
            <div class="col-md-2 col-sm-2 col-xs-4 border-center"></div>
            <div class="col-md-5 col-sm-5 col-xs-8 horizental-line"><a href="<?php echo base_url();?>natau/standing_committee" class="btn standing-btn">Standing Committee</a></div>
          </div>
          <div class="row">
		              <div class="col-md-5 col-sm-5 hidden-xs"></div>
		              <div class="col-md-2 col-sm-2 col-xs-4 border-center"></div>
		              <div class="col-md-5 col-sm-5 col-xs-8 horizental-line"><a href="<?php echo base_url();?>natau/adhoc_committee" class="btn standing-btn">Adhoc Standing Committee</a></div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center line-vertical-top"><a href="<?php echo base_url();?>natau/regional_vice_presidents" class="btn regional-btn">Regional Vice-Presidents</a></div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center line-vertical-top "><a href="<?php echo base_url();?>natau/regional_co_ordinates" class="btn regional-co-btn">Regional Co-ordinates</a></div>
          </div>
          <div class="row hidden-xs">
            <div class="col-md-2 col-sm-2"></div>
            <div class="col-md-8 col-sm-8 border-center"></div>
            <div class="col-md-2 col-sm-2"></div>
          </div>
          <div class="row hidden-xs">
            <div class="col-md-2 col-sm-2"></div>
            <div class="col-md-8 col-sm-8 border-top"></div>
            <div class="col-md-2 col-sm-2"></div>
          </div>
          <div class="row">
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-2 col-sm-2 text-center line-vertical-top"><a href="<?php echo base_url();?>natau/east_coordinators" class="btn east-btn">East</a></div>
            <div class="col-md-2 col-sm-2 text-center line-vertical-top"><a href="<?php echo base_url();?>natau/west_coordinators"class="btn west-btn">West</a></div>
            <div class="col-md-2 col-sm-2 text-center line-vertical-top"><a href="<?php echo base_url();?>natau/central_coordinators" class="btn central-btn">Central</a></div>
            <div class="col-md-2 col-sm-2 text-center line-vertical-top"><a href="<?php echo base_url();?>natau/north_coordinators" class="btn north-btn">North</a></div>
            <div class="col-md-2 col-sm-2 text-center line-vertical-top"><a href="<?php echo base_url();?>natau/south_coordinators" class="btn south-btn">South</a></div>
            <div class="col-md-1 col-sm-1 "></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 latest-videos">
        <div class="news-heading">
          <h4>Latest Videos</h4>
        </div>
        <?php foreach ($videos as $videos_data):?>
        <div class="row">
          <div class="col-md-12">
             <a href="<?php echo base_url();?>gallery/view/<?php echo $videos_data['videos_id'];?>"><h5><?php echo $videos_data['videos_title'];?></h5></a>
            <p><span class="fa fa-clock-o">&nbsp;</span>June 10, 2014</p>
            <img src="<?php echo $videos_data['videos_img'];?>" alt="videos"> </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <?php endforeach;?>

        <div class="row">
          <div class="widget col-md-12">
         <div class="fb-follow" data-href="https://www.facebook.com/NATAMembers" data-layout="standard" data-size="small" data-show-faces="true"></div>
        </div>
      </div>
    </div>
    <div class="row tv-coverage">
      <div class="col-md-12">
      <div class="news-heading">
        <h4>TV Coverage</h4>
        </div>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script