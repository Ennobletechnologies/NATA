<div class="breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a></li>
                    <li class="active">Grounds</li>
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
<div class="overlaybg" style="display: none;"></div>
<div class="inner-page">
    <div class="container inner-content">
        <div class="row">
            <div class="col-md-10">
                <div class="news-heading">
                    <h4><?php
                        foreach ($grounds as $grounds_data) {
                            echo $grounds_data['title'];
                        }
                        ?></h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        foreach ($grounds as $grounds_data) {
                            echo $grounds_data['content'];
                        }
                        ?>
                    </div>
                </div>
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