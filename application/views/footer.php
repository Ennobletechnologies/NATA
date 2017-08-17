<footer class="pre-footer">
  <div class="container">
    <div class="row footer-links">
      <div class="col-md-2 col-sm-2">
        <ul class="list-unstyled list-inline">
          <h5>Events</h5>
          <li><a href="#<?php echo base_url();?>calender">Event Calender</a></li>
          <li><a href="<?php echo base_url();?>events/nata_sambaralu">NATA Sambaralu</a></li>
          <li><a href="<?php echo base_url();?>events/fund_raising">Fund Raising</a></li>
          <li><a href="<?php echo base_url();?>events/nata_seva_days">NATA Seva Days</a></li>
        </ul>
        </ul>
      </div>
      <div class="col-md-2 col-sm-2">
        <h5>Services</h5>
        <ul class="list-unstyled list-inline">
          <li><a href="<?php echo base_url();?>services">NATA Services</a></li>
          <li><a href="<?php echo base_url();?>natau/community_services">Community Services</a></li>
          <li><a href="<?php echo base_url();?>services/donations">Donations</a></li>
          <li><a href="<?php echo base_url();?>services/volunteers">Volunteers</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-2">
        <h5>Membership</h5>
        <ul class="list-unstyled list-inline">
          <li><a href="<?php echo base_url();?>membership">About Membership</a></li>
          <li><a href="<?php echo base_url();?>membership/member_benefits">Member Benefits</a></li>
          <li><a href="<?php echo base_url();?>membership/change_of_address">Change of Address</a></li>
          <li><a href="<?php echo base_url();?>membership/membership_form">Membership Form</a></li>
        </ul>
      </div>
      <!--div class="col-md-3 col-sm-3 media-icons">
        <h5>Media Partners</h5>
        <ul class="list-unstyled list-inline"><li><img src="<?php echo base_url();?>img/manTv.jpg" class="img-responsive" alt="mana"></li>
        <li><img src="<?php echo base_url();?>img/tv9.jpg" class="img-responsive" alt="tv9"></li></ul>
      </div-->
      <div class="col-md-3 col-sm-3">
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
<!--<script type="text/javascript" src="js/slider/jquery-1.9.1.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>js/carousels.js"> </script> 
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jssor.core.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jssor.utils.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>js/slider/jssor.slider.js"></script> 
<script src="<?php echo base_url();?>js/slider/thumbnail-scroll.js" type="text/javascript"></script> 
<script type="text/javascript" >
		$('.navbar .dropdown').hover(function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
		}, function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
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
	<script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,//[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,//[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
</body>
</html>