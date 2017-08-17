<html>
    <head>
        <title>
            Nata Admin panel
        </title>
		<style type="text/css">
		a
		{
		font-weight:bold;
		color: rgb(145, 24, 24);
text-decoration: none;
font-size: 21px;
		}
		</style>
    </head>
    <body>
	<div style="min-height:550px;">
	<table style="margin: 0 auto;width:900px;">
	<tr><td><h2>Welcome <?php echo $this->session->userdata("user_name"); ?></h2> </td><td><div><?php echo anchor('user/logout', 'Logout'); ?></div></td></tr>
	<tr><td><a href="<?php echo base_url()?>admin/news">Manage News Page</a></td></tr>
	<tr><td><a href="<?php echo base_url()?>admin/events">Manage Events Page</a></td></tr>
	 </table>
		 </div>
    </body>
</html>