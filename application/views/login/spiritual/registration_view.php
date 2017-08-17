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
    type = Array('NATA(VIP In Srinivasa Kalyanam)','Life(VIP In Srinivasa Kalyanam)', 'Life', 'NATA');
    value = Array(116,116,75,50);
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
span .required,.error{
	color: red;
}

</style>
<body background="<?php echo base_url(); ?>img/bg.jpg">
<div class="container"> <img src="<?php echo base_url(); ?>img/board meeting.png" class="img-responsive" height="200px" width="1440"/></div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 col-sm-12 news-block">
        <div class="news-heading"><br>
         <center style="color:blue"> <h4 style="font-weight:bold">NATA VENKATESWARA KALYANAM MAHOTSAVAM APPLICATION</h4></center><hr>
        </div>
		 <div class="row"> 
           <tr ><center>
			<h4 style="color:green">Are you NATA Member</h4>
            <input type="radio" name="tt" value="non-nata"  onclick="doDisplay(this)" /> No
            <input type="radio" name="tt" value="nata" onclick="doDisplay(this);"/> Yes
            <?php if($this->session->flashdata('message')){?>
    	    <div class="alert alert-danger">      
            <?php echo $this->session->flashdata('message')?>
            </div>
            <?php } ?>
             <?php if($this->session->flashdata('message1')){?>
            <div class="alert alert-danger">      
            <?php echo $this->session->flashdata('message1')?>
            </div>
            <?php } ?>
             <?php if($this->session->flashdata('message2')){?>
            <div class="alert alert-danger">      
            <?php echo $this->session->flashdata('message2')?>
            </div>
            <?php } ?>
		    </center>
            
		    <span id="inserts" style="display:none">
			<div class="col-md-12 col-sm-12">
            <h4 style="color:red">The fields marked with <span class="required">*</span> must be completed.</h4>
            </div>
             <form id="frmSubscription" action="<?php echo base_url(); ?>spiritual/registration" method="post" name="Nata_Enquiry" onsubmit="return validateForm()">
             <div class="form-group col-md-6 col-sm-6">
              <label for="name"> First Name/User Name:<span class="required">*</span></label>
              <input class="form-control" type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name');?>" />
              <span class="error"><?php echo form_error('user_name'); ?></span>
            </div>
            <div >  
			<label for="nata_people">No.of people attending:<span class="required">*</span></label>
			</div>
			<div class="form-group col-md-3 col-sm-6">
              <input class="form-control" type="number" id="people_attend" name="people_attend" placeholder="Adult" value="<?php echo set_value('people_attend');?>"/>
			  <span class="error"><?php echo form_error('people_attend'); ?></span>
			</div>
			<div class="form-group col-md-3 col-sm-6">
			  <input class="form-control" type="number" id="children_attend" name="children_attend" placeholder="Children" value="<?php echo set_value('children_attend');?>"/>
			  <span class="error"><?php echo form_error('children_attend'); ?></span>
            </div>
			<div class="form-group col-md-6 col-sm-6">
              <label for="user_name"> Last Name:</label>
              <input class="form-control" type="text" id="last_name" name="last_name" value="<?php echo set_value('last_name');?>" />
              <span class="error"><?php echo form_error('last_name'); ?></span>
        	</div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="email_address">Email:<span class="required">*</span></label>
              <input class="form-control" type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
              <span class="error"><?php echo form_error('email_address'); ?></span> </div>
              <div class="form-group col-md-6 col-sm-6">
              <label for="password">Password:<span class="required">*</span></label>
              <input class="form-control" type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
              <span class="error"><?php echo form_error('password'); ?></span> </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="con_password">Confirm Password:<span class="required">*</span></label>
              <input class="form-control" type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
              <span class="error"><?php echo form_error('con_password'); ?></span> </div>
			 
             <div class="form-group col-md-6 col-sm-6">
              <label for="name_of_spouse">Name of Spouse:</label>
              <input class="form-control" type="text" id="name_of_spouse" name="name_of_spouse" value="<?php echo set_value('name_of_spouse'); ?>" />
              <span class="error"><?php echo form_error('name_of_spouse'); ?></span> 
			</div>
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
              <label for="address">Address 1<span class="required">*</span></label>
              <input class="form-control" type="text" id="address" name="address" value="<?php echo set_value('address'); ?>" />
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
              <span class="error"><?php echo form_error('homephone'); ?></span>
            </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="cellphone">Cell Phone:</label>
              <input class="form-control" type="text" id="cellphone" name="cellphone" value="<?php echo set_value('cellphone'); ?>" />
            </div>
             <div class="form-group col-md-6 col-sm-6">
              <label for="address">Address 2</label>
              <input class="form-control" type="text" id="aptno" name="aptno" />
            </div>
            <div class="form-group col-md-6 col-sm-6">
              <label for="fax ">Fax :</label>
              <input class="form-control" type="text" id="fax" name="fax" value="<?php echo set_value('fax'); ?>" />
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-md-12 col-sm-12">
              <table class="table table-responsive">
                <thead>
                <tr>
                  <th colspan="3">Ticket Category<span class="required">*</span></th>
                  </tr>
                <tr style="background: #09C; color:#FFF">
                  <th>Category (Check One)</th>
                  <th>Ticket Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><input type="radio" name="member_cat" value="Life(VIP In Srinivasa Kalyanam)" onclick="populate(this.value,this.form)">
                    VIP Seating Includes Special kalyanam Laddu (Per Family)</td>
                  <td>$116</td>
                  <td></td>
                </tr>                
                <tr>
                  <td><input type="radio" name="member_cat" value="Life" checked="checked" onclick="populate(this.value,this.form)">
                     Non-NATA Members (Per Family)</td>
                  <td>$ 75</td>
                  <td></td>
                </tr>
               
                <tr>
                  <td><label for="membership_amount">Amount ($):</label></td>
                  <td>
                    <input type="text" id="membership_amount" name="membership_amount" readonly="readonly" value="75" class="form-control"></td><td></td>

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
                    I understand that Ticket price is non-refundable. I declare that I have read the NATA constitution and bylaws (available online at <a href="http://www.nataus.org">www.nataus.org</a>) including membership rights and responsibilities and hereby affirm to abide by the NATA constitutional rules and policies. “ </td>
                </tr>
                <tr>
                  <td colspan="3" ><input style="background-image:src=h" id="submit" class="btn btn-success"  type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset" class="btn btn-default" ></td>
                </tr>
                <tr>
                  <td colspan="3" ><img class="alignleft size-full wp-image-1157 img-responsive" title="cards" src="<?php echo base_url();?>img/cards.jpg" alt="security"  width="100%"></td>
                </tr>
				 </tbody>
              </table>
            </div>
          </form>
          </span>
               			
             <span id="updates" style="display:none"><br>
			 <div class="col-md-12 col-sm-12">
             <h4 style="color:red">The fields marked with <span class="required">*</span> must be completed.</h4>
             </div>
               <form id="frmSubscription" action="<?php echo base_url(); ?>spiritual/nata_registration" method="post" name="Nata_Enquiry" onsubmit="return validateForm()">
             <div class="form-group col-md-6 col-sm-6">
              <label for="name">Email (NATA): <span class="required">*</span></label>
              <input class="form-control" type="text" id="nata_user" name="nata_user" placeholder="Email ID" value="<?php echo set_value('nata_user');?>" />
              <span class="error"><?php echo form_error('nata_user'); ?></span>
             </div>
			
           <!--  <div class="form-group col-md-6 col-sm-6">
              <label for="nata_pass"> Password (NATA): *</label>
              <input class="form-control" type="password" id="nata_pass" name="nata_pass" value="<?php echo set_value('nata_pass');?>" />
              <span class="error"><?php echo form_error('nata_pass'); ?></span>
			 </div> 
			 <div class="pull-right">
             <a href="http://www.nataus.org/user/forgot" target="_blank"><input id="submit" class="btn btn-success" value="Forgot Email & Password"></a>
             </div>
			  -->
			<div>  
			<label for="nata_people">No.of people attending:<span class="required">*</span></label>
			</div>
			<div class="form-group col-md-3 col-sm-6">
              <input class="form-control" type="number" id="nata_adult_attend" name="nata_adult_attend" placeholder="Adult" value="<?php echo set_value('nata_adult_attend');?>"/>
			  <span class="error"><?php echo form_error('nata_adult_attend'); ?></span>
			 </div>
			  <div class="form-group col-md-3 col-sm-6">
			  <input class="form-control" type="number" id="nata_children_attend" name="nata_children_attend" placeholder="Children" value="<?php echo set_value('nata_children_attend');?>"/>
			  <span class="error"><?php echo form_error('nata_children_attend'); ?></span>
            </div>
            
            <div class="clearfix"></div>
            <div class="form-group col-md-12 col-sm-12">
              <table class="table table-responsive">
                <thead>
                <tr>
                  <th colspan="3">Ticket Category<span class="required">*</span></th>
                  </tr>
                <tr style="background: #09C; color:#FFF">
                  <th>Category (Check One)</th>
                  <th>Ticket Price</th>
               
                </tr>
                </thead>
                <tbody>
                  <tr>
                  <td><input type="radio" name="member_cat" value="NATA(VIP In Srinivasa Kalyanam)" onclick="populate(this.value,this.form)">
                    VIP Seating Includes Special kalyanam Laddu (Per Family)</td>
                  <td>$116</td>
                  <td></td>
                </tr>
    			<tr>
                  <td><input type="radio" name="member_cat" value="NATA"  checked="checked" onclick="populate(this.value,this.form)">
                    For Only NATA Members (Per Family)</td>
                  <td>$ 50</td>
                </tr>
                <tr>
                  <td><label for="membership_amount">Amount ($):</label></td>
                  <td>
                    <input type="text" id="membership_amount" name="membership_amount" readonly="readonly" value="50" class="form-control"></td><td></td>

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
                    I understand that Ticket price is non-refundable. I declare that I have read the NATA constitution and bylaws (available online at <a href="http://www.nataus.org">www.nataus.org</a>) including membership rights and responsibilities and hereby affirm to abide by the NATA constitutional rules and policies. “ </td>
                </tr>
                <tr>
                  <td colspan="3" ><input id="submit" class="btn btn-success"  type="submit" name="submit" value="Fetch">
                    <input type="reset" value="Reset" class="btn btn-default" ></td>
                </tr>
                <tr>
                  <td colspan="3" ><img class="alignleft size-full wp-image-1157 img-responsive" title="cards" src="<?php echo base_url();?>img/cards.jpg" alt="security"  width="100%"></td>
                </tr>
				 </tbody>
              </table>
            </div>
          </form>
                </span>
				
	    </div>
      </div><br><br>
      <div class="col-md-3 ">
	  <img src="<?php echo base_url(); ?>img/venkateswara.jpg" class="img-rounded">
	   <br><br>
	    <table>
		<tr style="background: green; color:#FFF">
                  <th> <h3>&nbsp;&nbsp;&nbsp;Note : Free Entry For &nbsp;&nbsp;&nbsp;Above 55+ Devotees </h3></th>      
         </tr>
		 </table>
      </div>
    </div>
  </div>
</div>
</body>
<script>
$(function()
{
    $('input[type=radio]').each(function()
    {
        var state = document.getElementById(this.id);
        if (this.state) this.checked = state.checked;      
        this.click();
    });

});
</script> 
<script>
function doDisplay(radio)
{
    if (radio.value=='non-nata')
    {
            document.getElementById("inserts").style.display = "inline";
            document.getElementById("updates").style.display = "none"; 
    }
    else {
             document.getElementById("inserts").style.display = "none";
             document.getElementById("updates").style.display = "inline"; 
             
	}	     
}
</script>
<!--<div id="content">-->