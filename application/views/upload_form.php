<html>
<head>
<title>Slider images upload</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" required /><br /><br />
<!--Title1 <input type="text" name="title1" id="title1" required/><br /><br />
Title2 <input type="text" name="title2" id="title2" required/><br /><br />
Title3 <input type="text" name="title3" id="title3" required/><br /><br />-->

<input type="submit" value="upload" />

</form>

</body>
</html>