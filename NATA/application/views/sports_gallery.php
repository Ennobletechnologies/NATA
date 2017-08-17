<div class="breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a></li>
                    <li class="active">Galleries</li>
                </ol>
            </div>
            <div class="col-md-10">
                <marquee align="middle" dir="ltr" behavior="scroll" scrollamount="5">
                    <p class="marquee">
                        <?php
                        foreach ($scrolling as $scrolling_data) {
                            echo $scrolling_data['scroll_text'];
                        }
                        ?>
                    </p>
                </marquee>
            </div>
        </div>
    </div>
</div>
<div class="inner-page">
    <div class="container inner-content" style="background:#999">
        <div class="row">
            <div class="col-md-12">
                <div id="thumbGrid"
                     class="thumbGrid"
                     data-thumbgrid="true"
                     data-nav_effect="slideInverse"
                     data-nav_delay="60"
                     data-nav_timing="1000"
                     data-nav_pagination="6"
                     data-gallery_effectnext="fadeIn"
                     data-gallery_effectprev="fadeOut"
                     data-gallery_fullscreenw="90%"
                     data-gallery_fullscreenh="90%"
                     data-gallery_cover="true"> 
                    <?php foreach ($gallery as $gallery_data): ?>
                        <img src="<?php echo base_url(); ?>public/sports/sports_gallery/<?php echo $gallery_data['gallery_pic']; ?>" data-highres="<?php echo base_url(); ?>public/sports/sports_gallery/<?php echo $gallery_data['gallery_pic']; ?>"/> 
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
