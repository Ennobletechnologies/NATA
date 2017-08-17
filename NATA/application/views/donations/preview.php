<?php
$doner_sess=array(
			'd_email'=>$this->input->post('email'),
			'd_fname'=>$this->input->post('fname'),
			'd_lname'=>$this->input->post('lname'),
			'd_phone'=>$this->input->post('phone'),
			'd_street'=>$this->input->post('street'),
			'd_city'=>$this->input->post('city'),
			'd_state'=>$this->input->post('state'),
			'd_zip'=>$this->input->post('zip'),
			'd_amount'=>$this->input->post('amount'),
			'd_memo'=>$this->input->post('memo'),
			'donationsess'=>1,
			);
                $this->session->set_userdata($doner_sess);
               
$email = $this->input->post('email');
$fname = $this->input->post('fname');
$lname = $this->input->post('lname');
$phone = $this->input->post('phone');
$street = $this->input->post('street');
$city = $this->input->post('city');
$state = $this->input->post('state');
$zip = $this->input->post('zip');
$amount = $this->input->post('amount');
$memo = $this->input->post('memo');
?>
<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/gallery-banner.jpg" class="img-responsive"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <div class="col-md-4 col-sm-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="news.html">Services</a></li>
                <li class="active">Donations</li>
            </ol>
        </div>
        <div class="col-md-8 col-sm-12 inner-marquee">
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
            <div class="col-md-9 news-block">
                <div class="row">
                    <div class="news-heading">
                        <h4>Donor Information</h4>
                    </div>
                    <div class="col-md-6 col-xs-offset-3">
                        <div class="form-heading">
                        </div>
                         <div class="form-group">
                                <label for="firstName"> First Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $fname;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> Last Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $lname;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $email;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> Phone Number:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $phone;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> Street:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                               <span><?php echo $street;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> City:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $city;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> State:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $state;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> Zip:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $zip;?></span>
                            </div>
                            <h4 class="sub-heading">Donation Information</h4>
							<div class="form-group">
                                <label for="firstName"> Memo:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $memo;?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName"> Amount:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><?php echo $amount;?></span>
                            </div>
							
                            <!--PAYMENT GATEWAY STARS -->
                            <form action="https://globalgatewaye4.firstdata.com/pay" method="POST" name="myForm" id="myForm">
<?php
$totalamount=$this->session->userdata('d_amount');
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
foreach ($_POST as $a => $b) {
	echo "<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."'>";
}

?>
<input type="hidden" name="x_show_form" value="PAYMENT_FORM"/>
 <input type="submit" name="submit" value="Continue" class="btn btn-success"/>
                    
</form>
                            
                                        </div>
                    
                    
                    <!-- PAYMENT ENDS-->
                </div>
                <div class="clearfix border-dot-bottom"></div>
            </div>
            <div class="col-md-3 latest-videos">
                <div class="news-heading">
                    <h4>Volunteers</h4>
                </div>
                <div class="row">
                    <div class="col-md-12"> <a href="volunteers.html"><img src="<?php echo base_url(); ?>img/volunteers.jpg" class="img-responsive thumbnail" alt="resp"></a> </div>
                </div>
                <div class="clearfix border-dot-bottom"></div>
                <?php foreach ($sponsers as $sponsers_data):?>
                <div class="row">
                    <div class="col-md-12">
                        <h5><?php echo $sponsers_data['title'];?></h5>
                        <p><span class="fa fa-clock-o">&nbsp;</span><?php
                        $result = $sponsers_data['updated_date'];
                        echo date('D M,Y',strtotime($result));?></p>
                        <img src="<?php echo base_url();?>public/sponsers/<?php echo $sponsers_data['spn_image'];?>"> </div>
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