<div id="panelwrap"><div class="header">    <div class="title"><a href="<?php echo base_url() ?>admin/index"><img src="<?php echo base_url() ?>public/admin/images/logo.png"/></a></div>    <div class="header_right">Welcome Admin, <a href="#" class="settings"></a> <a href="#" class="logout">Logout</a> <br><a class="backtoadmin" href="<?php echo base_url() ?>admin/nata_sports">Back to Sports</a></div></div>   <div class="submenu">    </div>                         <div class="center_content">      <div id="right_wrap">        <div id="right_content">                         <ul id="tabsmenu" class="tabsmenu">                <li class="active"><a href="#tab1">Update Fund raising</a></li>            </ul>            <div id="tab1" class="tabcontent">                <div class="form">                    <?php echo form_open_multipart('admin/update_committee_member'); ?>                        <table style="width:720px;">                        <tr>                            <td>Select Committee</td>                            <td>                                <select name="committee_id">                                    <option value="">Select Committe</option>                                    <?php foreach ($all_committees as $all_committees_data):?>                                    <option value="<?php echo $all_committees_data['committee_id'];?>" <?php if($committee_members_data['committee_id'] == $all_committees_data['committee_id']){echo 'selected';}?>><?php echo $all_committees_data['committee_name'];?></option>                                    <?php endforeach;?>                                </select>                            </td>                        </tr>                        <tr>                            <td>Member Name</td>                            <td>                                <input type="text" name="meber_name" value="<?php if (isset($committee_members_data['meber_name']) != '') echo $committee_members_data['meber_name']; ?>"/>                            </td>                        </tr>                        <tr>                            <td>Member Designation</td>                            <td>                             <input type="text" name="designation" value="<?php if (isset($committee_members_data['designation']) != '') echo $committee_members_data['designation']; ?>"/>                               </td>                        </tr>                        <tr>                            <td>Pic:</td><td><?php echo form_upload('member_pic'); ?></td><td></td>                        </tr>                        <tr>                             <td>                                <input type="hidden" name="pst_id" value="<?php if (isset($committee_members_data['member_id']) != '') echo $committee_members_data['member_id']; ?>"/>                                <input type="submit" class="form_submit" name="submit" value="<?php if (isset($committee_members_data['member_id']) != '') echo 'Update'; ?>" /></td>                            <td></td></tr></table>                    <?php echo form_close(); ?>                      <div class="clear"></div>                </div>            </div>        </div>    </div><!-- end of right content-->    <div class="clear"></div></div> <!--end of center_content-->