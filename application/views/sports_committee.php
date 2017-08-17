<div class="breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a></li>
                    <li class="active">Committee </li>
                </ol>
            </div>
            <div class="col-md-10">
                <marquee align="middle" dir="ltr" behavior="scroll" scrollamount="5"><p class="marquee">
                        <?php
                        foreach ($scrolling as $scrolling_data) {
                            echo $scrolling_data['scroll_text'];
                        }
                        ?>
                    </p></marquee>
            </div>
        </div></div>
</div>
<div class="overlaybg" style="display: none;"></div>
<div class="inner-page">
    <div class="container inner-content">
        <div class="row">
            <div class="col-md-10">
                    <?php foreach ($committees as $committees_data): ?>
                    <div class="row commitee">
                        <h4><?php echo $committees_data['committee_name']; ?></h4>
                        <?php
                        foreach ($committee_members as $committee_members_data):
                            if ($committees_data['committee_id'] == $committee_members_data['committee_id']) {
                                ?>
                                <div class="col-md-4"><img src="<?php echo base_url(); ?>public/sports/committee_members/<?php echo $committee_members_data['member_pic']; ?>" class="img-responsive"><h5 class="text-center"><?php echo $committee_members_data['meber_name']; ?>, <br/><?php echo $committee_members_data['designation']; ?></h5></div> 
        <?php }endforeach; ?>
                    </div>
<?php endforeach; ?>
            </div>
            <div class="col-md-2 latest-videos">
                <div class="news-heading">
                    <h4>Sponsors</h4>
                </div>
                <div class="row">
          <div class="col-md-12 scroll-tabs">
         <ul id="marquee_1" class="list-unstyled">
                <li class="sponser1"></il>
                <li class="sponser2"></li>
                <li class="sponser3"></li>
                <li class="sponser4"></li>
                <li class="sponser5"></li>
                <li class="sponser6"></li>
            </div>
          </div>
            </div>
        </div>
    </div>
</div>