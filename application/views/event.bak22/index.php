<script type="text/javascript" src="<?php echo base_url()?>assets/js/jssor.core.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jssor.utils.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jssor.slider.js"></script>
<script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,

                $PauseOnHover: true,//[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

                $ArrowKeyNavigation: true,//Allows arrow key to navigate or not
                $SlideWidth: 1200,//[Optional] Width of every slide in pixels, the default is width of 'slides' container
                //$SlideHeight: 300,//[Optional] Height of every slide in pixels, the default is width of 'slides' container
                $SlideSpacing: 0,//Space between each slide in pixels
                $DisplayPieces: 2,//Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 300,//The offset position to park slide (this options applys only when slideshow disabled).

                $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,//[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,//[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,//[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1//[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 1920));
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

<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1920px;
        height: 450px; overflow: hidden;"> 
  <!-- Slides Container -->
  <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1920px; height: 450px;
            overflow: hidden;">
    <?php  if(count($events)>2)
	{
	foreach($events as $event) { ?>
    <div><img style="left: 300px" u="image" src="<?php echo base_url()?>public/uploads/admin_events/<?php echo $event['m_events_pic'];?>" /></div>
    <?php }} else { 
	foreach($events as $event) { ?>
    <div><img style="left: 300px" u="image" src="<?php echo base_url()?>public/uploads/admin_events/<?php echo $event['m_events_pic'];?>" /></div>
	<div><img style="left: 300px" u="image" src="<?php echo base_url()?>public/uploads/admin_events/slider2.jpg" /></div>
	<div><img style="left: 300px" u="image" src="<?php echo base_url()?>public/uploads/admin_events/slider2.jpg" /></div>
	<?php }  }?>
  </div>
  
  <!-- Arrow Navigator Skin Begin -->
  <style>
            .jssora13l, .jssora13r, .jssora13ldn, .jssora13rdn {
                position: absolute;
                cursor: pointer;
                display: block;
                overflow: hidden;
				top:0px !important;}

        </style>
  <!-- Arrow Left --> 
  <span u="arrowleft" class="jssora13l" style="width: 15.6%; height: 100%; left: 0px; top:0px !important; background:rgba(255,255,255,.81)"> </span> 
  <!-- Arrow Right --> 
  <span u="arrowright" class="jssora13r" style="width: 22%; height: 100%; top: 0px !important; right: 0px; background:rgba(255,255,255,.81) "> </span> 
  <!-- Arrow Navigator Skin End --> 
  <a style="display: none" href="http://www.jssor.com">javascript</a> </div>
<div class="event-menu">
  <p><a href="#">Events</a></p>
</div>
<div class="container" style="background:#f7f7f7">
<div class="row">
  <?php foreach($events as $event) { ?>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="thumbnail"> <img src="<?php echo base_url()?>public/uploads/admin_events/thumb/<?php echo $event['m_events_pic'];?>" class="img-responsive" alt="events">
      <div class="date-price">
        <p class="dates">Starts at <?php echo date("M j", strtotime($event['m_events_datetime']));?></p>
        <p class="prices"><?php echo $event['m_events_cost'];?> Onwards</p>
      </div>
      <div class="event-details">
        <h4 class="event-name">
        <?php echo $event['m_events_name'];?>
        </h4>
        <p class="booking-btn"><a href="<?php echo base_url()?>event/index/get_event/<?php echo "EV000".$event['m_events_id'];?>" class="btn">Book Event</a></p>
      </div>
    </div>
  </div>
  <?php }?>
</div>
</div>
