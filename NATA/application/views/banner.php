<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>

<title></title>
<!--tabs jquery start-->
<script type="text/javascript"
	src="<?php echo base_url(); ?>public/tabs/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript"
	src="<?php echo base_url(); ?>public/slideshow/jquery.cycle.all.2.74.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>public/tabs/tytabs.jquery.min.js"></script>
<!--  initialize the slideshow when the DOM is ready -->
<script type="text/javascript">

$(document).ready(function() {
    $('.slideshow').cycle({ 
    fx:      'fade', 
    delay:   -15000 
	
	
});

 $('.imageslide').cycle({ 
    fx:      'fade', 
    delay:   500 
	
	
});

 $('.imageslide1').cycle({ 
    fx:      'fade', 
    delay:   500 
	
	
});

 $('.imageslide2').cycle({ 
    fx:      'fade', 
    delay:   -8000 
	
	
});


});

</script>


<!-- video scroller-->

<script
	src="<?php echo base_url(); ?>public/jsCarousel2.0.0/jsCarousel-2.0.0.js"
	type="text/javascript"></script>

<link
	href="<?php echo base_url(); ?>public/jsCarousel2.0.0/jsCarousel-2.0.0.css"
	rel="stylesheet" type="text/css" />

<script type="text/javascript">
        $(document).ready(function() {
            $('#carouselv').jsCarousel({  autoscroll: true, masked: false, itemstodisplay: 3, orientation: 'v' });
            $('#carouselh').jsCarousel({  autoscroll: false, circular: true, masked: false, itemstodisplay: 5, orientation: 'h' });
            $('#carouselhAuto').jsCarousel({  autoscroll: true, masked: true, itemstodisplay: 5, orientation: 'h' });
		});       
        
    </script>
<!-- video scro-->

<script type="text/javascript"
	src="<?php echo base_url(); ?>public/css/newsslider/js/jquery.scrollTo.js"></script>

<script src="<?php echo base_url(); ?>public/jquery.min.js"></script>
<!--<script src="css/Carousel/js/slides.min.jquery.js"></script>-->

<script type="text/javascript">
  var jqery=$.noConflict();
  // Code that uses other library's $ can follow here.
//next arrows code-@nag
		jqery(function(){
			jqery('.slides').slides({
				preload: true,
				generateNextPrev: true
			});	
			});
	</script>

<script>
$(document).ready(function() {
	//actual slide code-@nag
	//Speed of the slideshow
	var speed = 3000;
	
	//You have to specify width and height in #slider CSS properties
	//After that, the following script will set the width and height accordingly
	$('#mask-gallery, #gallery li').width($('#slider').width());	
	$('#gallery').width($('#slider').width() * $('#gallery li').length);
	$('#mask-gallery, #gallery li, #mask-excerpt, #excerpt li').height($('#slider').height());
	
	//Assign a timer, so it will run periodically
	var run = setInterval('newsscoller(0)', speed);	
	
	$('#gallery li:first, #excerpt li:first').addClass('selected');

	//Pause the slidershow with clearInterval
	$('#btn-pause').click(function () {
		clearInterval(run);
		return false;
	});

	//Continue the slideshow with setInterval
	$('#btn-play').click(function () {
		run = setInterval('newsscoller(0)', speed);	
		return false;
	});
	
	//Next Slide by calling the function
	$('#btn-next').click(function () {
		newsscoller(0);	
		return false;
	});	

	//Previous slide by passing prev=1
	$('#btn-prev').click(function () {
		newsscoller(1);	
		return false;
	});	
	
	//Mouse over, pause it, on mouse out, resume the slider show
	$('#slider').hover(
	
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('newsscoller(0)', speed);	
		}
	); 	
	
});

function newsscoller(prev) {
//top news scroll-@nag
	//Get the current selected item (with selected class), if none was found, get the first item
	var current_image = $('#gallery li.selected').length ? $('#gallery li.selected') : $('#gallery li:first');
	var current_excerpt = $('#excerpt li.selected').length ? $('#excerpt li.selected') : $('#excerpt li:first');

	//if prev is set to 1 (previous item)
	if (prev) {
		
		//Get previous sibling
		var next_image = (current_image.prev().length) ? current_image.prev() : $('#gallery li:last');
		var next_excerpt = (current_excerpt.prev().length) ? current_excerpt.prev() : $('#excerpt li:last');
	
	//if prev is set to 0 (next item)
	} else {
		
		//Get next sibling
		var next_image = (current_image.next().length) ? current_image.next() : $('#gallery li:first');
		var next_excerpt = (current_excerpt.next().length) ? current_excerpt.next() : $('#excerpt li:first');
	}

	//clear the selected class
	$('#excerpt li, #gallery li').removeClass('selected');
	
	//reassign the selected class to current items
	next_image.addClass('selected');
	next_excerpt.addClass('selected');

	//Scroll the items
	$('#mask-gallery').scrollTo(next_image, 800);		
	$('#mask-excerpt').scrollTo(next_excerpt, 800);					
	
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<style>
#slider { /* You MUST specify the width and height */
	width: 1000px;
	height: 400px;
	position: relative;
	overflow: hidden;
	margin: 0 0 0 12px;
}

#mask-gallery {
	overflow: hidden;
}

#gallery { /* Clear the list style */
	list-style: none;
	margin: 0;
	padding: 0;
	z-index: 0;
	/* width = total items multiply with #mask gallery width */
	width: 900px;
	overflow: hidden;
}

#gallery li {
	/* float left, so that the items are arrangged horizontally */
	float: left;
}

