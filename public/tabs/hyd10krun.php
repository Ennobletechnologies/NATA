<?php
include('include/session.php');
include("config.php");
include("process_date.php");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />                
<meta name="description" content="United Way of Hyderabad was established in 2010. With the support by the heads of various companies like ADP,Cognizant, Times Of India, Bharat Biotec, Bank Of America, Deloitte, Suresh Productions, Novotel, JWT, Medwin, Sadguru, US Consulate and Govt. Of A.P.">
	<meta name="keywords" content="ngo, ngos, ngo's, ngo hyderabad, united way hyderabad, unitedway hyderabad, unitedwayhyderabad, uwh,">
	<meta name="author" content="United Way Hyderabad">
	<meta name="viewport" content="width=device-width,user-scalable=no">
	<meta property="og:title" content="United Way Hyderabad">
	<meta property="og:type" content="Organization">
	<meta property="og:url" content="index.php">
	<meta property="og:image" content="a/img/icons/fb-share.jpg">
	<meta property="og:site_name" content="United Way Hyderabad">
	<meta property="og:description" content="United Way of Hyderabad was established in 2010. With the support by the heads of various companies like ADP, Cognizant, Times Of India, Bharat Biotec, Bank Of America, Deloitte, Suresh Productions, Novotel, JWT, Medwin, Sadguru, US Consulate and Govt. Of A.P.">                                                                                                                                  <title>United Way Hyderabad</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon" />




<!--menu bar js script start-->
<link href="js/menuscript/css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/menuscript/js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/menuscript/js/slide.js"></script>

<!--menu bar js script end-->

<!--members login bar js script -->
<link rel="stylesheet" href="js/login/member_login/css/style.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
    <script src="js/login/member_login/js/login.js"></script>
    
    
    
    
    <script type="text/javascript">
$(document).ready(function () {	
	
	$('#nav li').hover(
		function () {
			//show its submenu
			$('ul', this).stop().slideDown(0);

		}, 
		function () {
			//hide its submenu
			$('ul', this).stop().slideUp(0);			
		}
	);
	
});
	</script>


<!--members login bar js script -->


</head>

<body style=" background-image:url(images/inner_bgr2.jpg); background-repeat:repeat-x; background-color:#0183d7;">


<div class="continer">





<div class="logo_menubar">
<a href="http://unitedwayhyderabad.org/"><div class="smile_logo"></div></a>
<div class="menu_continer">
<div class="left_menu"></div>
<div class="middle_menu">

<ul id="nav">
	<li><a href="index.php">Home</a>
</li><div style="float:left; height:35px; background-image:url(images/menu_line.gif); background-repeat:no-repeat; width:1px;"></div>
	<li><a href="about_us.php">About Us</a>

		<ul>
			  <li><a href="History.php">History</a></li>
    <li><a href="Vision_Mission.php">Vision & Mission</a></li>
    <li><a href="board_of_directors.php">Board of Directors</a></li>
    <li><a href="http://worldwide.unitedway.org/" target="_blank">United Way  Worldwide</a></li>
    <li><a href="http://www.unitedwayofindia.org/" target="_blank">United Way  India</a></li>
    
    
    <li><a href="projects.php">Projects</a></li>

		</ul>
		<div class="clear"></div>
	</li><div style="float:left; height:35px; background-image:url(images/menu_line.gif); background-repeat:no-repeat; width:1px;"></div>
    <li><a href="Payroll_and_Corporate_Giving.php">PayRoll & Corporate Giving</a>

		<ul>
			<li><a href="Payroll_giving.php">PayRoll Giving</a></li>
    <li><a href="Corporate_giving.php"> Corporate Giving &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;</a></li>

		</ul>
		<div class="clear"></div>
	</li><div style="float:left; height:35px; background-image:url(images/menu_line.gif); background-repeat:no-repeat; width:1px;"></div>
	<li><a href="hyd10krun.php">Hyderabad 10k</a>
		
		<div class="clear"></div>
	</li><div style="float:left; height:35px; background-image:url(images/menu_line.gif); background-repeat:no-repeat; width:1px;"></div>
    <li><a href="BeingaPartnerwithUs.php">Partner With Us</a>

		<ul>
			<li><a href="CorporatePartners.php">Corporate Partners</a></li>
    
    <li><a href="NGOPartners.php"> NGO Partners</a></li>
    <li><a href="Volunteers.php">Volunteers</a></li>

		</ul>
		<div class="clear"></div>
	</li><div style="float:left; height:35px; background-image:url(images/menu_line.gif); background-repeat:no-repeat; width:1px;"></div>
	<li><a href="contact_us.php">Contact Us</a>
</li><div style="float:left; height:35px; background-image:url(images/menu_line.gif); background-repeat:no-repeat; width:1px;"></div>
</ul>


</div>
<?php  include('Member_Login.php'); ?>
<div class="right_menu"></div>


</div>
</div>





