<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/gallery-banner.jpg" alt="gallery-banner"/></div>
<div class="breadcrumb-bg">
  <div class="container">
  	<div class="col-md-4 col-sm-5">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
      <li class="active">Pictures Gallery</li>
    </ol>
    </div>
    <div class="col-md-8 col-sm-7 hidden-xs inner-marquee">
        <marquee behavior="scroll" scrollamount="7">
<?php foreach ($view_news1 as $key => $rec_news):?>
<span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?> 
<?php endforeach;?>
</marquee>   
  </div></div>
</div>
<div class="gallery-page">
  <div class="container ">
    <div class="row sponsors-head">
      <ul class="list-unstyled list-inline padding-bottom-10">
        <li class="padding-bottom-10"><a href="#"><img src="<?php echo base_url(); ?>img/sponsors-1.jpg" alt="sponsors-1"></a></li>
        <li class="padding-bottom-10"><a href="#"><img src="<?php echo base_url(); ?>img/sponsors-2.jpg" alt="sponsors-2"></a></li>
        <li class="padding-bottom-10"><a href="#"><img src="<?php echo base_url(); ?>img/sponsors-3.jpg" alt="sponsors-3"></a></li>
        <li class="padding-bottom-10"><a href="#"><img src="<?php echo base_url(); ?>img/sponsors-4.jpg" alt="sponsors-4"></a></li>
      </ul>
    </div>
    <div class="row album-gallery">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h3>Pictures Gallery</h3>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
      <ul class="list-unstyled list-inline"><?php foreach ($gallery as $key=>$gal){ ?>
      <li class="album-item">
        <div class="album-img"><a href="<?php echo base_url()?>gallery/view_gal_trail/<?php echo $gal['id'];?>"><img src="<?php echo base_url(); ?>public/albumpic/<?php echo $gal['album_image']; ?>" alt="gal_trail" class="img-responsive"/></a></div>
        <div class="album-title"><p><?php echo $gal['name'];?></p></div>
        </li> <?php } ?></ul>
      </div>
     
    </div>
      <div class="row">
          <div class="col-md-12 col-sm-12">
            <ul class="pagination">
                <li><?php //echo $pagination;?></li>
            </ul>
          </div>
        </div>
  </div>
</div>

<!--  
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Albums</h1>
            </div>
			
			<?php foreach ($gallery as $key=>$gal){ ?>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="<?php echo base_url()?>gallery/gallery_name/<?php echo $gal['id'];?>">
                <img class="img-responsive" src="<?php echo base_url(); ?>public/albumpic/<?php echo $gal['album_image']; ?>" alt="">
				<figcaption><?php echo $gal['name'];?></figcaption>
                </a>
            </div>
			<?php } ?>
			</div>
 
        <hr>

        
     </div>-->