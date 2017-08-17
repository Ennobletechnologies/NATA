<style  type="text/css">
    input {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  border: none;
}
    </style>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
        <div class="col-md-12">
<div id="content">
    
    <div class="reg_form">
        <div class="form_title"><h2>Payment Confirmation</h2></div>
        <?php //echo validation_errors('<p class="error">'); ?>
        <table width="850">
            <tr><td>
                    <label for="user_name">Member Name:</label></td><td>
                    <input type="text" id="user_name" name="user_name" readonly="readonly" value="<?php echo $this->session->userdata('s_username'); ?>" />
                    <span class="error"><?php echo form_error('user_name'); ?></span>
                </td></tr>
            <tr><td>
                    <label for="email_address">Email:</label></td><td>
                    <input type="text" id="email_address" name="email_address" readonly="readonly" value="<?php echo $this->session->userdata('s_email'); ?>" />
                    <span class="error"><?php echo form_error('email_address'); ?></span>
                </td></tr>
            <tr><td>
                    <label for="password">Password:</label></td><td>
                    <input type="password" id="password" name="password"  readonly="readonly" value="<?php echo $this->session->userdata('s_password'); ?>" />
                    <span class="error"><?php echo form_error('password'); ?></span>
                </td></tr>
                 
            <tr><td>
                    <label for="name_of_spouse">Name of Spouse:</label></td><td>
                    <input type="text" id="name_of_spouse" name="name_of_spouse"  readonly="readonly" value="<?php echo $this->session->userdata('s_name_of_spouse'); ?>" />
                    <span class="error"><?php echo form_error('name_of_spouse'); ?></span>
                </td></tr>
            <tr><td>
                    <label for="children1">Children / Age 1.</label></td><td>
                    <input type="text" id="children1" name="children1"  readonly="readonly" value="<?php echo $this->session->userdata('s_children1'); ?>" />
                    <input type="text" id="age1" name="age1"  readonly="readonly" value="<?php echo $this->session->userdata('s_age1'); ?>" style="width:30px;" />
                </td></tr>
            <tr><td>
                    <label for="children2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.</label></td><td>
                    <input type="text" id="children2" name="children2"  readonly="readonly" value="<?php echo $this->session->userdata('s_children2'); ?>" />
                    <input type="text" id="age2" name="age2"  readonly="readonly" value="<?php echo $this->session->userdata('s_age2'); ?>" style="width:30px;" />
                </td></tr>

            <tr><td>
                    <label for="address">Address / Apt.#</label></td><td>
                    <input type="text" id="address" name="address"  readonly="readonly" value="<?php echo $this->session->userdata('s_address'); ?>" />
                    <span class="error"><?php echo form_error('address'); ?></span>
                    <input type="text" id="aptno" name="aptno"  readonly="readonly" value="<?php echo $this->session->userdata('s_aptno'); ?>" style="width:50px;" />
                </td></tr>
            <tr><td>
                    <label for="city">City / State / Zip:</label></td><td>
                    <input type="text" id="city" name="city"  readonly="readonly" value="<?php echo $this->session->userdata('s_city'); ?>" />/
                    <span class="error"><?php echo form_error('city'); ?></span>
                    <input type="text" name="state"  readonly="readonly" value="<?php echo $this->session->userdata('s_state'); ?>">		
                  <span class="error"><?php echo form_error('state'); ?></span>/
                    <input type="text" id="zip" name="zip"  readonly="readonly" value="<?php echo $this->session->userdata('s_zip'); ?>" style="width:50px;" />
                    <span class="error"><?php echo form_error('zip'); ?></span>
                </td></tr>
            <tr><td>
                    <label for="homephone">Home Phone:</label></td><td>
                    <input type="text" id="homephone" name="homephone"  readonly="readonly" value="<?php echo $this->session->userdata('s_homephone'); ?>" />
                    <label for="cellphone">Cell Phone:</label></td><td>
                    <input type="text" id="cellphone" name="cellphone"  readonly="readonly" value="<?php echo $this->session->userdata('s_cellphone'); ?>" />
                    <span class="error"><?php echo form_error('cellphone'); ?></span>
                </td></tr>
            <tr><td>

                    <label for="fax ">Fax :</label></td><td>
                    <input type="text" id="fax" name="fax"  readonly="readonly" value="<?php echo $this->session->userdata('s_fax'); ?>" />
                </td></tr>
            <tr><td>
                    <label for="solicited_by">Member Solicited By:</label></td><td>
                    <input type="text" id="solicited_by" name="solicited_by"  readonly="readonly" value="<?php echo $this->session->userdata('s_solicited_by'); ?>" />
                </td></tr>
            <tr><td>
                  <label for="solicited_by">Membership Amount</label></td><td>
                   $<input type="text" id="membership_amount" name="membership_amount" readonly="readonly" value="<?php echo $this->session->userdata('s_memship_amt'); ?>" >
                </td></tr>
            <tr><td>
                    <label for="donation_towards_nata">Donation towards NATA <br>Community and Charitable Activities:</label></td><td>
                    $<input type="text" id="donation_towards_nata" name="donation_towards_nata"  readonly="readonly" value="<?php echo $this->session->userdata('s_donation'); ?>" onchange="updatetotal(this.value,this.form)" />
                </td></tr>
            <tr><td>
                    <label for="total_amount_enclosed">Total amount enclosed:</label></td><td>
                    $<input type="text" id="total_amount_enclosed" name="total_amount_enclosed" readonly="readonly"  value="<?php echo $this->session->userdata('s_total_amt'); ?>">
                </td></tr>
            <tr>
                <td><label for="total_amount_enclosed">Mode of Payment*</label></td>
                <td><input id="paymentmode1" onclick="displaytable('cc')" type="radio" name="paymentmode"  readonly="readonly" value="Credit Card" checked="checked"> Credit Card</td>
            </tr>
                  
        </table>
        <br/>
        <img class="alignleft size-full wp-image-1157" title="cards" src="<?php echo base_url();?>img/cards.jpg" alt="" width="492" height="52">
    </div><!--<div class="reg_form">-->    
