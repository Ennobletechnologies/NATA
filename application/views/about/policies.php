<div class="slider-innder"> <img src="<?php echo base_url()?>img/index-sliders/about-banner.jpg" alt="banner"/></div>
<div class="breadcrumb-bg">
  <div class="container">
  	<div class="col-md-4 col-sm-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>">Home</a></li>
      <li><a href="<?php echo base_url()?>natau/about">NATA</a></li>
      <li class="active">Policies/By Laws</li>
    </ol>
    </div>
    <div class="col-md-8 col-sm-12 inner-marquee">
      <marquee behavior="scroll" scrollamount="7">
<?php foreach ($view_news as $key => $rec_news):?>
<span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?> 
<?php endforeach;?>
</marquee>    
  </div></div>
</div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-8 col-sm-12">
          <?php foreach ($policies as $pal): ?>
        <h3><?php {echo strip_slashes($pal['title']);?></h3>
        <?php echo strip_slashes($pal['p_desc']); }?>
        <?php   endforeach;?>  
      </div>
        <div class="col-md-4 col-sm-12 inner-right-block">
            <div class="news-heading">
        <h4>More Documents</h4>
      </div>
        <ul class="list-unstyled">
            <li><a href="<?php echo base_url();?>public/pdfs/NATACONSTITUTION.pdf" target="_blank">NATA CONSTITUTION</a></li>
            <li><a href="<?php echo base_url();?>public/pdfs/NATA BYLAWS_Final_May_2015 signed.pdf" target="_blank">NATA BYLAWS</a></li>
            <li><a href="<?php echo base_url();?>public/pdfs/NATA Rules_Regulations_Final signed.pdf" target="_blank">NATA Rules & Regulations</a></li>
        </ul>
        <!--<h4>2015 Convention Committee</h4>
        <ul class="list-unstyled list-inline">
          <li><img src="<?php echo base_url()?>img/mohanmallam.jpg" class="img-responsive text-center" alt="mallanna"/>
            <p>Mr.MOHAN MALLAM; MD, FACP, President</p>
          </li>
          <li><img src="<?php echo base_url()?>img/nouser.png" class="img-responsive" alt="mallanna"/>
            <p>Mr.Ramana Reddy Guduru (Convener)</p>
          </li>
          <li><img src="<?php echo base_url()?>img/nouser.png" class="img-responsive" alt="mallanna"/>
            <p>Mr.Ramasurya Reddy(Coordinator)</p>
          </li>
          </ul>-->
        <div class="clearfix padding-bottom-20"></div>
        <div class="widget">
          <div class="fb-page" data-href="https://www.facebook.com/NATAYouth"  data-width="340"  data-hide-cover="false"  data-show-facepile="true"> </div> </div>
       </div>
      </div>
        
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 message-form ">
        <form method="post" action="<?php echo base_url()?>natau/about" id="" style="display: block;" class="positioned">
          <h2>Send us an Email</h2>
          <ul>
            <li>
              <label for="senderName">Your Name</label>
              <input type="text" name="name" maxlength="40" required placeholder="Please type your name" id="senderName" name="senderName">
            </li>
            <li>
              <label for="senderEmail">Your Email Address</label>
              <input type="email" maxlength="50" name="email" required placeholder="Please type your email address" id="senderEmail" name="senderEmail">
            </li>
            <li>
              <label style="padding-top: .5em;" for="message">Your Message</label>
              <textarea maxlength="10000" rows="5" cols="40" required placeholder="Please type your message" id="message" name="message"></textarea>
            </li>
          </ul>
          <div id="formButtons" class="form-buttons">
            <input type="submit" value="Send Email" name="sendMessage" id="sendMessage">
            <input type="button" value="Reset" name="reset" id="cancel">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
