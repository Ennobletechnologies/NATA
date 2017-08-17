<div class="slider-innder"> <img src="<?php echo base_url();?>img/index-sliders/gallery-banner.jpg" class="img-responsive" alt="gallery-banner"/></div>
<div class="breadcrumb-bg">
  <div class="container">
    <div class="col-md-4 col-sm-5">
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="news.html">Services</a></li>
        <li class="active">Volunteers</li>
      </ol>
    </div>
    <div class="col-md-8 col-sm-7 inner-marquee">
      <marquee behavior="scroll" scrollamount="7">
      <?php foreach ($view_news1 as $key => $rec_news):?>
      <span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?>
      <?php endforeach;?>
      </marquee>
    </div>
  </div>
</div>
<div class="inner-page">
  <div class="container inner-content">
    <div class="row">
      <div class="col-md-9 col-sm-8 news-block">
          <div class="news-heading">
            <h4>Volunteers Information</h4>
          </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-md-offset-3">
            <div class="form-heading">
              <p class="required"><span>*</span> All Fields are Compulsory</p>
            </div>
            <form method="post" action="<?php echo base_url();?>services/form_process" class="donation-form">
              <div class="form-group">
                <label for="firstName"> First Name</label>
                <input type="text" name="fname" class="form-control" id="" placeholder="First Name" value="<?php echo set_value('fname');?>">
                <span class="required"><?php echo form_error('fname');?></span> </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="lname" class="form-control" id="" placeholder="Last Name" value="<?php echo set_value('lname');?>">
                <span class="required"><?php echo form_error('lname');?></span> </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="street" class="form-control" id="" placeholder="Street" value="<?php echo set_value('street');?>">
                <span class="required"><?php echo form_error('street');?></span>
                <input type="text" name="city" class="form-control" id="" placeholder="City" value="<?php echo set_value('city');?>">
                <span class="required"><?php echo form_error('city');?></span>
                <select name="state" class="form-control">
                  <option value="">Choose your State</option>
                  <option value="AB_">Alberta</option>
                  <option value="AK_">ALASKA</option>
                  <option value="AL_">ALABAMA</option>
                  <option value="AR_">ARKANSAS</option>
                  <option value="AS_">AMERICAN SAMOA</option>
                  <option value="AZ_">ARIZONA</option>
                  <option value="BC_">British Columbia</option>
                  <option value="CA_">CALIFORNIA</option>
                  <option value="CO_">COLORADO</option>
                  <option value="CT_">CONNECTICUT</option>
                  <option value="DC_">DISTRICT OF COLUMBIA</option>
                  <option value="DE_">DELAWARE</option>
                  <option value="FL_">FLORIDA</option>
                  <option value="FM_">FEDERATED STATES OF MICRONESIA</option>
                  <option value="GA_">GEORGIA</option>
                  <option value="GU_">GUAM</option>
                  <option value="HI_">HAWAII</option>
                  <option value="IA_">IOWA</option>
                  <option value="ID_">IDAHO</option>
                  <option value="IL_">ILLINOIS</option>
                  <option value="IN_">INDIANA</option>
                  <option value="KS_">KANSAS</option>
                  <option value="KY_">KENTUCKY</option>
                  <option value="LA_">LOUISIANA</option>
                  <option value="MA_">MASSACHUSETTS</option>
                  <option value="MB_">Manitoba</option>
                  <option value="MD_">MARYLAND</option>
                  <option value="ME_">MAINE</option>
                  <option value="MH_">MARSHALL ISLANDS</option>
                  <option value="MI_">MICHIGAN</option>
                  <option value="MN_">MINNESOTA</option>
                  <option value="MO_">MISSOURI</option>
                  <option value="MP_">NORTHERN MARIANA ISLANDS</option>
                  <option value="MS_">MISSISSIPPI</option>
                  <option value="MT_">MONTANA</option>
                  <option value="NB_">New Brunswick</option>
                  <option value="NC_">NORTH CAROLINA</option>
                  <option value="ND_">NORTH DAKOTA</option>
                  <option value="NE_">NEBRASKA</option>
                  <option value="NH_">NEW HAMPSHIRE</option>
                  <option value="NJ_">NEW JERSEY</option>
                  <option value="NL_">Newfoundland and Labrador</option>
                  <option value="NM_">NEW MEXICO</option>
                  <option value="NS_">Nova Scotia</option>
                  <option value="NT_">Northwest Territories</option>
                  <option value="NU_">NUNAVUT</option>
                  <option value="NV_">NEVADA</option>
                  <option value="NY_">NEW YORK</option>
                  <option value="OH_">OHIO</option>
                  <option value="OK_">OKLAHOMA</option>
                  <option value="ON_">ONTARIO</option>
                  <option value="OR_">OREGON</option>
                  <option value="PA_">PENNSYLVANIA</option>
                  <option value="PE_">Prince Edward Island</option>
                  <option value="PR_">PUERTO RICO</option>
                  <option value="PW_">PALAU</option>
                  <option value="QC_">Quebec</option>
                  <option value="RI_">RHODE ISLAND</option>
                  <option value="SC_">SOUTH CAROLINA</option>
                  <option value="SD_">SOUTH DAKOTA</option>
                  <option value="SK_">Saskatchewan</option>
                  <option value="TN_">TENNESSEE</option>
                  <option value="TX_">TEXAS</option>
                  <option value="UT_">UTAH</option>
                  <option value="VA_">VIRGINIA </option>
                  <option value="VI_">VIRGIN ISLANDS </option>
                  <option value="VT_">VERMONT</option>
                  <option value="WA_">WASHINGTON</option>
                  <option value="WI_">WISCONSIN</option>
                  <option value="WV_">WEST VIRGINIA </option>
                  <option value="WY_">WYOMING</option>
                  <option value="YT_">Yukon</option>
                </select>
                <span class="required"><?php echo form_error('state');?></span>
                <input type="text" name="zip" class="form-control" id="" placeholder="Zip Code" value="<?php echo set_value('zip');?>">
                <span class="required"><?php echo form_error('zip');?></span> </div>
              <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" id="" placeholder="Email" value="<?php echo set_value('email');?>">
                <span class="required"><?php echo form_error('email');?></span> </div>
              <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="" placeholder="Phone Number" value="<?php echo set_value('phone');?>">
                <span class="required"><?php echo form_error('phone');?></span> </div>
              <div class="form-group">
                <label for="AreaInterest">Area of their interest</label>
                <input type="text" name="area" class="form-control" id="" placeholder="Area of their interest" value="<?php echo set_value('area');?>">
                <span class="required"><?php echo form_error('area');?></span> </div>
              <div class="form-group">
                <label for="yearsVolunteer"> Years of exp as volunteer</label>
                <input type="text" name="exp" class="form-control" id="" placeholder=" Years of exp as volunteer" value="<?php echo set_value('exp');?>">
                <span class="required"><?php echo form_error('exp');?></span> </div>
              <input  type="submit" name="Submit" value="Submit" class="btn btn-success"/>
            </form>
          </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
      </div>
      <div class="col-md-3 col-sm-4 latest-videos">
        <div class="news-heading">
          <h4>Volunteers</h4>
        </div>
        <div class="row">
          <div class="col-md-12"> <a href="volunteers.html"><img src="<?php echo base_url();?>img/volunteers.jpg" class="img-responsive thumbnail" alt="resp"></a> </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
        <?php foreach ($sponsers as $sponsers_data):?>
        <div class="row">
          <div class="col-md-12">
            <h5><?php echo $sponsers_data['title'];?></h5>
            <p><span class="fa fa-clock-o">&nbsp;</span>
              <?php
                        $result = $sponsers_data['updated_date'];
                        echo date('D M,Y',strtotime($result));?>
            </p>
            <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>" alt="sponsers"> </div>
        </div>
        <?php endforeach;?>
        <div class="clearfix border-dot-bottom"></div>
        <div class="row">
          <div class="widget col-md-12">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
          </div>
        </div>
        <div class="clearfix border-dot-bottom"></div>
      </div>
    </div>
    <hr/>
    <div class="row tv-coverage">
      <div class="news-heading">
        <h4>TV Coverage</h4>
      </div>
      <div class="col-md-4">
        <div id="slider2_container" class="scroll-tabs-bottom"> <!-- Slides Container -->
          <div u="slides" class="slides" >
            <?php foreach ($tv as $tv_data):?>
            <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url();?>public/tvcoverage/<?php echo $tv_data['image'];?>" /></a></div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
