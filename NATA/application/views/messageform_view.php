<div id="content">
<?php
foreach($query as $row)
{
?>
  	<div class="message_show">
    <p>
    	<?php echo $row->banner_title; ?>: Says
    </p>
    <p>
       	<?php echo $row->banner_desc; ?>
    </p>
    </div>
   
<?php
}
echo $pagination;
?>
</div><!--<div id="content">-->