<div class="headder">
<a href="http://unitedwayhyderabad.org/"><div class="logo"></div></a>
<a href="#"><div class="live_united_gif"></div></a>

<?php include('Count_Down.php'); ?>
</div>



<div class="main">



<script type="text/javascript" src="js/slider/js/jquery.cycle.min.js"></script>
<script src="js/slider/js/jquery.easing.1.3.js"></script>
<script src="js/slider/js/jquery.easing.compatibility.js"></script>
<script type="text/javascript">
$(function() {
			
				$.fn.cycle.transitions.captionSlide = function($cont, $slides, opts) {
					$cont.parent().css('overflow','hidden');
					opts.fxFn = function(curr,next,opts,cb,fwd) {
						$(next).css({ left: $cont.width() + 'px' });
						$('#caption').animate({ left: '-' + ($('#caption').outerWidth(true) * 1.5 ) + 'px' }, 625, opts.easing, function() {
							$('#caption').html($(next).find('.captionHidden').html());
							$(curr).animate({ left: '-' + $cont.width() + 'px' }, 1000, opts.easing, function() {
								$(curr).css({ display: 'none' });
							});
							$(next).css({ display: 'block' }).animate({ left: '0px' }, 1000, opts.easing, function() {
								$('#caption').animate({ left: '35px' }, 625, opts.easing, function() {
									if(cb) cb();
								});
							});
						});
					}
				}
				
			
			$('#slider').cycle({
				fx: 'captionSlide', // choose your transition type, ex: fade, scrollUp, shuffle, etc..
                timeout: 4500,
				easing: 'backout'
			});
		});
</script>
<style type="text/css">

#container_slider {
	width: 1000px;
	margin:0px;
	float:left;
}

#sliderCont {
	height:434px;
	position: relative;
	z-index: 3;
	
	
	-webkit-box-shadow: 0 0 7px rgba(0, 0, 0, 0.35), inset 0 -1px 0 rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 0 7px rgba(0, 0, 0, 0.35), inset 0 -1px 0 rgba(0, 0, 0, 0.2);
	box-shadow: 0 0 7px rgba(0, 0, 0, 0.35), inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}
