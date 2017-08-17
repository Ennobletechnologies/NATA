<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/gallery-banner.jpg" alt="gallery-banner"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <div class="col-md-4 col-sm-5">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
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
            <p>
                <a class="btn success" href="<?php echo base_url();?>public/pdfs/NATA_MEGA_Singer_pdf.pdf" target="_blank">Nata Singing SuperStar 2016 Rules</a><br/><br/>
            </p>
            <ul class="list-unstyled list-inline">
                <?php for ($i=1;$i<=8;$i++){ ?>
                <li><a href="<?php echo base_url(); ?>gallery/flyer_view/<?php echo $i;?>"> <img style="height: 330px; border: 2px solid #F98;" src="<?php echo base_url(); ?>img/flyers/flyer<?php echo $i;?>.jpg" /> </a></li>
                <?php }?>
                </ul>
        </div>
    </div>
</div>
