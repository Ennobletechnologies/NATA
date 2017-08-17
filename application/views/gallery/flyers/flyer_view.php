<?php //echo $i;exit;?>
<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/gallery-banner.jpg" alt="gallery-banner"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <div class="col-md-4 col-sm-5">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>gallery/flyers">Flyers</a></li>
                <li class="active">Nata Flyers</li>
            </ol>
        </div>
        <div class="col-md-8 col-sm-7 hidden-xs inner-marquee">
            <marquee behavior="scroll" scrollamount="7">
                <?php foreach ($view_news1 as $key => $rec_news): ?>
                    <span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?>
                <?php endforeach; ?>
            </marquee>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row ">
        <div class="col-md-12 col-sm-12 col-xs-12 flyers-page">
            <h3>Nata Flyers</h3>
            <img src="<?php echo base_url(); ?>img/flyers/flyer<?php echo $i;?>.jpg" />
        </div>
    </div>
</div>
