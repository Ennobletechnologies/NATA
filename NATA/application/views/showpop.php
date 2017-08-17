<?php 
	$h = '<select name="hour" id="hour">';
	$m = '<select name="minute" id="minute">';
	for($i = 0; $i< 60; $i++){
		if($i < 24){
			$h .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
		}
		$m .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
	}
	$h .= '</select>';
	$m .= '</select>';
?>
<div class="cal-popup">
    <!--<h4>Showing event for <?php echo "$day $month $year"?></h4>-->
	<?php 
	$edate=$month;
	//echo $edate=date("F", $edate);
	$edate=strtotime("$day $edate $year");
	$mdate = date('d-m-Y', $edate);
	//echo date("l jS of F", $edate);
	
	//echo date_format($edate, 'g:ia \o\n l jS F Y');
	//echo $sql="select * from events where event_date='$mdate'";?>
    <?php if(!empty($evencal_det)){ 
     echo "Showing event for ".date('M j Y', strtotime($mdate))."<br>";
              ?>
    
	<?php foreach($evencal_det as $det) { ?>
        <div class="event-list"><a href="<?php echo base_url() ?>events/view/<?php echo $det['idevent'] ?>"><?php echo strip_slashes(substr($det['event_title'],0,46))."<br>";?></a></div>
    <?php } }  ?>
        
        <?php if(empty($evencal_det)){
          echo "No Event on ".date('M j Y', strtotime($mdate)). " Thanks for visiting."; }?>
        
       
	
</div>