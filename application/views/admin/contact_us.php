<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <?php foreach ($all_pages as $all_pages_data): ?>
            <h2><?php echo $all_pages_data['page_title']; ?></h2>
            <div class="col-md-3"><?php echo $all_pages_data['page_content']; ?> </div>
        <?php endforeach;
        ?>
        <div class="col-md-9">
            <form method="post" action="<?php echo base_url(); ?>Contact_us/form_process">
                <table>
                    <tr>
                        <td>Name</td><td><input type="text" name="name" value="<?php set_value('name') ?>">
                            <?php echo form_error('name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td><td><input type="text" name="email" value="<?php set_value('email') ?>">
                            <?php echo form_error('email'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mobile</td><td><input type="text" name="mobile" value="<?php set_value('mobile') ?>">
                            <?php echo form_error('mobile'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td><td><textarea name="message"><?php set_value('message') ?></textarea>
                            <?php echo form_error('message'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Send" class="btn green"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>