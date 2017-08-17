<script>
    function getCheckedValue(radioObj) {

        //alert(radioObj);

        if (!radioObj)
            return "";

        var radioLength = radioObj.length;

        //alert(radioLength);

        if (radioLength == undefined)
            if (radioObj.checked)
                return radioObj.value;

            else
                return "";

        for (var i = 0; i < radioLength; i++) {

            if (radioObj[i].checked) {

                return radioObj[i].value;

            }

        }

        return "";

  }
    text = new Array()
    type = Array('Diamond', 'Platinum', 'Gold', 'Silver', 'Life', 'others');
    value = Array(25000,10000,5000,2500,50,1);
   //value = Array(12500, 5000, 2500, 1250, 50, 1);

// value = Array(25000,10000,5000,2500,100);
    function populate(r, f) {
        for (var i = 0; i < type.length; i++) {
            if (type[i] == r)
                f.membership_amount.value = value[i];
        }
        var don = f.donation_towards_nata.value;
        if (don.length == 0 || don == " ")
            f.donation_towards_nata.value = 0;
        updatetotal(f.donation_towards_nata.value, f);
    }
    function updatetotal(r,f){

 if(isNaN(r)){

    alert("Please enter the valid Amount.");
    document.getElementById('donation_towards_nata').value = "0";  //- value script

}else{

if(Number(r) < 0)
{
	alert("Please enter the valid Amount.");
	document.getElementById('donation_towards_nata').value = "0";  //- value script

}

else  //- value script
{
 	f.total_amount_enclosed.value = (f.membership_amount.value-0) + (r-0);
}
}
 }
function EnableDisable(terms, submit) {

var chkterms = document.getElementById(terms);

var btnsubmit = document.getElementById(submit);

if(chkterms.checked)

{

btnsubmit.disabled=false;

}

else

{

btnsubmit.disabled=true;

}

}

function disablesubmit(submit)

{

var btnsubmit = document.getElementById(submit);

btnsubmit.disabled=true;

var cctable = document.getElementById('ccinfo');

cctable.style.display = '';

var chkterms = document.getElementById('terms');

//alert( chkterms.checked);
}

