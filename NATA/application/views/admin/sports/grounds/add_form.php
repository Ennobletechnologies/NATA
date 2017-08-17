
<div id="panelwrap">

    <div class="header">
<!--<div class="title"><a href="<?php echo base_url() ?>admin_home/index"><img src="<?php echo base_url() ?>public/admin/images/logo.png"/></a></div>-->

        <div class="header_right">Welcome Admin, <a href="<?php echo base_url(); ?>user/logout" class="logout">Logout</a></div>
    </div>

    <div class="submenu">

    </div>          

    <div class="center_content">  
        <div id="right_wrap">
            <div id="right_content" style="margin:0 auto; width:98%; margin-top:50px;">
                <a href="<?php echo base_url();?>admin/nata_sports" class="backtoadmin pull-right">Back To Sports</a>
                <h1 style="text-align: center;color: #E29024;">Welcome To Nata Sports</h1>
                <form method="post" action="<?php echo base_url();?>admin/add_grounds">
                <table >
                    <thead>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Ground Title</td>
                            <td><input type="text" name="title" required="" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Ground Content</td>
                            <td><textarea name="content" id="content" required="" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Add" class="backtoadmin">
                           <input type="reset"  value="Reset" class="backtoadmin"> 
                            </td>
                        </tr>
                    </thead>
                </table>
                    </form>
            </div>
        </div><!-- end of right content-->
        <div class="clear"></div>
    </div> <!--end of center_content-->
