	<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
<!-- calender script and style ends-->
        <link rel="shortcut icon" href="<?php echo base_url()?>img/nata-favicon.png"> 
	<link rel="stylesheet" href="<?php echo base_url()?>css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/colorbox.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<!--<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>--> 
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.colorbox-min.js"></script>
	<script>
	$(".detail").live('click',function(){
			$(".s_date").html("Detail Event for "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("natau/detail_event");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info1"><h4>'+value.time+'</h4><p>'+value.event+'</p></div>';
							}else{
								html = html+'<div class="info2"><h4>'+value.time+'</h4><p>'+value.event+'</p></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html+add;
					$( ".detail_event" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
		});
		$(".delete").live("click", function() {
			if(confirm('Are you sure delete this event ?')){
				var deleted = $(this).parent().parent();
				var day =  $(this).attr('day');
				var add = '<input type="button" name="add" value="Add Event" val="'+day+'" class="add_event"/>';
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: "<?php echo site_url("natau/delete_event");?>",
					data:{<?php echo "year: $year, mon: $mon";?>, day: day,del: $(this).attr('val')},
					success: function(data) {
						if(data.status){
							if(data.row > 0){
								$('.d'+day).html(data.row);
							}else{
								$('.d'+day).html('');
								$( ".detail_event" ).fadeOut("slow").fadeIn("slow").html('<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>'+add);
							}
							deleted.remove();
						}else{
							alert('an error for deleting event');
						}
					}
				});
			}
		});
		$(".add_event").live('click', function(){
			$.colorbox({ 
					overlayClose: false,
					href: '<?php echo site_url('evencal/add_event');?>',
					data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>, day: $(this).attr('val')}
			});
		});
		$(".detail").live('click', function(){
			$.colorbox({ 
					overlayClose: false,
					href: '<?php echo site_url('evencal/popup');?>',
					data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>, day: $(this).attr('val')}
			});
		});
</script>
<!--calender script and style ends -->	
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css">
<link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>css/styles.css" type="text/css">
<!--Customized CSS-->
<link href="<?php echo base_url();?>css/style-revolution-slider.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/css/sliders/news-slider.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/common.css" rel="stylesheet">
<!--Slider CSS-->
<!--Calender Links-->

