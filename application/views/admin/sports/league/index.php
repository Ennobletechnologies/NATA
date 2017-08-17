
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
                <h1 style="text-align: center;color: #E29024;">Welcome To Nata Sports</h1>
                <a href="<?php echo base_url();?>admin/nata_sports" class="backtoadmin pull-right">Back To Sports</a>
                <span class="form_sub_buttons">
                    <a href="<?php echo base_url();?>admin/add_about_league" class="button green">+ Add New</a>
   
    </span>
                <table id="rounded-corner">
                    <thead>
                        <tr>
                            <th width="20%">S.No</th>
                            <th width="20%">League Title</th>
                            <th width="20%">League Content</th>
                            <th width="20%">Published On</th>
                            <th width="10%">Edit</th>
                            <th width="10%">Delete</th>
                        </tr>
                        <?php 
                        $sno = 1;
                        foreach ($league as $league_data):?>
                        <tr>
                            <td><?php echo $sno;?></td>
                            <td><?php echo $league_data['league_title'];?></td>
                            <td><?php echo word_limiter($league_data['content'],'15');?></td>
                            <td><?php 
                            $pdate = date('m/d/Y',  strtotime($league_data['pdate']));
                            echo $pdate;?></td>
                            <td><a href="<?php echo base_url();?>admin/edit_about_league/<?php echo $league_data['league_id'];?>" class="btn green"><i class="fa fa-pencil"></i>Edit</a></td>
                             <td><a class="btn red" href="<?php echo base_url('admin/delete_about_league'); ?>/<?php echo $league_data['league_id'];?>" onClick="return confirm('Are you sure you want to delete about league ?\n Click Ok to confirm!');"><i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                        <?php
                        $sno++;
                        endforeach;?>
                    </thead>
                </table>
                <?php echo $pagination;?>
            </div>
        </div><!-- end of right content-->
        <div class="clear"></div>
    </div> <!--end of center_content-->