#slider {
	width: 1000px;
	height: 434px;
	z-index: 1;
	margin: 0;
	
	
}
#slider li {
	margin: 0;
}
div.caption {
	display: block;
	position: absolute;
	bottom: 100px;
	left: 35px;
	z-index: 2;
	font-weight: lighter;
}
div.captionHidden {
	display: none;
}
div.caption span.item {
	display: inline-block;
	padding: 10px;
	font-size:18px;
	background: rgba(255, 255, 255, 0.7); 
	
	color: #319cff;
}
.caption_bold{ font-size:xx-large; font-weight:bold; font-smooth:always; color:#ff8400;}
div.caption span.item.second {
	margin-left: 15px;
	margin-top: -5px;
}

span.slider-highlight {
	color: #ffcf1e;
}


</style>







<div class="about_us_banner"><img src="images/15k.jpg" width="1000" height="250" /></div>

<div class="banner_footer"></div>
<div style="margin:0px; float:left; height:auto; width:1000px;  background-color:#fff;">


<div style="width:403px; height:75px; position:absolute;left:557px; top: 355px;"> <img src="images/INOVIES_UWH_15K.gif" border="0" width="403" height="75" /></div>
<div style="float:left; height:auto; margin:10px 0px 15px 20px; width:960px;-moz-border-radius: 20px; border:1px #dadada dashed;
  -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;   background-color:#F7F7F7;">
    <p style="font-family:Verdana, Geneva, sans-serif; font-size:x-large; font-weight:normal; color:#065d9a; padding:5px 0px 0px 11px;">Jamba Cloud Hyderabad 10k</p>
    <p style="border-bottom:1px solid #cccccc; margin-top:8px; margin-left:5px; margin-right:8px;"></p>
   <p class="about_us_text">

<br />

<strong style=" font-size:14px; font-style:italic; line-height:1.3em;"><span style="color:#0055a6;">Though the HYD10K run is in place since a decade,</span> <span style="color:#ef4e31;">this is the &quot;First time in the history of 10K, all the participating corporates have the opportunity to route their contributions to NGO's they prefer&quot;.</span></strong><br /><br />

United Way of Hyderabad is the Charity Partner of Jamba Cloud Hyderabad 10k and aims to develop and leverage the event into a great credible platform for giving and running for a cause.<br /><br /> The event will be held on 25th November 2012 at Necklace road. Every year around thousands of runners take part in the event in various categories. The event has incredible press coverage and visibility in the city and across the nation. It provides a great opportunity for a NGO to gain visibility and raise significant amounts for their organization and the causes supported by them.



 <p style="border-bottom:1px solid #cccccc; margin-left:5px; margin-top:3px; margin-right:8px;"></p>
<br />
</p>

    
    </div>
    <div style="float:left; height:auto; margin:5px 0px 15px 20px; width:960px;-moz-border-radius: 20px; border:1px #dadada dashed;
  -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;   background-color:#F7F7F7;">
  

</p>

   <span><img src="images/uwh_inovies.jpg" width="960" height="297" border="0"  /></span> 
    </div>
    
    <div style="float:left; height:auto; margin:25px 0px 0px 20px; width:710px;-moz-border-radius: 20px; border:1px #dadada dashed;
     -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px; background-color:#F7F7F7;">


<br />

<p style="font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#065d9a; padding:0px 0px 0px 10px; ">Charity Aspect of Jamba Cloud Hyderabad 10k in a Nutshell </p>
<p class="about_us_text">

&curren; 	All NGO's are required to register with United Way of Hyderabad and submit mandatory legal and financial documents as asked for in the registration form. These documents are available for donor inspection at our office. UWH will conduct a due diligence process to ensure the bonafides of the registering NGO and provide assurance to donors on the credibility of the platform.<br /><br />
&curren; 	All participating NGO's are eligible to block a certain number of charity running spots (bibs) which they can utilize to raise funds for themselves. The availability of such bibs is mentioned on the online page of each NGO on this website.<br /><br />



</p>
<p style="border-bottom:1px solid #cccccc; margin-left:5px; margin-top:3px; margin-right:8px;"></p>
<br />



<p style="font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#065d9a; padding:0px 0px 0px 10px; ">Role of UWH as Charity Partner </p>

<p class="about_us_text">

&curren;  To touch lives through initiative that is quantifiable, sustainable and can be enveloped into a larger canvas by engaging local communities  <br /><br />



&curren; Facilitate & supplement pledge raising efforts of individuals, companies and NGOs

<br /><br />

&curren; Create, build and communicate the Charity Structure <br /><br />

&curren; Work on all aspects of Charity like registrations, race day logistics, communications and receiving donations.<br /><br />

&curren; Accounting & Reconciling of Pledges<br /><br />

&curren; Disbursement of funds to beneficiary NGOs<br /><br />

&curren; 80G receipts to all donors<br /><br /><p style="border-bottom:1px solid #cccccc; margin-left:5px; margin-top:3px; margin-right:8px;"></p>


<br />



<br />

 <?php
$sql_pdf=mysql_query("select * from `pdf_path` where `id`=1");
$query_pdf=mysql_fetch_array($sql_pdf);
?>
 <?php
$sql_pdf1=mysql_query("select * from `pdf_path` where `id`=2");
$query_pdf1=mysql_fetch_array($sql_pdf1);
?>
 <a style="" href="pdf_regforms/Pricing_categorywise.doc">
 <img style="float:right;" src="pdf_regforms/pricing.gif" border="0" /></a>
<br /><br />
</p>


</div>

<div style="float:left; height:auto; margin:22px 0px 0px 20px; width:235px;  -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px; background-color:#F7F7F7; -moz-border-radius: 20px; border:1px #dadada dashed; ">
<img src="images/i5k_runside.png" width="232" height="808" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="19,233,220,292" href="ngos_list.php" />
  <area shape="rect" coords="17,471,218,522" href="we_care.php" />
  <area shape="rect" coords="19,314,216,367" href="dream_runner.php" />
  <area shape="rect" coords="21,392,218,442" href="young_challengers.php" />
  <area shape="rect" coords="20,552,219,600" href="PledgeKit.rar" />
<area shape="rect" coords="8,156,221,211" href="Corporate_List.php" />
  <area shape="rect" coords="23,637,212,771" href="signup.php" />
</map>
<br />
  

</div>
</div>

<div class="main_box-continer">
  <div class="table_2"></div>
  <div class="table_2"></div>




</div></div>
</div><div class="footer_continer">
<div class="footer">
<div class="footer_menu">
<ul><li><a href="index.php">Home</a></li>
<li>|</li>
<li><a href="about_us.php">About Us</a></li>
<li>|</li>

<li><a href="Payroll_and_Corporate_Giving.php">PayRoll & Corporate Giving</a></li>
<li>|</li>
<li><a href="hyd10krun.php">Hyderabad 10k </a></li>
<li>|</li>
<li><a href="BeingaPartnerwithUs.php">Partner With Us</a></li>
<li>|</li>
<li><a href="contact_us.php">Contact Us</a></li>
<li>|</li>
<li><a href="terms&conditions.php">Take Action</a></li>
<li>|</li>
<li><a href="privacy.php">Privacy</a></li>
  


<br /><br />


</ul>

</div>
<div style="margin:0px auto; width:900px; color:#fff;  font-weight:normal; text-align:center;">
 
  Website optimised for IE 9.0 with 1024 x 768 screen resolution | © United Way  Hyderabad 2012
 
|  Designed and Maintained By <a href="http://inovies.com/inovies_profile_icon.html" target="_blank"  style="color:#FF0;">Inovies</a>

</div>
</div></div>



</body>
</html>