<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Raleway:300,400,500,600,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="home-page">
<div class="pre-header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-2 nata-logo"></div>
      <div class="col-md-6 col-sm-6 hidden-xs"><a class="nata-title" href="#"><img src="<?php echo base_url();?>img/title.png" class="img-responsive" alt="nata-title"></a></div>
      <div class="col-md-1 col-sm-1 phone-icon text-center hidden-xs" > <img src="<?php echo base_url();?>img/icons/phone-icon.png" class="img-responsive" alt="ph-icon">
        <p><span style="font-size:13px;">NATA-Helpline</span><br>
          855-628-2435</p>
      </div>
      <div class="col-md-3 col-sm-3 hidden-xs navbar-right">
        <ul class="social-top list-unstyled list-inline ">
          <li><a href="https://www.facebook.com/" target="_blank"><img src="<?php echo base_url();?>img/icons/facebook.png" /></a></li>
          <li><a href="https://www.linkedin.com/" target="_blank"><img src="<?php echo base_url();?>img/icons/linkedin.png" /></a></li>
          <li><a href="https://www.youtube.com/" target="_blank"><img src="<?php echo base_url();?>img/icons/youtube.png" /></a></li>
          <li><a href="https://www.rss.com/" target="_blank"><img src="<?php echo base_url();?>img/icons/rss.png" /></a></li>
          <li><a href="https://www.blogger.com/home" target="_blank"><img src="<?php echo base_url();?>img/icons/blogger.png" /></a></li>
        </ul>
        <form class="navbar-form" role="search">
          <div class="input-group add-on">
            <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class=" fa fa-search" ></i></button>
            </div>
          </div>
        </form>
        <ul class="top-menu list-unstyled list-inline">
          <li><a href="<?php echo base_url()?>user" target="_blank">Log In</a></li>
          <li><a href="<?php echo base_url()?>user/register">Registration</a></li>
          <li><a href="<?php echo base_url()?>contact_us">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="header">
  <div class="container">
    <nav class="navbar navbar-default navbar-right" role="navigation">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <div class="nata-logo" ><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive" alt="nata-logo"></a></div>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown homeLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="<?php echo base_url(); ?>" href="<?php echo base_url()?>">Home</a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>natau/president_message">President’s message</a></li>
                          <li><a href="<?php echo base_url()?>natau/community_services">Community Services</a></li>
                          <li><a href="<?php echo base_url()?>natau/conventions">Conventions</a></li>
                          <li><a href="<?php echo base_url()?>natau/board_meetings">Board Meetings</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown nataLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>natau/about">NATA</a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>natau/about">About NATA</a></li>
                          <li><a href="<?php echo base_url(); ?>natau/organization">Organization</a></li>
                          <li><a href="<?php echo base_url()?>natau/policies">Policies/By Laws</a></li>
                          <li><a href="<?php echo base_url()?>natau/sponsers">Sponsors</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/aboutus-menu.png" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown mediaLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>news" style="width: 98%;">Media</a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>news">News</a></li>
                          <li><a href="<?php echo base_url()?>news/newsletter">News Letter</a></li>
                          <li><a href="<?php echo base_url()?>news/tvcoverage">TV Coverage</a></li>
                          <li><a href="<?php echo base_url()?>news/printcoverage">Print Coverage</a></li>
                          <li><a href="<?php echo base_url()?>gallery/videos">Videos</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/media-menu.jpg" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown galleryLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>gallery">Gallery</a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>gallery">Pictures</a></li>
                          <li><a href="<?php echo base_url()?>gallery/videos">Videos</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/gallery-menu.jpg" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>            
            <li class="dropdown servicesLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>services">Services</a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>services">NATA Services</a></li>
                          <li><a href="<?php echo base_url()?>services/donations">Donations</a></li>
                          <li><a href="<?php echo base_url()?>services/volunteers">Volunteers</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/services-menu.jpg" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown eventsLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>events/nata_sambaralu">Events</a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>events/nata_sambaralu">నాటా సంబరాలు</a></li>
                          <li><a href="#<?php echo base_url()?>">Event Calendar</a></li>
                          
                          <li><a href="<?php echo base_url()?>events/fund_raising">Fund Raising</a></li>
                          <li><a href="<?php echo base_url()?>events/nata_seva_days">Nata Seva Days</a></li> 
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/events_menu.jpg" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown membershipLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>membership">Membership</a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>membership">About Membership</a></li>
                          <li><a href="<?php echo base_url()?>membership/member_benefits">Member Benefits</a></li>
                          <li><a href="<?php echo base_url()?>user/register">Member Registration</a></li>
                          <li><a href="<?php echo base_url()?>membership/change_of_address">Change Of Address</a></li>
                          <li><a href="<?php echo base_url()?>membership/membership_form">Membership Form</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/membership-menu.png" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown projectsLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url();?>projects">Projects</a>
              <ul class="dropdown-menu dropdown-single">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                            <?php foreach ($projects as $projects_data):?>
                          <li><a href="<?php echo base_url();?>projects/project_overview/<?php echo $projects_data['project_id'];?>"><?php echo $projects_data['project_title'];?></a></li>
                          <?php endforeach;?>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/projects-menu.jpg" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown youthLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>youth" style="width: 98%;">Youth</a>
              <ul class="dropdown-menu dropdown-single">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                          <li><a href="<?php echo base_url()?>youth">NATA Youth Facebook</a></li>
                          <li><a href="<?php echo base_url()?>youth/social_activities">Social Activities</a></li>
                          <li><a href="<?php echo base_url()?>youth/youth_events">Youth Events</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/youth-menu.jpg" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown teluguLink"> <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo base_url()?>telugu_newspapers">Telugu</a>
              <ul class="dropdown-menu dropdown-single">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-6 header-navigation-col">
                        <ul>
                         <li><a href="<?php echo base_url()?>telugu_newspapers">Telugu Newspapers</a></li>
                          <li><a href="<?php echo base_url()?>telugu_newspapers/nata_mata">Nata Mata</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 header-navigation-col"> <img src="<?php echo base_url()?>img/menu-pics/telugu-menu.png" class="img-responsive" /> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
<!--
html = html+'<div class="info1"><h4>'+value.time+'<a href=http://google.com>'+value.id+'</a>'+'</h4><p>'+value.event+'</p></div>';
for hyperlink with ID in event cal
-->