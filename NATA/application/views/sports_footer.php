<footer class="pre-footer">
    <div class="container">
        <div class="row footer-links">
            <div class="col-md-2 col-sm-2">
                <ul class="list-unstyled list-inline">
                    <h5>Events</h5>
                    <li><a href="#">NATA Sambaralu</a></li>
                    <li><a href="#">Fund Raising</a></li>
                    <li><a href="#">NATA Seva Days</a></li>
                    <li><a href="#">Board Meetings</a></li>
                </ul>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <h5>Services</h5>
                <ul class="list-unstyled list-inline">
                    <li><a href="#">NATA Services</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Donations</a></li>
                    <li><a href="#">Volunteers</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <h5>Membership</h5>
                <ul class="list-unstyled list-inline">
                    <li><a href="#">About Membership</a></li>
                    <li><a href="#">Member Benefits</a></li>
                    <li><a href="#">Change of Address</a></li>
                    <li><a href="#">Membership Form</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 media-icons">
                <h5>Media Partners</h5>
                <ul class="list-unstyled list-inline">
                    <li><img src="<?php echo base_url(); ?>../img/manTv.jpg" class="img-responsive" alt="mana"></li>
                    <li><img src="<?php echo base_url(); ?>../img/tv9.jpg" class="img-responsive" alt="tv9"></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <p>NATA, P.O. Box 7285,</p>
                <p> Princeton, NJ 08540</p>
                <p> Mail @ info@nataus.org</p>
            </div>
        </div>
        <div class="row footer">
            <div class="col-md-6 col-sm-6">Copyright © 2015 - North American Telugu Association | All rights reserved.</div>
            <!--<div class="col-md-6 col-sm-6 text-right">Design and Developed by <a href="#">infogensoftware.com</a></div>-->
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>sport/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>sport/js/jquery.mb.thumbGallery.min.js?_v=1.3.1"></script>
<!--dropdown--> 
<script type="text/javascript" >
    $('.navbar .dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
</script> 
<script type="text/javascript">
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hidden.bs.collapse', function () {
        $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus accordion-toggle span");
    });

</script>
<script>

    //   jQuery(function () {

    var isIframe = function() {
        var a = !1;
        try {
            self.location.href != top.location.href && ( a = !0 )
        } catch ( b ) {
            a = !0
        }
        return a
    };
    if ( !isIframe() ) {
        var logo = $( "<a href='http://pupunzi.com/#mb.components/components.html' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='http://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>" );
        $( "#wrapper" ).prepend( logo ), $( "#logo" ).fadeIn()
    }

    /* Extend or modify effects */
    jQuery.thumbGrid.transitions.fadeIn = {in: {x:"0", opacity:0, scale:0.9}, out: {x:0, opacity:0}};
    jQuery.thumbGrid.transitions.fadeOut = {in: {x:"0", opacity:0}, out: {x:0, scale:0.9, opacity:0}};
    jQuery.thumbGrid.transitions.slideLeft = {in: {x:$(window).width(), opacity:0}, out: {x:0, opacity:0}};
    jQuery.thumbGrid.transitions.slideRight = {in: {x:0, opacity:0}, out: {x:$(window).width(), opacity:0}};

    /* Initialize the gallery */
    jQuery("#thumbGrid").thumbGrid();

    /* customizer */
    jQuery("#effect").on("change",function(){
        var x = $(this).val();
        jQuery("#thumbGrid").data("nav_effect", x);
    });

    jQuery("#delay").on("change",function(){
        var x = parseFloat($(this).val());
        jQuery("#thumbGrid").data("nav_delay", x);
    });

    jQuery("#timing").on("change",function(){
        var x = parseFloat($(this).val());
        jQuery("#thumbGrid").data("nav_timing", x);
    });

    /*
     setTimeout(function(){
     $(".thumbGrid").fadeTo(800,1)
     },1000)
     */

    //   });

</script>
<script type="text/javascript" >
		$('.navbar .dropdown').hover(function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
		}, function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
		});
		</script> 
<script src="../includes/jquery.ticker.js" type="text/javascript"></script> 
<script src="../js/bootstrap-lightbox.js" type="text/javascript"></script> 
<script type="text/javascript">
        var started;
  function showLightBox() 
  { 
    if (started) return;
    started = setTimeout(function(){
        Lightbox.start(document.getElementById('firstImage'));
        started;
    },500);
  }
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
                var scrolling = setInterval(autoScroll,30);
            })
        }
    });
	$(function(){
		$(".scroll-tabs").pic_scroll();
		
	})

	</script>
</body>
</html>