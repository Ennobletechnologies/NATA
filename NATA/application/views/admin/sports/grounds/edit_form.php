<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', league_content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>
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
                <form method="post" action="<?php echo base_url();?>admin/update_grounds">
                <table >
                    <thead>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>League Title</td>
                            <td><input type="text" name="title" value="<?php echo $grounds_data['title'];?>"></td>
                        </tr>
                        <tr>
                            <td>League Content</td>
                            <td><textarea name="content" id="league_content" required="" class="form-control"><?php echo $grounds_data['content'];?></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="<?php if(isset($grounds_data['ground_id'])!=''){
echo 'Update';}else{
        echo 'Add';}?>" class="backtoadmin">
                            <td><input type="hidden" name="pst_id" value="<?php if(isset($grounds_data['ground_id'])){
echo $grounds_data['ground_id'];}?>">    
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
