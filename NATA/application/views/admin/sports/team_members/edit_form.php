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
                <li class="active"><a href="#tab1">Update Team Members</a></li>
            </ul>
            <div id="tab1" class="tabcontent">
                <div class="form">
                    <?php echo form_open_multipart('admin/update_team_member'); ?> 
                    <table style="width:720px;">
                        <tr>
                            <td>Select Team</td>
                            <td>
                                <select name="team_id" required="">
                                    <option value="">Select Team</option>
                                    <?php foreach ($teams as $teams_data):?>
                                    <option value="<?php echo $teams_data['team_id'];?>" <?php if($teams_data['team_id'] == $team_members_data['team_id']){
     echo 'selected';
                                    }?>><?php echo $teams_data['team_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>
                                <input type="text" name="fname" value="<?php echo $team_members_data['fname'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="lname" value="<?php echo $team_members_data['lname'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Dob:</td><td>
                                <input type="date" name="dob" value="<?php echo $team_members_data['dob'];?>">  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="form_submit" name="submit" value="<?php if(isset($team_members_data['member_id'])!=''){
echo 'Update';} ;?>"/>
                                <input type="hidden" class="form_submit" name="pst_id" value="<?php if(isset($team_members_data['member_id'])!=''){
echo $team_members_data['member_id'];} ;?>"/>  
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
