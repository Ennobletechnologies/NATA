<div class="inner-page">
    <div class="container inner-content">
        <div class="latest_stories">
            <div class="latest_left">
                <div class="latest_head"><h1>Services</h2></div>

                <div class="news_content">

                    <?php foreach ($view_services as $key => $services) { ?>

                        <div class="filmy_news">
                            <div class="news_col">
                                <div class="news_img"><img src="<?php echo base_url(); ?>public/services/thumb/<?php echo $services['services_img']; ?>"/></div>
                                <div class="news_txt">
                                    <div class="news">
                                        <a href="<?php echo base_url(); ?>services/view/<?php echo $services['services_id']; ?>" style="text-decoration:none;"><h5><?php echo strip_slashes($services['services_title']); ?></h5></a>
                                        <span class="update" style="margin:0px;"><?php echo $services['updated_date']; ?></span>

                                        <div class="news_cont"><?php echo strip_slashes(substr($services['services_desc'], 0, 45)); ?>  </div>

                                        <span class="read_more"><a href="<?php echo base_url(); ?>services/view/<?php echo $services['services_id']; ?>/<?php echo urlencode($services['services_title']); ?>"> Read More...</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>

    </div><!-- main div end here-->
</div>

