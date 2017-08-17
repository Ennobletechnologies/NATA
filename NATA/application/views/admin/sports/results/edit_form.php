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
                <li class="active"><a href="#tab1">Update Team Results</a></li>
            </ul>
            <div id="tab1" class="tabcontent">
                <div class="form">
                    <?php echo form_open_multipart('admin/update_sports_results'); ?> 
                    <table style="width:720px;">
                        <tr>
                            <td>Select Team</td>
                            <td>
                                <select name="team_id" required="">
                                    <option value="">Select Team</option>
                                    <?php foreach ($teams as $teams_data):?>
                                    <option value="<?php echo $teams_data['team_id'];?>" <?php if($results_data['team_id'] == $teams_data['team_id']){
echo 'selected';}?>><?php echo $teams_data['team_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Played Matches</td>
                            <td>
                                <input type="text" name="played" value="<?php echo $results_data['played'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Winning Matches</td>
                            <td><input type="text" name="win" value="<?php echo $results_data['win'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Lost Matches:</td><td>
                                <input type="text" name="lost" value="<?php echo $results_data['lost'];?>">  
                            </td>
                        </tr>
                        <tr>
                            <td>Draw Matches:</td><td>
                                <input type="text" name="draw" value="<?php echo $results_data['draw'];?>">  
                            </td>
                        </tr>
                        <tr>
                            <td>Points:</td><td>
                                <input type="text" name="points" value="<?php echo $results_data['points'];?>">  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="form_submit" name="submit" value="<?php if(isset($results_data['result_id'])!='')echo 'Update';?>">
                                <input type="hidden" class="form_submit" name="pst_id" value="<?php if(isset($results_data['result_id'])!='')echo $results_data['result_id'];?>">
                            </td>
                            <td></td></tr></table>
                    <?php echo form_close(); ?>  
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div><!-- end of right content-->
    <div class="clear"></div>
</div> <!--end of center_content-->
