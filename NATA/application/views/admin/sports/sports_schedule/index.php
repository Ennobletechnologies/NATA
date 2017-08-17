
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
                    <a href="<?php echo base_url();?>admin/add_sports_schedule" class="button green">+ Add New</a>
   
    </span>
                <table id="rounded-corner">
                    <thead>
                        <tr>
                            <th width="10%">S.No</th>
                            <th width="10%">Schedule Date</th>
                            <th width="10%">Schedule Time</th>
                            <th width="10%">Home Team</th>
                            <th width="10%">Away Team</th>
                            <th width="10%">Ground</th>
                            <th width="10%">Ground Responsibility</th>
                            <th width="10%">Published On</th>
                            <th width="10%">Edit</th>
                            <th width="10%">Delete</th>
                        </tr>
                        <?php 
                        $sno = 1;
                        foreach ($sports_schedule as $sports_schedule_data):?>
                        <tr>
                            <td><?php echo $sno;?></td>
                            <td><?php echo 
                            date('l m/d/Y',  strtotime($sports_schedule_data['schedule_date']));?></td>
                            <td><?php echo $sports_schedule_data['schedule_time'];?>:<?php echo $sports_schedule_data['schedule_time_minutes'];?> <?php echo $sports_schedule_data['schedule_time_in'];?></td>
                            <td><?php echo $sports_schedule_data['team_name'];?></td>
                            <td><?php echo $sports_schedule_data['team1_name'];?></td>
                            <td><?php echo $sports_schedule_data['ground'];?></td>
                            <td><?php echo $sports_schedule_data['ground_responsibility'];?></td>
                            <td><?php 
                            $pdate = date('m/d/Y',  strtotime($sports_schedule_data['pdate']));
                            echo $pdate;?></td>
                            <td><a href="<?php echo base_url();?>admin/edit_sports_schedule/<?php echo $sports_schedule_data['schedule_id'];?>" class="btn green"><i class="fa fa-pencil"></i>Edit</a></td>
                             <td><a class="btn red" href="<?php echo base_url('admin/delete_sports_schedule'); ?>/<?php echo $sports_schedule_data['schedule_id'];?>" onClick="return confirm('Are you sure you want to delete schedule on <?php echo $sports_schedule_data['schedule_date'];?> Team ?\n Click Ok to confirm!');"><i class="fa fa-trash-o"></i> Delete</a></td>
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