#mask-excerpt { /* Set the position */
	position: absolute;
	top: 0;
	left: 0;
	z-index: 500;
	/* width should be lesser than #slider width */
	width: 200px;
	overflow: hidden;
}

#excerpt { /* Opacity setting for different browsers */
	filter: alpha(opacity : 60);
	-moz-opacity: 0.6;
	-khtml-opacity: 0.6;
	opacity: 0.6;
	/* Clear the list style */
	list-style: none;
	margin: 0;
	padding: 0;
	/* Set the position */
	z-index: 10;
	position: absolute;
	top: 0;
	left: 0;
	/* Set the style */
	width: 200px;
	background-color: #000;
	overflow: hidden;
	font-family: arial;
	font-size: 12px;
	color: #fff;
}

#excerpt li {
	padding: 5px;
}

#btn-prev {
	position: absolute;
	color: #036;
	font: bold 14px Arial, Helvetica, sans-serif;
	bottom: 5px;
	right: 50px;
	z-index: 9999
}

#btn-next {
	position: absolute;
	color: #036;
	font: bold 14px Arial, Helvetica, sans-serif;
	bottom: 5px;
	right: 10px;
	z-index: 9999
}

/*
			Load CSS before JavaScript
		*/ /*
			Slides container
			Important:
			Set the width of your slides container
			Set to display none, prevents content flash
		*/
.slides_container {
	width: 258px;
	display: none;
	height: 160px;
	margin: 15px 0 0 12px;
}

/*
			Each slide
			Important:
			Set the width of your slides
			If height not specified height will be set by the slide content
			Set to display block
		*/
.slides_container div.slide {
	width: 258px;
	height: 152px;
	display: block;
}

/*
			Set the size of your carousel items
		*/
.item {
	float: left;
	width: 115px;
	height: 152px;
	margin: 0 6px;
}

.item_img {
	width: 95%;
	height: 100px;
	border: solid 1px #ddd;
	padding: 1px;
}

.item_img img {
	width: 99%;
	height: 99%;
	margin: 1px;
}

.item_txt {
	font: bold 11px Arial, Helvetica, sans-serif;
	color: #024176;
}

.next {
	color: #e2510a;
	font: bold 12px Arial, Helvetica, sans-serif;
	float: right;
	margin: 0 5px 0 0;
	padding: 2px 5px;
	background: #ddd;
	background: url(images/bottom_next.png) no-repeat;
	position: relative;
	bottom: 100px;
	z-index: 9999;
	left: 14px;
	height: 18px;
	width: 16px;
}

.prev {
	color: #e2510a;
	font: bold 12px Arial, Helvetica, sans-serif;
	float: left;
	margin: 0 0px 0 5px;
	padding: 2px 5px;
	background: #ddd;
	background: url(images/bottom_prev.png) no-repeat;
	position: relative;
	bottom: 100px;
	z-index: 9999;
	right: 5px;
	height: 18px;
	width: 16px;
}

/*
			Optional:
			Reset list default style
		*/
.pagination {
	list-style: none;
	margin: 0;
	padding: 0;
	display: none;
}

/*
			Optional:
			Show the current slide in the pagination
		*/
.pagination .current a {
	color: red;
}
</style>

</head>

<body style="background-image:url(<?php echo base_url(); ?>public/images/bgr1.jpg);" onload="MM_preloadImages('images/telugu.png')">


<?php include 'menu.php'; ?>

<div id="continer_wrapper">
	<div id="main_div1">
    
    	<div class="topnews_banner">
   			<div class="top_news">
            </div>
            <div class="clear"></div>
            
            
            <div id="debug"></div>

<div id="slider">

	<div id="mask-gallery">
	<ul id="gallery">
    <?php 
foreach ($banner as $key=>$value)
{
?>	<li>
<img
		src="<?php echo base_url(); ?>public/banner/<?php echo $banner[$key]['banner_image']?>"
		width="1000px" height="400px" alt="" /></li>
		<?php 
}
?>
	</ul>
	</div>
	
	<div id="mask-excerpt">
	<ul id="excerpt">
    <?php 
foreach ($banner as $key=>$value)
{
?>	<li>
	<h3><?php echo $banner[$key]['banner_title']?></h3>
	<p>
		<?php echo $banner[$key]['banner_desc']?>
	</p>

</li>
<?php 
}
?>
	</ul>
	</div>

<div id="buttons">
	<a href="#" id="btn-prev"><img src="<?php echo base_url(); ?>public/images/prev.png" width="29" height="30" /></a> 
	
	<a href="#" id="btn-next"><img src="<?php echo base_url(); ?>public/images/next.png" width="29" height="30" /></a>
 
        </div>
</div>

</div>
           
           
            

            
    </div>
    
    
  
    
     

   
            
            
<style type="text/css">
.slideshow { height:100%; width:100%; position:relative; top:-161px;}
.slideshow img { padding:0px 0px 0px 0px; border: 1px solid #ccc; width:98%; height:98%; margin:1px; }

.imageslide { height:100%; width:100%;  position:relative; top:-161px;}
.imageslide img { padding:0px 0px 0px 0px; border: 1px solid #ccc; width:98%; height:98%; margin:1px; }

.imageslide1 { height:100%; width:100%; position:relative; top:-161px;}
.imageslide1 img { padding:0px 0px 0px 0px; border: 1px solid #ccc; width:98%; height:98%; margin:1px; }

.imageslide2 { height:100%; width:100%; position:relative; top:-161px;}
.imageslide2 img { padding:0px 0px 0px 0px; border: 1px solid #ccc; width:98%; height:98%; margin:1px; }

</style>
          
            
           
</div>

</div>
   
</body>
</html>
