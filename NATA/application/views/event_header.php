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
        <title><?php if(empty($title)) { echo "North American Telugu Association | NATA| nataus.org";} else {echo $title;}?></title>
        <meta name="description" content="<?php if(empty($description)) { echo "North American Telugu Association ";} else {echo  $description;}?>">
        <meta name="keywords" content="<?php if(empty($keywords)) { echo "North American Telugu Association ";} else {echo  $keywords;}?>">
        <!-- calender script and style ends-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/colorbox.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-70625304-1', 'auto');
            ga('send', 'pageview');

        </script>

        <script type='text/javascript'>
            var $jq = jQuery.noConflict();
        </script>
        <script>
            $jq(".detail").live('click', function () {
                $jq.colorbox({
                    overlayClose: false,
                    href: '<?php echo site_url('evencal/popup'); ?>',
                    data: {year:<?php echo $year; ?>, mon:<?php echo $mon; ?>, day: $jq(this).attr('val')}
                });
            });
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.colorbox-min.js"></script>
        <script>
            /*$(".detail").live('click',function(){
             $(".s_date").html("Detail Event for "+$(this).attr('val')+" <?php echo "$month $year"; ?>");
             var day = $(this).attr('val');
             var add = '';
             $.ajax({
             type: 'post',
             dataType: 'json',
             url: "<?php echo site_url("natau/detail_event"); ?>",
             data:{<?php echo "year: $year, mon: $mon"; ?>, day: day},
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
             url: "<?php echo site_url("natau/delete_event"); ?>",
             data:{<?php echo "year: $year, mon: $mon"; ?>, day: day,del: $(this).attr('val')},
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
             href: '<?php echo site_url('evencal/add_event'); ?>',
             data:{year:<?php echo $year; ?>,mon:<?php echo $mon; ?>, day: $(this).attr('val')}
             });
             });
             $(".detail").live('click', function(){
             $.colorbox({ 
             overlayClose: false,
             href: '<?php echo site_url('evencal/popup'); ?>',
             data:{year:<?php echo $year; ?>,mon:<?php echo $mon; ?>, day: $(this).attr('val')}
             });
             });
             function myFunc() {
             overlayClose: false,
             href: '<?php echo site_url('evencal/popup'); ?>',
             data:{year:<?php echo $year; ?>,mon:<?php echo $mon; ?>, day: $(this).attr('val')}
             }
             */
        </script>
        <!--calender script and style ends -->
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css" type="text/css">
        <!--Customized CSS-->
        <link href="<?php echo base_url(); ?>css/style-revolution-slider1.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>public/css/sliders/news-slider.css" rel="stylesheet" type="text/css">
        <!--Slider CSS-->
        <!--Calender Links-->
<!-- event bookings -->
<link href="<?php echo base_url();?>public/css/sliders/news-slider.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/full-slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.bootstrap-touchspin.css">
<!-- event bookings ends -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Raleway:300,400,500,600,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <?php $product_id = $this->uri->segment(1);
    if($product_id=="")
	{
		echo "<body class='home-page' style='border-top: 2px solid #C90;background: url(/img/nataDesktop.jpg) center 114px repeat-y;'>";
	}
	else
	{
		
		echo "<body class='home-page'>";
	}
	?>
   <!-- <body class="home-page">-->

      <img style="width:100%; background:#560000" src="<?php echo base_url()?>assets/images/Nata-3rd-Convention-Header.png" class="img-responsive">
       
        <!--
        html = html+'<div class="info1"><h4>'+value.time+'<a href=http://google.com>'+value.id+'</a>'+'</h4><p>'+value.event+'</p></div>';
        for hyperlink with ID in event cal
        --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script type='text/javascript'>
            var $j = jQuery.noConflict();
        </script> 
        <script type='text/javascript'>
            $j(".nag").click(function () {
                alert("ok");
            });
        </script>