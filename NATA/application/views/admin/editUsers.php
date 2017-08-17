<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>img/nata-favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
   selector: "textarea",
   theme: "modern",
   plugins: [
       "advlist autolink lists link image charmap print preview hr anchor pagebreak",
       "searchreplace wordcount visualblocks visualchars code fullscreen",
       "insertdatetime media nonbreaking save table contextmenu directionality",
       "emoticons template paste textcolor colorpicker textpattern"
   ],
   toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
   toolbar2: "print preview media | forecolor backcolor emoticons",
   image_advtab: true,
   templates: [
       {title: 'Test template 1', content: 'Test 1'},
       {title: 'Test template 2', content: 'Test 2'}
   ]
});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/admin/style.css" />
</head>
<body>
<div id="">
  	
	<div class="header">
    <div class="title"><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>public/admin/images/logo.png"/></a></div>
    
    <div class="header_right">Welcome Admin, <a href="<?php echo base_url(); ?>logout" class="logout">Logout</a> <br><a class="backtoadmin" href="<?php echo base_url() ?>admin">Back to Admin</a></div>
    
   
    
    </div>
    
    <div class="submenu">
    
    </div>          
                    
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    
        <ul id="tabsmenu" class="tabsmenu">
        <li class="active"><a href="#tab1">Edit Users</a></li>
   
    </ul>
    <div id="tab1" class="tabcontent">
      
         <div class="form">
        <?php foreach ($editUsers as $key=>$users); ?>
       <?php echo form_open_multipart('admin/updateUsers'); ?>

        
            <table style="width:720px;">
            <tr>
            <td>User Name</td>
            <td>
          <?php echo form_input(array("name"=>'username',"value"=>$users['username'])); ?>
            <td>

            <?php echo form_error('username'); ?>
            </td>
            </tr>
         <tr>
            <td>Password</td>
            <td>
          <?php echo form_input(array("name"=>'password',"value"=>$users['password'])); ?>
            <td>

            <?php echo form_error('password'); ?>
            </td>
            </tr>
         <tr>
            <td>Email</td>
            <td>
          <?php echo form_input(array("name"=>'email',"value"=>$users['email'])); ?>
            <td>

            <?php echo form_error('email'); ?>
            </td>
            </tr>
              <tr>
              <td></td>
              <td>
                 <input type="hidden" name="user_id" value="<?php echo $users['id']; ?>" />
              <input type="submit" class="form_submit" name="submit" value="Submit" /></td>
              <td></td></tr></table>
      <?php echo form_close(); ?>  
    
    
           
        
            <div class="clear"></div>
        </div>
    </div>
    </div>
     </div><!-- end of right content-->
                     
                    
              
    
    
    <div class="clear"></div>
    </div> <!--end of center_content-->
    
    

</div>

    	
</body>
</html>