<div class=""> <img src="<?php echo base_url(); ?>img/president-text-new.jpg" alt="president message"/>
  <div class="breadcrumb-bg">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li class="active">President Message</li>
    </ol>
  </div>
</div>
  <div class="inner-page">
  <div class="container">
    <div class="row margin-both">
      <div class="col-md-12 hidden-sm hidden-xs pm-header"></div>
      <div class="col-md-12 col-sm-12 pm-content-bg">
        <div class="row">
          <div class="col-md-1 hidden-sm hidden-xs"></div>
          <div class="col-md-2 hidden-sm hidden-xs pm-left-bar"></div>
          <div class="col-md-8 col-sm-12 col-xs-12 pm-content padding-top-20">
		  <?php foreach ($about_view as $about): ?>
		  <?php { ?>
            <h3><?php echo strip_slashes($about['title']); ?></h3>

<?php echo strip_slashes($about['message']); ?>

			<?php } ?>
			<?php endforeach;?>
          </div>
          <div class="col-md-1  col-sm-0"></div>
        </div>
        <div class="col-md-12  hidden-sm hidden-xs pm-footer"></div>
      </div>
    </div>
  </div>
</div>

</div>