<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/video-banner.jpg" class="img-responsive"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="active">Contact Us</li>
        </ol>
    </div>
</div>
<div class="inner-page">
    <div class="container inner-content">
        <div class="row">
            <div class="col-md-9">
                <div class="news-heading">
                    <?php foreach ($all_pages as $all_pages_data): ?>
                        <h4><?php echo $all_pages_data['page_title']; ?></h4>
                    <?php endforeach; ?>
                </div>
                <div class="row border-dot-bottom">
                    <div class="col-md-5" style="padding-left:120px;"><img src="<?php echo base_url(); ?>img/icon-email-signup.png" class="img-responsive" alt="contact-icon" width="196"></div>
                    <div class="col-md-7">
                        
                            <?php foreach ($all_pages as $all_pages_data): ?>
                                <?php echo $all_pages_data['page_content']; ?>
                            <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-xs-offset-2"> 
                        <h3 >Contact Form</h3>
                        <form method="post" action="<?php echo base_url(); ?>contact_us/form_process">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Full Name">
                                <span class="required"><?php echo form_error('name'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email" placeholder="Email">
                                <span class="required"><?php echo form_error('email'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input class="form-control" type="text" name="mobile" placeholder="Mobile">
                                <span class="required"><?php echo form_error('mobile'); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="message" rows="4" placeholder="Enter Message" ></textarea>
                                <span class="required">  <?php echo form_error('message'); ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success" value="SEND">

                            </div>
                        </form>
                    </div>
                </div>
                <div class="clearfix border-dot-bottom"></div>
            </div>
            <div class="col-md-3 latest-videos">
                <div class="news-heading">
                    <h4>Latest Videos</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($videos as $videos_data): ?>
                            <a href="<?php echo base_url(); ?>gallery/view/<?php echo $videos_data['videos_id']; ?>" style="text-decoration:none;"><h5><?php echo $videos_data['videos_title']; ?></h5></a>
                            <p><span class="fa fa-clock-o">&nbsp;</span><?php
                                $result = $videos_data['updated_date'];
                                echo date('M d ,Y', strtotime($result));
                                ?></p>
                            <img src="<?php echo $videos_data['videos_img']; ?>"/> 
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="clearfix border-dot-bottom"></div>
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
                        <?php foreach ($tv as $tv_data): ?>
                            <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url(); ?>public/tvcoverage/<?php echo $tv_data['image']; ?>" /></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>