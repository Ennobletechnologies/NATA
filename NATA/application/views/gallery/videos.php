<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/video-banner.jpg" alt="video-banner" class="img-responsive" alt="video-banner"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <div class="col-md-4 col-sm-5">
            <ol class="breadcrumb">
                <li><a href="">Home</a></li>
                <li><a href="">Media</a></li>
                <li class="active">Video Gallery</li>
            </ol>
        </div>
        <div class="col-md-8 col-sm-7 hidden-xs inner-marquee">
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
            <div class="col-md-9 col-sm-12 news-block">
                <div class="row">
                    <div class="news-heading">
                        <h4>Video Gallery</h4>
                    </div>       <!--
                    <div class="col-md-12 col-sm-8 nata-services">
                        <?php foreach ($video as $video_data ):?>
                        <?php echo strip_slashes($video_data['videos_desc']);?>
                       <?php endforeach;?> 
                    </div>		-->
                </div>
                <?php foreach ($videos as $key => $vid): ?>
                <div class="row padding-top-20">
                    <div class="col-md-4 col-sm-4"><img src="<?php echo $vid['videos_img']; ?>" alt="videos_img" class="img-responsive thumbnail"></div>
                    <div class="col-md-8 ">
                        <a href="<?php echo base_url();?>gallery/view/<?php echo $vid['videos_id'];?>"><h5><?php echo $vid['videos_title'];?></h5></a>
                        <p><span class="fa fa-clock-o">&nbsp;</span><?php 
                        $result = $vid['updated_date'];
                        echo date('D M,Y',  strtotime($result)); ?></p>
                        <a href="<?php echo base_url(); ?>gallery/view/<?php echo $vid['videos_id']; ?>" class="btn slide_btn">Read More</a></div>
                </div>
                <?php endforeach; ?>
                <div class="row ">
                    <div class="col-md-12 col-sm-12">
                        <ul class="pagination">
                            <li><?php echo $pagination;?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 latest-videos">
                <div class="news-heading">
                    <h4>Latest Videos</h4>
                </div>
                <?php foreach ($side_videos as $side_videos_data):?>
                <div class="row">
                    <div class="col-md-12"><img src="<?php echo $side_videos_data['videos_img']; ?>" alt="video_data">
                        <a href="<?php echo base_url();?>gallery/view/<?php echo $side_videos_data['videos_id'];?>"><h5><?php echo $side_videos_data['videos_title'];?></h5></a>
                        <p><span class="fa fa-clock-o">&nbsp;</span>
                        <?php 
                        $result = $side_videos_data['updated_date'];
                        echo date('M D,Y',  strtotime($result)); ?>
                        </p>
                    </div>
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