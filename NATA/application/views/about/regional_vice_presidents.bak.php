<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/about-banner.jpg"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <div class="col-md-4 col-sm-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>natau/organization">Organization</a></li>
                <li class="active">Regional Vice Presidents</li>
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
        <div class="row border-dot-bottom">
            <div class="col-md-9 ">
                <div class="news-heading">
                    <h4>Regional Vice-Presidents</h4>
                </div>
                <div class="margin-bottom-10">
                    <img src="<?php echo base_url(); ?>img/RVP_2015.jpg" class="img-responsive thumbnail-img" alt="boardofdirectors">
                </div>
                <div class="margin-bottom-10">
                    <a href="<?php echo base_url(); ?>natau/organization" class="btn btn-warning"><span class="fa fa-arrow-left">&nbsp;</span>Back to Organization</a>
                </div>
            </div>
            <div class="col-md-3 latest-videos">
                <div class="news-heading">
                    <h4>Latest Videos</h4>
                </div>
                <?php foreach ($videos as $videos_data): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h5><?php echo $videos_data['videos_title']; ?></h5>
                            <p><span class="fa fa-clock-o">&nbsp;</span>June 10, 2014</p>
                            <img src="<?php echo $videos_data['videos_img']; ?>"> </div>
                    </div>
                    <div class="clearfix border-dot-bottom"></div>
                <?php endforeach; ?>
                <div class="row">
                    <div class="widget col-md-12">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row tv-coverage">
            <div class="news-heading">
                <h4>TV Coverage</h4>
            </div>
            <div class="col-md-4">
                <div id="slider2_container" class="scroll-tabs-bottom"> <!-- Slides Container -->
                    <div u="slides" class="slides" >
                        <?php foreach ($tv as $tv_data): ?>
                            <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url(); ?>public/tvcoverage/<?php echo $tv_data['image']; ?>" /></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>