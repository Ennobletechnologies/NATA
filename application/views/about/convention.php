<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/about-banner.jpg" alt="conventions" class="img-responsive"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li class="active">Conventions</li>
    </ol>
  </div>
</div>
<div class="inner-page ">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12 news-block">
          <div class="news-heading">
            <h4>Conventions</h4>
          </div>
        <div class="row">
          <div class="col-md-12">
                   <h3>NATA Dallas convention planning meeting</h3>
            <p>North American Telugu Association (NATA) has organized a convention planning kick off meeting in Dallas, Texas on March 8, 2015. Dallas Convention Convener Dr. Ramana Reddy Guduru, Coordinator Rama Surya Reddy, NATA BODs Dr. Srinivasa Reddy Alla, Dr. Rami Reddy Buchipudi,  International Vice President Jayachandra Reddy, Standing Committee Chairs Phalgun Reddy, Umamaheswara Kurri, Jayasimha Reddy, RVPs Darga Reddy, Mahender Kamireddy, Regional Coordinators Satish Seeram, Murari Reddy, Ranga Reddy, Sreenivasa Obulareddy, Ravindra Reddy, Srinivasa Reddy Veerabhadra, Nagaraj Challa, Ramesh Gadiraju, Sai Veraepalli, Ravi Kona, Uma Mahesh Pamapalli, Venkat Reddy were present.<br>
                Convener Ramana Reddy in his speech mentioned that NATA Dallas Convention will be held from May 27th to 29th 2016. He thanked NATA board and Advisory Council for having trust in him and appointing him as the Convener. He is very happy to take this challenging position and told the audience that he has been discussing with various local leaders from different local organizations. Dr. Ramana Reddy thanked all of them for promising unconditional support for the convention. He requested all the leaders to come forward and work together to make NATA convention a memorable event for all of us.<br>
            Coordinator Ramasurya Reddy mentioned in his speech that convention will be held at Dallas Convention Center and large number of hotel rooms were blocked at OMNI Hotel which is connected to the convention center. He also mentioned that there will be 40 different convention committees and there will be over 300 volunteers who will work together to make this event a big success.
            <br>
            NATA senior leader and adviser Dr. S. Raghava Reddy mentioned that he will work together with all the committees and make this conference successful. Jayachandra Reddy has explained about NATA leadership and he requested everyone to spread the word about convention and bring more members to NATA.<br>
            TANTEX President Narasimha Reddy Urimindi has extended unconditional support to NATA Convention and happy to be co-hosting the convention. NATA Advisory Council Chair Dr. Prem Reddy and NATA is a proud sponsor of TANTEX events as a Diamond category.<br/>
            NATA leaders Dr. Tarakumar Reddy, Gurram Srinivas Reddy, Vishnu Battula, Rao Kalvala, Pratap Bhimireddy, Ramana Reddy Putluri, Mahesh Guduru, Sudharkar Reddy, Venkat Thandra, Raghu Gajjala, Chandra Budda were also present and gave their valuable suggestions, extended their unconditional support to the convention team and showed enthusiasm to be part of the Convention.<br>
            Thanks to TANTEX EC members Subramanyam Jonnalagadda, Sharada Singireddy for being part of the preliminary discussion. Darga Reddy and Mahender Kamireddy thanked everyone for joining the kickoff meeting. This is a preliminary planning kick off meeting mostly with NATA team and there would be series of meetings involving more local leaders.<br><br>
            <b>Video:</b> <a href="http://youtu.be/eqWCU5kxCt4" style="  color: #C00;
  font-size: 13px;
  font-weight: 500;">http://youtu.be/eqWCU5kxCt4</a><br>
  <b>Great Andhra:</b> <a href="http://www.greatandhra.com/articles/special-articles/nata-dallas-convention-planning-meeting-64580.html" style="  color: #C00;
  font-size: 13px;
  font-weight: 500;" target="_blank">http://www.greatandhra.com/articles/special-articles/nata-dallas-convention-planning-meeting-64580.html</a><br>
  <b>Telugu People:</b> <a href="http://www.telugupeople.com/news/article_00095787_NATA_Dallas_Convention_Kick-Off.asp" style="  color: #C00;
  font-size: 13px;
  font-weight: 500;" target="_blank">http://www.telugupeople.com/news/article_00095787_NATA_Dallas_Convention_Kick-Off.asp</a><br>
  <b>Namasthe Andhra:</b> <a href="http://www.namastheandhra.com/2015/03/11/59445/" style="  color: #C00;
  font-size: 13px;
  font-weight: 500;" target="_blank">http://www.namastheandhra.com/2015/03/11/59445/</a><br>
  <b>Telugu Community News:</b><a href="http://www.telugucommunitynews.com/nata-dallas-convention-planning-kick-off-meeting-march-8th-2015/" style="  color: #C00;
  font-size: 13px;
  font-weight: 500;" target="_blank">http://www.telugucommunitynews.com/nata-dallas-convention-planning-kick-off-meeting-march-8th-2015/</a>
            </p>           
          </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 latest-videos">
        <div class="news-heading">
          <h4>Latest Videos</h4>
        </div>
        <?php foreach ($videos as $videos_data):?>
        <div class="row">
          <div class="col-md-12">
              <a href="<?php echo base_url();?>gallery/view/<?php echo $videos_data['videos_id'];?>"><h5><?php echo $videos_data['videos_title'];?></h5></a>
            <p><span class="fa fa-clock-o">&nbsp;</span>June 10, 2014</p>
            <img src="<?php echo $videos_data['videos_img'];?>" alt="videos"> </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <?php endforeach;?>
        <div class="row">
          <div class="col-md-12 clients-scroll">
            <marquee dir="rtl" direction="up" behavior="scroll" scrollamount="2" height="160px" >
            <?php foreach ($sponsers as $sponsers_data):?>
                <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>" class="img-responsive" alt="sponsers"> 
            <?php endforeach;?>
            </marquee>
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