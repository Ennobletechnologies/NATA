
  <?php if($this->input->post('email')){echo "<span class='email_color'>Email sent to Nata Admin</span>"; }?>
  <div class="slider-innder"> <img src="<?php echo base_url()?>img/index-sliders/about-banner.jpg" alt="banner"/></div>
  <div class="breadcrumb-bg">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>natau">NATA</a></li>
        <li class="active">About NATA</li>
      </ol>
    </div>
  </div>
  <div class="inner-page">
  <div class="container inner-content">
    <?php foreach($about_data as $page):?>
    <div class="row"> <?php echo nl2br($page['body']);//actual body ?>
      <div class="col-md-4 col-sm-3 col-xs-12 inner-right-block">
        <h4>2018 Convention Committee</h4>
        <ul class="list-unstyled list-inline">
          <li><img src="<?php echo base_url()?>img/executiveCommittee/RajeswarGangasaniReddy.jpg" class="img-responsive text-center" alt="mallanna"/>
            <p>Mr. Rajeswar Gangasani Reddy,<br />
              <span> FACP, President</span></p>
          </li>
          <li><img src="<?php echo base_url()?>img/executiveCommittee/SrikanthReddyPenumada.jpg" class="img-responsive" alt="mallanna"/>
            <p>Mr. Srikanth Reddy Penumada<span><br />
              Secretary</span></p>
          </li>
		<li><img src="<?php echo base_url()?>img/executiveCommittee/Chinnababu_Reddy.jpg" class="img-responsive" alt="mallanna"/>

            <p>Mr. Chinnababu Reddy<span><br />

              Treasurer</span></p>

          </li>
        </ul>
      </div>
    </div>
    <?php endforeach;?>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 message-form ">
        <form method="post" action="<?php echo base_url()?>natau/about" id="" style="display: block;" class="positioned">
          <h2>Send us an Email</h2>
          <ul class="list-unstyled">
            <li>
              <label for="senderName">Your Name</label>
              <input type="text" maxlength="40" required placeholder="Please type your name" id="senderName" name="senderName"/>
            </li>
            <li>
              <label for="senderEmail">Your Email Address</label>
              <input type="email" maxlength="50" required placeholder="Please type your email address" id="senderEmail" name="senderEmail"/>
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
