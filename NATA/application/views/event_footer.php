<footer class="pre-footer">
  <div class="container">
     <div class="row footer">
      <div class="col-md-6 col-sm-6">Copyright © 2015 - North American Telugu Association | All rights reserved.</div>
      <div class="col-md-6 col-sm-6 text-right">Design and Developed by <a href="http://www.infogensoftware.com/" target="_blank">Infogen Software Inc</a></div>
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