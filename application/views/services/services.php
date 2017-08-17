<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/gallery-banner.jpg" class="img-responsive" alt="gallery-banner"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <div class="col-md-4 col-sm-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>services">Services</a></li>
                <li class="active">NATA Services</li>
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
            <div class="col-md-9 col-sm-8 news-block">
            <div class="news-heading">
                        <h4>NATA Services</h4>
                    </div>
                <div class="row">
                    <?php foreach ($view_services as $key => $services) { ?>
                    <div class="col-md-4 col-sm-6 list-services-block">
                        <div class=""> <a href="<?php echo base_url(); ?>services/view/<?php echo $services['services_id']; ?>"><img src="<?php echo base_url(); ?>public/services/<?php echo $services['services_img']; ?>" class="img-responsive thumbnail-img"  alt="news-1"> </a>
                            <div class="videoInfo padding-top-20">
                                <a href="<?php echo base_url(); ?>services/view/<?php echo $services['services_id']; ?>"><h5><?php echo strip_slashes($services['services_title']); ?></h5></a>
                                <p><?php echo strip_slashes(substr($services['services_desc'], 0, 100)); ?> </p>
                                <b>Published on:
                                    <?php
                                    $result = $services['updated_date'];
                                    echo date('d D M,Y',  strtotime($result)); ?>
                                </b>
                            </div>
                        </div>
                    </div>
                   <?php } ?>
                </div>
                <div class="clearfix border-dot-bottom"></div>
                <div class="row ">
                    <div class="col-md-12 col-sm-12">
                        <ul class="pagination">
                            <li><?php echo $pagination;?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 latest-videos hidden-xs">
                <div class="news-heading">
                    <h4>Latest Videos</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($videos as $videos_data):?>
                        <a href="<?php echo base_url(); ?>gallery/view/<?php echo $videos_data['videos_id']; ?>" style="text-decoration:none;"><h5><?php echo $videos_data['videos_title'];?></h5></a>
                        <p><span class="fa fa-clock-o">&nbsp;</span><?php
                        $result = $videos_data['updated_date'];
                        echo date('M d ,Y',  strtotime($result));
                        ?></p>
                        <img src="<?php echo $videos_data['videos_img']; ?>" alt="videos_img"/>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="clearfix border-dot-bottom"></div>
                <?php foreach ($sponsers as $sponsers_data):?>
                <div class="row">
                    <div class="col-md-12">
                        <h5><?php echo $sponsers_data['title'];?></h5>
                        <p><span class="fa fa-clock-o">&nbsp;</span><?php
                        $result = $sponsers_data['updated_date'];
                        echo date('D M,Y',strtotime($result));?></p>
                        <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>" alt="sponsers"> </div>
                </div>
                <?php endforeach;?>
                <div class="clearfix border-dot-bottom"></div>
                <div class="row">
                    <div class="widget col-md-12">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
                    </div>
                </div>
                <div class="clearfix border-dot-bottom"></div>
                <div class="row">
                    <div class="col-md-12 clients-scroll">
                        <marquee dir="rtl" direction="up" behavior="scroll" scrollamount="2" height="160px" >
                            <?php foreach ($sponsers as $sponsers_data):?>
                            <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>" class="img-responsive" alt="sponsers_data">
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