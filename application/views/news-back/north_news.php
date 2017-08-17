<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
 
<link href="<?php echo base_url(); ?>public/css/index.css" rel="stylesheet" type="text/css" />

<link type="text/css" href="<?php echo base_url(); ?>public/css/menu/menu.css" rel="stylesheet" />
    
</head>

<body style="background-image:url(<?php echo base_url(); ?>public/images/bgr1.jpg);" onload="MM_preloadImages('images/telugu.png')">
<div class="clear"></div>
<div id="continer_wrapper">
	<div id="main_div">
    			<div class="latest_stories">
        			<div class="latest_left">
                    	<div class="latest_head"><h1>North News</h2></div>
                        
                     
                        
                        
                        
                        <div class="clear"></div>
                        
                        <div class="news_content">
                        
                        <?php foreach ($north_news as $key=>$rec_news){ ?>
                        
                        <div class="">
            	<div class="news">
                <a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>" style="text-decoration:none;"><h5><?php echo strip_slashes($rec_news['news_title']); ?></h5></a>
                              
                <div class="news_cont"><a href="<?php echo base_url(); ?>news/view/<?php echo $rec_news['news_id']; ?>/<?php echo urlencode($rec_news['news_title']); ?>"> Read More...</a>  </div>
                
             
                <span class="read_more"></span>
                </div>
                   </div>
    
    	

    <?php } ?>
    
    
          
                        
      
      
    
              </div>
                        
                    </div>
                    
                    
                    <!-- left content-->
                    <!--<div class="latest_right">
                    	<div class="latest_add">
                   	    <img src="<?php echo base_url(); ?>public/images/add_4.jpg" width="336" height="280" /></div>
                        
                        <div class="related_stories">
                        	<div class="related_head"><span>related stories</span></div>
                            
                            <ul>
                            <?php foreach ($related_news as $key=>$r_news){ ?>
            	<li><a href="<?php echo base_url(); ?>news/view/<?php echo $r_news['news_id']; ?>/<?php echo urlencode($r_news['news_title']); ?>"><?php echo strip_slashes($r_news['news_title']); ?></a></li>
            	<?php } ?>
                
      
      
            </ul>
            <span class="read_more"><a href="#" style="padding:0 0 10px 0; margin:0 10px 0 0">More..</a></span>
            
                   	    </div>
                        
                    </div>-->
                
      		  </div>
              
              
    </div><!-- main div end here-->



</div>
    
    






<!--<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
-->

<!--<script type="text/javascript">

Shadowbox.init({
    skipSetup: false
});

window.onload = function() {
    Shadowbox.open({
        content:    "<div><img src='shadowbox/popup.jpg' width='800' height='400' border='0' /></div>",
        player:     "html",
        height:     400,
        width:      800
    });
};


</script>-->

</body>
</html>
