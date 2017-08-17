<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; <?php echo date('Y');?> <a href="#">Event Booking Admin Dashboard</a>. </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url()?>assets/admin/js/base.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/jquery.js" type="text/javascript"></script> 
<script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script> </script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap-datetimepicker.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script> 
<script type="text/javascript">
$(function() {
       $('#cmd').click(function(){
       $('#content').append('<p style="margin-left:300px;"><br/><input id="datetimepicker" name="datetimepicker[]" value="<?php echo date('Y-m-d H:i:s');?>" style="height:32px; width:587px;"/><a href="javascript:void(0);" class="remove_button btn btn-danger"><i class="fa fa-remove"></i></a></p>' );
});
$('body').on('focus',"#datetimepicker", function(){
    $(this).datetimepicker();
	 
});
var wrapper = $('#content');
$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('p').remove(); //Remove field html
		x--; //Decrement field counter
	});
		
});
</script> 
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
		format: 'yyyy-mm-dd hh:ii',
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	
	function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
  // alert ("record deleted")
}
return del;
}
</script>

</body>
</html>