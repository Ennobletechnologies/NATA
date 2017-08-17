<div id="panelwrap">
<div class="header">
    <div class="title"><a href="<?php echo base_url() ?>admin/index"><img src="<?php echo base_url() ?>public/admin/images/logo.png"/></a></div>
    <div class="header_right">Welcome Admin, <a href="#" class="settings"></a> <a href="#" class="logout">Logout</a> <br><a class="backtoadmin" href="<?php echo base_url() ?>admin/nata_sports">Back to Sports</a></div>
</div>   
<div class="submenu">    
</div>                         
<div class="center_content">  
    <div id="right_wrap">
        <div id="right_content">             
            <ul id="tabsmenu" class="tabsmenu">
                <li class="active"><a href="#tab1">Add Sports Schedule</a></li>
            </ul>
            <div id="tab1" class="tabcontent">
                <div class="form">
                    <?php echo form_open_multipart('admin/add_sports_schedule'); ?> 
                    <table style="width:720px;">
                        <tr>
                            <td>Schedule Date</td>
                            <td><input type="date" name="schedule_date" required=""></td>
                        </tr>
                        <tr>
                            <td>Schedule Date</td>
                            <td>
                                <select name="schedule_time" required="">
                                    <option value="AM">Hours</option>
                                    <?php for($h = 1; $h<=12; $h++):?>
                                    <option value="<?php echo $h;?>"><?php echo $h;?></option>
                                    <?php endfor;?>
                                </select>
                                <select name="schedule_time_minutes" required="">
                                    <option value="AM">Minutes</option>
                                    <?php for($m = 00; $m<=59; $m++):?>
                                    <option value="<?php echo $m;?>"><?php echo $m;?></option>
                                    <?php endfor;?>
                                </select>
                            <select name="schedule_time_in" required="">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Home Team</td>
                            <td>
                                <select name="home_team" required="">
                                    <option value="">Select Home Team</option>
                                    <?php foreach ($teams as $teams_data):?>
                                    <option value="<?php echo $teams_data['team_id'];?>"><?php echo $teams_data['team_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Away Team</td>
                            <td>
                                <select name="away_team" required="">
                                    <option value="">Select Away Team</option>
                                    <?php foreach ($teams1 as $teams1_data):?>
                                    <option value="<?php echo $teams1_data['team_id'];?>"><?php echo $teams1_data['team1_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Ground Name</td>
                            <td>
                                <input type="text" name="ground" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Ground Responsibility</td>
                            <td><textarea name="ground_responsibility" required=""></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
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
