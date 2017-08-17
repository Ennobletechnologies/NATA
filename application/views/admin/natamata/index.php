<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nata Mata</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" />
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-4">
        <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url()?>img/nata-logo.png" class="img-responsive"/></a> </div>
      </div>
      <div class="col-md-6 col-xs-8">
        <div class="navbar-right">
          <p class="member-tab">Welcome <?php echo $this->session->userdata('user_name'); ?> <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a> </p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="member-home" id="top">
  <div class="container">
    <div class="row">
      <div class=" col-lg-12 col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading ">
            <ol class="breadcrumb">
              <li><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></li>
              <li class="active">Nata Mata</li>
            </ol>
            <div class="pull-right"><a href="<?php echo base_url(); ?>admin/add_nata_mata" class="btn btn-success">+ Add Data</a></div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
          <tr>
            <th>S.No</th>
            <th>Nata Mata Title</th>
            <th>Published on</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          <?php
                            if ($nata_mata > 0) {
                                $sno = 1;
                                foreach ($nata_mata as $nata_mata_data):
                                    ?>
          <tr>
            <td><?php echo $sno;?></td>
            <td><?php echo $nata_mata_data['nm_title'];?></td>
            <!--<td><img src="<?php echo base_url();?>public/natamata/<?php echo $nata_mata_data['nm_image'];?>" width="100" height="100"/></td>-->
            <td><?php echo $nata_mata_data['published_on'];?></td>
            <td><a href="<?php echo base_url('admin/edit_nata_mata');?>/<?php echo $nata_mata_data['nm_id'];?>" class="btn-edit"><i class="fa fa-pencil"></i>Edit</a></td>
            <td><a class="btn-delete" href="<?php echo base_url('admin/delete_nata_mata'); ?>/<?php echo $nata_mata_data['nm_id']; ?>" onClick="return confirm('Are you sure you want to delete <?php echo $nata_mata_data['nm_title']; ?> nata mata ?\n Click Ok to confirm!');"><i class="fa fa-trash"></i> Delete</a></td>
          </tr>
          <?php
                                    $sno++;
                                endforeach;
                            }else {?>
          <tr>
            <td><h1 class="btn red" style="text-align: center">No projects found! add some projects.</h1></td>
          </tr>
          <?php     }
                            ?>
          <tr>
            <td><?php echo $pagination;?></td>
          </tr>
        </table>
      </div>
    <div class="panel-footer">
      <p>Copyright @ 2015 nataus.org - Designed and Developed By <a href="http://www.infogensoftware.com" target="_blank"> Infogensoftware.com</a> </p>
    </div>
  </div>
</div>
</body>
</html>