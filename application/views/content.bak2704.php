<style type="text/css">
    .event_detail
    {
        display:none !important;
    }
</style>
<div class="page-full-slider">
    <div class="page-inner-slider">
        <div id="slider1_container" class="container-slider">
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;"> </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;"> </div>
            </div>
            <div u="slides" class="sliders">
                <?php foreach ($show_images as $value): ?>
                    <?php { ?>
                        <div> <img src="<?php echo base_url(); ?>uploads/<?php echo $value['filename']; ?>"> <img u="thumb" src="<?php echo base_url(); ?>uploads/<?php echo $value['filename']; ?>"> </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
            <span u="arrowleft" class="jssora07l"></span> <span u="arrowright" class="jssora07r"></span>
            <div u="thumbnavigator" class="jssort04 thumb-jssort04">
                <div u="slides">
                    <div u="prototype" class="p prototype-p">
                        <div class="w">
                            <thumbnailtemplate style="width: 100%; height: 100%; border: none; position: absolute; top: 0; left: 0;"></thumbnailtemplate>
                        </div>
                        <div class="c" style="position: absolute; background-color: #000; top: 0; left: 0"> </div>
                    </div>
                </div>
            </div>
            <a style="display: none" href="http://www.jssor.com">javascript</a> </div>
    </div>
</div>
<div class="main block1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 home-marquee">
                <marquee behavior="scroll" scrollamount="7" style="font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;"><span class="fa fa-newspaper-o"></span> Nata member Registration 50% off until May 31st 2015. Hurry up.
                </marquee>
            </div>
        </div>
        <div class="row margin-bottom-20 padding-top-20">
            <div class="col-md-5 col-sm-12 margin-bottom-10">
                <?php foreach ($msg as $key => $message) { ?>
                    <div class="president-msg"> <img src="<?php echo base_url(); ?>public/News/thumb/<?php echo $message['image']; ?>">
                        <div class="president-msg-content">

                            <h5><?php echo strip_slashes($message['title']); ?></h5>
                            <?php echo strip_slashes(substr($message['message'], 0, 355)) . "..."; ?><br/>
                            <a href="<?php echo base_url(); ?>natau/about_view/<?php echo $message['id']; ?>">Read More</a></div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="row mix-block">
                    <div class="col-md-12 latest-news-home">
                        <h4>Latest News</h4>
                        <div class="col-md-12 col-sm-12">
                            <?php foreach ($view_news as $key => $rec_news) { ?>
                                <ul class="margin-bottom-10 list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>"><?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?></a></li>
                                </ul>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 margin-bottom-10">
                <div id="">
                    <!-- my cal htmls-->
                    <div id="evencal">

                        <div class="calendar">
                            <h2>Event Calender</h2>
                            <?php echo $notes; ?>
                        </div>
                        <div class="event_detail">
                            <h2 class="s_date">Detail Event <?php echo "$day $month $year"; ?></h2>
                            <div class="detail_event" style="display:none;">
                                <?php
                                if (isset($events)) {
                                    $i = 1;
                                    foreach ($events as $e) {
                                        if ($i % 2 == 0) {
                                            echo '<div class="info1"><h4>' . $e['time'] . '</h4><p>' . $e['event'] . '' . $e['id'] . '</p></div>';
                                        } else {
                                            echo '<div class="info2"><h4>' . $e['time'] . '</h4><p>' . $e['event'] . '' . $e['id'] . '</p></div>';
                                        }
                                        $i++;
                                    }
                                } else {
                                    echo '<div class="message"><h4>No Event</h4><p>There\'s no event in this date</p></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- -->

                </div>
            </div>
        </div>
    </div>
</div>
<div class="main block2">
    <div class="container">
        <div class="row margin-both-30">
            <div class="col-md-5">
                <div class="events-block">
                    <h4>Events</h4>
                    <div class="recent-news">
                        <?php foreach ($calEvents as $key => $rec_news) { ?>
                            <div class="row">
                                <div class="col-md-9 recent-news-events">
                                    <h6><a href="<?php echo base_url(); ?>events/view/<?php echo $rec_news['idevent']; ?>"><?php echo strip_slashes(substr($rec_news['event_title'], 0, 46)); ?></a></h6>
                                    <p><?php echo date('M j Y', strtotime($rec_news['event_date'])); ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="services-block">
                    <h4>Services</h4>
                    <div class="recent-news">
                        <?php foreach ($view_services as $key => $rec_news) { ?>
                            <div class="row">
                                <div class="col-md-3 col-sm-3"> <img src="<?php echo base_url(); ?>public/services/thumb/<?php echo $rec_news['services_img']; ?>" alt="" class="img-responsive"> </div>
                                <div class="col-md-9 col-sm-9 recent-news-services">
                                    <h6><a href="<?php echo base_url(); ?>services/view/<?php echo $rec_news['services_id']; ?>"><?php echo strip_slashes(substr($rec_news['services_title'], 0, 46)); ?></a></h6>
                                    <p><?php echo date('M j Y', strtotime($rec_news['updated_date'])); ?></p>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="sponsors-block">
                    <h4>Grand Sponsors</h4>

                    <div><img src="<?php echo base_url(); ?>img/prem_mallanna.jpg" alt="prem_mallanna" class="img-responsive"></div>
                    <div class="auto-scroll" id="b1">
                        <?php foreach ($sponsers as $key => $rec_news) { ?>
                            <div style="height: 704px; margin-top: 0px;" class="b-con"> 
                                <div><a href="#"><img src="<?php echo base_url(); ?>public/sponsers/<?php echo $rec_news['spn_image']; ?>"></a></div>

                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ourclients">
    <div class="container">
        <div class="row our-clients">
            <div class="col-md-12 col-sm-12">
                <h3 class="text-center">Media Featured</h3>
            </div>
            <div class="col-md-12 col-sm-12">
                <div id="clients">
                    <div class="clients-wrap">
                        <div class="clients-list">
                            <ul id="marquee_1" class="list-unstyled list-inline">
                               <?php foreach($tv as $tv_data):?>
                                <li><a href="<?php echo base_url(); ?>news/tvcoverage_readmore/<?php echo $tv_data['id'];?>"><img src="<?php echo base_url(); ?>public/tvcoverage/<?php echo $tv_data['image'];?>"></a></li>
                                <?php endforeach;?>
                            </ul>

                        </div>
                    </div>

                    <!-- @end .clients-wrap --> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="js/scrollForever.js"></script> 
<script type="text/javascript">
    $(function () {
        $('#feature').scrollForever({delayTime: 30});
        $("#a1").scrollForever({continuous: false, speed: 500});
        $("#b1").scrollForever({continuous: false, dir: "top", container: ".b-con", inner: "div", delayTime: 3000});
    })
</script> 