<html>
<head>
<title>PHP AJAX Image Upload</title>
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
    $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>ajaxupload/process_ajax",
            type: "POST",
            data:  new FormData(this),
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            $("#targetLayer").html(data);
            },
            error: function() 
            {
            }           
       });
    }));
});
</script>
</head>
<body>
<div class="bgColor">
<form id="uploadForm" action="ajaxupload/process_ajax" method="post" enctype="multipart/form-data">
<div id="targetLayer">No Image</div>
<div id="uploadFormLayer">
<label>Title</label><br/>
<input type="text" name="image_title" class="inputFile"/>
<br/>
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<input type="submit" value="Submit" class="btnSubmit" />
</form>
</div>
</div>
</body>
</html>