</script>
<style type="text/css">
.error {
	color: red;
}
</style>
<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/news-banner.jpg" class="img-responsive" alt="news-banner"/></div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 col-sm-12 news-block">
        <div class="news-heading">
          <h4>NATA MEMBERSHIP APPLICATION</h4>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h4 class="grey">(50% Discount for Life Category until December 31st 2018)</h4>
            <p class="padding-top-10">The fields marked with <span class="required">*</span> must be completed. <br><b>Please use latest version of browsers,best compatibility with ie8+, chrome30.0+, mozilla30.0+ , safari6+ </b> </p>
          </div>
          <?php //echo validation_errors('<p class="error">'); ?>
          <form id="frmSubscription" action="<?php echo base_url(); ?>user/registration" method="post" name="Nata_Enquiry" onsubmit="return validateForm()">
            <div class="form-group col-md-6 col-sm-6">
              <label for="name">Member First Name<span class="required">*</span></label>
              <input class="form-control" type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name');?>" />
            </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="user_name">Member Last Name:</label>
              <input class="form-control" type="text" id="last_name" name="last_name" value="<?php echo set_value('last_name');?>" />
              </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="solicited_by">Member Solicited By:</label>
              <input class="form-control" type="text" id="solicited_by" name="solicited_by" value="<?php echo set_value('solicited_by'); ?>" />
            </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="name_of_spouse">Name of Spouse:</label>
              <input class="form-control" type="text" id="name_of_spouse" name="name_of_spouse" value="<?php echo set_value('name_of_spouse'); ?>" />
              <span class="error"><?php echo form_error('name_of_spouse'); ?></span> 
			</div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="password">Password:<span class="required">*</span></label>
              <input class="form-control" type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
              <span class="error"><?php echo form_error('password'); ?></span> </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="con_password">Confirm Password:<span class="required">*</span></label>
              <input class="form-control" type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
              <span class="error"><?php echo form_error('con_password'); ?></span> </div>
            <div class="form-group col-md-5 col-sm-5 col-xs-8">
              <label for="children1">Children 1</label>
              <input class="form-control" type="text" id="children1" name="children1" value="<?php echo set_value('children1'); ?>" />
            </div>
            <div class="form-group col-md-1 col-sm-1 col-xs-4" style="padding-left:0">
              <label> Age</label>
              <input class="form-control" type="text" id="age1" name="age1" value="<?php echo set_value('age1'); ?>" />
            </div>
            <div class="form-group col-md-5 col-sm-5 col-xs-8">
              <label for="children2">Children 2</label>
              <input class="form-control" type="text" id="children2" name="children2" value="<?php echo set_value('children2'); ?>" />
            </div>
            <div class="form-group col-md-1 col-sm-1 col-xs-4" style="padding-left:0">
              <label> Age</label>
              <input class="form-control" type="text" id="age2" name="age2" value="<?php echo set_value('age2'); ?>"/>
            </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="email_address">Email:<span class="required">*</span></label>
              <input class="form-control" type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
              <span class="error"><?php echo form_error('email_address'); ?></span> </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="address">Address 1<span class="required">*</span></label>
              <input class="form-control" type="text" id="address" name="address" value="<?php echo set_value('address'); ?>" />
              <span class="error"><?php echo form_error('address'); ?></span> </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="address">Address 2</label>
              <input class="form-control" type="text" id="aptno" name="aptno" value="<?php echo set_value('address'); ?>" />
              <span class="error"><?php echo form_error('address'); ?></span> </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="city">City<span class="required">*</span></label>
              <input class="form-control" type="text" id="city" name="city" value="<?php echo set_value('city'); ?>" />
              <span class="error"><?php echo form_error('city'); ?></span></div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="city">State<span class="required">*</span></label>
              <select id="state" name="state" class="form-control" >
                <option value="">Select Your State</option>
                <option value="AB_">Alberta</option>
                <option value="AK_">ALASKA</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="FM_">FEDERATED STATES OF MICRONESIA</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                <option value="YT">Yukon</option>
              </select>
              <span class="error"><?php echo form_error('state'); ?></span></div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="city">Zip Code:<span class="required">*</span></label>
              <input class="form-control" type="text" id="zip" name="zip" value="<?php echo set_value('zip'); ?>" />
              <span class="error"><?php echo form_error('zip'); ?></span> </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="homephone">Home Phone:<span class="required">*</span></label>
              <input class="form-control" type="text" id="homephone" name="homephone" value="<?php echo set_value('homephone'); ?>" />
            </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="cellphone">Cell Phone:</label>
              <input class="form-control" type="text" id="cellphone" name="cellphone" value="<?php echo set_value('cellphone'); ?>" />
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="fax ">Fax :</label>
              <input class="form-control" type="text" id="fax" name="fax" value="<?php echo set_value('fax'); ?>" />
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-md-12 col-sm-12">
              <table class="table table-responsive">
                <thead>
                <tr>
                  <th colspan="3">Membership Category<span class="required">*</span></th>
                  </tr>
                <tr style="background: #09C; color:#FFF">
                  <th>Category (Check One)</th>
                  <th>Membership Price</th>
                  <th>Discounted Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><input type="radio" name="member_cat" value="Diamond" onclick="populate(this.value,this.form)">
                    Diamond</td>
                  <td>$ 25,000</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="radio" name="member_cat" value="Platinum" onclick="populate(this.value,this.form)">
                    Platinum</td>
                  <td>$ 10,000</td>
                  <td></td>
                </tr>
                <tr>
                  <td style="color: #f00;
                    font-size: 15px;
                    font-weight: 500;"><input type="radio" name="member_cat" value="Gold"  onclick="populate(this.value,this.form)">
                    Gold</td>
                  <td>$ 5,000</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="radio" name="member_cat" value="Silver" onclick="populate(this.value,this.form)">
                    Silver</td>
                  <td>$ 2,500</td>
                  <td></td>
                </tr>
                <tr>
                  <td><input type="radio" name="member_cat" value="Life"  checked="checked" onclick="populate(this.value,this.form)">
                    Life</td>
                  <td style="text-decoration: line-through;">$ 100</td>
                  <td>$ 50</td>
                </tr>
                <tr>
                  <td><label for="membership_amount">Membership Amount :</label></td>
                  <td> $
                    <input type="text" id="membership_amount" name="membership_amount" readonly="readonly" value="50" class="form-control"></td><td></td>

                </tr>
                <tr>
                  <td><label for="donation_towards_nata">Donation towards NATA <br>
                      Community and Charitable Activities:</label></td>
                  <td> $
                    <input type="text" id="donation_towards_nata" name="donation_towards_nata" value="0" onchange="updatetotal(this.value,this.form)" class="form-control" /></td>
                  <td></td>
                </tr>
                <tr>
                  <td><label for="total_amount_enclosed">Total amount enclosed:</label></td>
                  <td> $
                    <input type="text" id="total_amount_enclosed" name="total_amount_enclosed" readonly="readonly"  value="50"  class="form-control"></td>
                  <td></td>
                </tr>
                <tr>
                  <td><label for="total_amount_enclosed">Mode of Payment<span class="required">*</span></label></td>
                  <td><input id="paymentmode1" onclick="displaytable('cc')" type="radio" name="paymentmode" value="Credit Card" checked="checked">
                    Credit Card</td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="3"><span class="required">*</span>
                    <input id="terms" onclick="EnableDisable('terms', 'submit');" type="checkbox" name="terms" value="Y" checked="checked" style="margin:5px;">
                    I understand that membership fee is non-refundable. I declare that I have read the NATA constitution and bylaws (available online at <a href="http://www.nataus.org">www.nataus.org</a>) including membership rights and responsibilities and hereby affirm to abide by the NATA constitutional rules and policies. “ </td>
                </tr>
                <tr>
                  <td colspan="3" ><input id="submit" class="btn btn-success"  type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset" class="btn btn-default" ></td>
                </tr>
                <tr>
                  <td colspan="3" ><img class="alignleft size-full wp-image-1157 img-responsive" title="cards" src="<?php echo base_url();?>img/cards.jpg" alt="security"  width="100%"></td>
                </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-3 hidden-xs latest-videos">
        <div class="row">
          <div class="col-md-12"> <img src="../img/member-reg.jpg" class="img-responsive" alt="member-reg"> </div>
          <div class="news-heading">
            <h4>Latest Videos</h4>
          </div>
          <div class="clearfix border-dot-bottom"></div>
          <div class="col-md-12">
            <h5>NATA President Sanjeeva Reddy With TV5 On NATA Highlights</h5>
            <p><span class="fa fa-clock-o">&nbsp;</span>June 10, 2014</p>
            <img src="../img/gallery/gallery14.jpg" class="img-responsive" alt="gallery"> </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <!--  <div class="row">
        <div class="col-md-12">
            <h5>Grand Sponsors</h5>
            <p><span class="fa fa-clock-o">&nbsp;</span>June 10, 2014</p>
            <img src="../img/prem_mallanna.jpg"  class="img-responsive" alt="mallanna"> </div>
        </div>-->
        <div class="clearfix border-dot-bottom"></div>
        <div class="row">
          <div class="widget col-md-12">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--<div id="content">-->