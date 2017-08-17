<footer class="pre-footer">
  <div class="container">
    <div class="row footer-links">
      <div class="col-md-2 col-sm-4 col-xs-12">
        <ul class="list-unstyled">
          <h5>Events</h5>
           <li><a href="#<?php echo base_url();?>calender">Event Calender</a></li>
          <li><a href="<?php echo base_url();?>events/nata_sambaralu">NATA Sambaralu</a></li>
          <li><a href="<?php echo base_url();?>events/fund_raising">Fund Raising</a></li>
          <li><a href="<?php echo base_url();?>events/nata_seva_days">NATA Seva Days</a></li>
        </ul>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12">
        <h5>Services</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo base_url();?>services">NATA Services</a></li>
          <li><a href="<?php echo base_url();?>natau/community_services">Community Services</a></li>
          <li><a href="<?php echo base_url();?>services/donations">Donations</a></li>
          <li><a href="<?php echo base_url();?>services/volunteers">Volunteers</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12">
        <h5>Membership</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo base_url();?>membership">About Membership</a></li>
          <li><a href="<?php echo base_url();?>membership/member_benefits">Member Benefits</a></li>
          <li><a href="<?php echo base_url();?>membership/change_of_address">Change of Address</a></li>
          <li><a href="<?php echo base_url();?>membership/membership_form">Membership Form</a></li>
        </ul>
      </div>
      <!--div class="col-md-3 col-sm-6 col-xs-12 media-icons">
        <h5>Media Partners</h5>
        <ul class="list-unstyled list-inline"><li><img src="<?php echo base_url();?>img/manTv.jpg" class="img-responsive" alt="mana"></li>
        <li><img src="<?php echo base_url();?>img/tv9.jpg" class="img-responsive" alt="tv9"></li></ul>
      </div-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <p>NATA, 5 Independence Way #300,</p>
        <p>Princeton, NJ 08540</p>
        <p> Mail : info@nataus.org</p>
      </div>
    </div>
    <div class="row footer">
      <div class="col-md-6 col-sm-6">Copyright © 2015 - North American Telugu Association | All rights reserved.</div>
     <!-- <div class="col-md-6 col-sm-6 text-right">Design and Developed by <a href="http://www.infogensoftware.com/" target="_blank">Infogen Software Inc</a></div>-->
    </div>
  </div>
</footer>
<script src="<?php echo base_url();?>js/bootstrap.min.js" type="text/javascript"></script> 
<!--<script src="<?php echo base_url();?>js/respond.min.js" type="text/javascript"></script>--> 
<!-- SLIDER JS--> 
<!--<script type="text/javascript" src="<?php echo base_url();?>js/slider/jquery-1.9.1.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>js/carousels.js"> </script> 
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jssor.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jssor.core.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jssor.utils.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jssor.slider.js"></script>  
<script src="<?php echo base_url();?>js/slider/thumbnail-scroll.js" type="text/javascript"></script>
<script type="text/javascript" >
		$j('.navbar .dropdown').hover(function() {
		  $j(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
		}, function() {
		  $j(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
		});
		</script>
<script type="text/javascript">
	jQuery.fn.extend({
        pic_scroll:function (){
            $(this).each(function(){
                var _this=$(this);
                var ul=_this.find("ul");
                var li=ul.find("li");
                var w=li.size()*li.outerHeight();
                li.clone().prependTo(ul);
                ul.width(2*w);
                var i=1,l;
                _this.hover(function(){i=0},function(){i=1});
                function autoScroll(){
                	l = _this.scrollTop();
                	if(l>=w){
                		_this.scrollTop(0);
                	}else{
                		_this.scrollTop(l + i);
                	}
                }
                var scrolling = setInterval(autoScroll,40);
            })
        }
    });
	$(function(){
		$(".scroll-tabs").pic_scroll();
			})


	</script><!--Auto Scroll--> 
	
</body>
</html>