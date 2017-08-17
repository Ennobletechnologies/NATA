<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
</head>
<body>
<?php if($aboutUpdate) { ?>
<?php echo form_open('admin/aboutUpdate');?>
<table style="width:720px;">
  <?php foreach($aboutUpdate as $page):?>
  <tr>
    <td>Title</td>
    <td><input type="text" id="title" name="title"  value="<?php echo $page['title']; ?>"/>
      <?php //echo form_input('title',set_value('title')); ?></td>
    <td><?php echo form_error('title'); ?></td>
  </tr>
  <tr>
    <td>Content:</td>
    <td><textarea id="body" name="body"  value="<?php echo $page['body']; ?>"> </textarea>
      <?php //echo form_textarea('body',set_value('body')); ?></td>
    <td><?php echo form_error('body'); ?></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" class="form_submit" name="submit" value="Submit" /></td>
    <td></td>
  </tr>
</table>
<?php endforeach;?>
<?php echo form_close();?>
<?php } else { ?>
<?php echo form_open('admin/aboutUpdate');?>
<table style="width:720px;">
  <?php foreach($aboutUpdate as $page):?>
  <tr>
    <td>Title</td>
    <td><input type="text" id="title" name="title"  value="<?php echo $page['title']; ?>"/>
      <?php //echo form_input('title',set_value('title')); ?></td>
    <td><?php echo form_error('title'); ?></td>
  </tr>
  <tr>
    <td>Content:</td>
    <td><textarea id="body" name="body"  value="<?php echo $page['body']; ?>"> </textarea>
      <?php //echo form_textarea('body',set_value('body')); ?></td>
    <td><?php echo form_error('body'); ?></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" class="form_submit" name="submit" value="Submit" /></td>
    <td></td>
  </tr>
</table>
<?php endforeach;?>
<?php echo form_close();?>
<?php } ?>
