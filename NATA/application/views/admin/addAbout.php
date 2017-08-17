<html>
<head>
<title>
</title>
</head>
<body>

<?php echo form_open('admin/aboutInsert');?>
<table style="width:720px;">
                        
            <tr>
            <td>Title</td>
            <td>

            <?php echo form_input('title',set_value('title')); ?></td>
            <td>

            <?php echo form_error('title'); ?>
            </td>
            </tr>
            <tr>
            <td>Content:</td>
            <td><?php echo form_textarea('body',set_value('body')); ?></td>
            <td><?php echo form_error('body'); ?></td>
             </tr>
			               <tr>
              <td></td>
              <td>
              <input type="submit" class="form_submit" name="submit" value="Submit" /></td>
              <td></td></tr></table>
<?php echo form_close();?>