</div><!--<div id="content">-->
<form action="https://globalgatewaye4.firstdata.com/pay" method="POST" name="myForm" id="myForm">
<?php
$totalamount=$this->session->userdata('s_total_amt');
$x_login = "WSP-NATA-qDdh2wA@UA"; // Take from Payment Page ID in Payment Pages interface
$transaction_key = "hIEtap9lOeOCitl1Hq_n"; // Take from Payment Pages configuration interface
$x_amount = $totalamount;
$x_currency_code = "USD"; // Needs to agree with the currency of the payment page
srand(time()); // initialize random generator for x_fp_sequence
$x_fp_sequence = rand(1000, 100000) + 123456;
$x_fp_timestamp = time(); // needs to be in UTC. Make sure webserver produces UTC

// The values that contribute to x_fp_hash
$hmac_data = $x_login . "^" . $x_fp_sequence . "^" . $x_fp_timestamp . "^" . $x_amount . "^" . $x_currency_code;
$x_fp_hash = hash_hmac('MD5', $hmac_data, $transaction_key);

echo ('<input name="x_login" value="' . $x_login . '" type="hidden">' );
echo ('<input name="x_amount" value="' . $x_amount . '" type="hidden">' );
echo ('<input name="x_fp_sequence" value="' . $x_fp_sequence . '" type="hidden">' );
echo ('<input name="x_fp_timestamp" value="' . $x_fp_timestamp . '" type="hidden">' );
echo ('<input name="x_fp_hash" value="' . $x_fp_hash . '" size="50" type="hidden">' );
echo ('<input name="x_currency_code" value="' . $x_currency_code . '" type="hidden">');

// create parameters input in html
foreach ($this->session->userdata as $a => $b) {
	echo "<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."'>";
}

?>
<input type="hidden" name="x_show_form" value="PAYMENT_FORM"/>
<input id="submit" class="btn slide_btn"  type="submit" name="submit" value="Submit">
                    
</form>

      
    </div>
  </div>
  </div>
</div>