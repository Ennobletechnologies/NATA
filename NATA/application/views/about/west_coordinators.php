<div class="slider-innder"> <img src="<?php echo base_url(); ?>img/index-sliders/about-banner.jpg"/></div>
<div class="breadcrumb-bg">
    <div class="container">
        <div class="col-md-4 col-sm-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>natau/organization">Organization</a></li>
                <li class="active">West Coordinators</li>
            </ol>
        </div>
        <div class="col-md-8 col-sm-12 inner-marquee">
              <marquee behavior="scroll" scrollamount="7">
<?php foreach ($view_news as $key => $rec_news):?>
<span class="fa fa-newspaper-o"></span> <?php echo strip_slashes(substr($rec_news['news_title'], 0, 47)); ?> 
<?php endforeach;?>
</marquee>    
        </div></div>
</div>
<div class="inner-page">
    <div class="container inner-content ">
        <div class="row">
            <div class="col-md-9 ">
                <div class="news-heading">
                    <h4>Regional Coordinators list – WEST</h4>
                </div>
                <div class="margin-bottom-10">
                    <table class="table table-bordered">
                        <tr class="table-header">
                            <th class="text-center">State</th>
                            <th class="text-center">Name</th>
                        </tr>
                        <tr>
                        <td>RC-CA </td>
                        <td>Gopi Reddy </td>                        
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Indira Reddy </td>                        
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Manohar Reddy Aedma	</td>
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Nirmal Dandala </td>
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>RamaMohan Perubotla </td>                        
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Ramu Rachamalla </td>                        
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Srinivas Rani </td>
                         </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Suman Kumar Thodeti </td>
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Vijay Vanamareddy </td>
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Rama Krishna Reddy </td>
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Venkateswara Reddy </td>
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Venu Madhav </td>
                        </tr>
                        <tr>
                        <td>RC-CA</td>
                        <td>Surya Gangi Reddy</td>
                        </tr>
                        <tr>
                        <td>RC-AZ</td>
                        <td>Koti Reddy Kondu </td>
                        </tr>
                        <tr>
                        <td>RC-NV</td>
                        <td>Kiran Kumar Garlapati </td>
                        </tr>
                        <tr>
                        <td>RC-NV</td>
                        <td>Raj Salvaji </td>
                        </tr>
                        <tr>
                        <td>RC-ON</td>
                        <td>Rajesh Vissa </td>
                        </tr>
                         <tr>
                        <td>RC-WA</td>
                        <td>Manohar Boddu </td>
                        </tr>
                    </table>
                </div>
                <div class="margin-bottom-10">
                    <a href="<?php echo base_url(); ?>natau/organization" class="btn btn-warning"><span class="fa fa-arrow-left">&nbsp;</span>Back to Organization</a>
                </div>

            </div>
            <div class="col-md-3 latest-videos">
                <div class="news-heading">
                    <h4>Latest Videos</h4>
                </div>
                <?php foreach ($videos as $videos_data): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h5><?php echo $videos_data['videos_title']; ?></h5>
                            <p><span class="fa fa-clock-o">&nbsp;</span>June 10, 2014</p>
                            <img src="<?php echo $videos_data['videos_img']; ?>"> </div>
                    </div>
                    <div class="clearfix border-dot-bottom"></div>
                <?php endforeach; ?>
                <div class="row">
                    <div class="widget col-md-12">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNorth-American-Telugu-Association-NATA%2F230965673612654&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height: 300px;" allowtransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row tv-coverage">
            <div class="news-heading">
                <h4>TV Coverage</h4>
            </div>
            <div class="col-md-4">
                <div id="slider2_container" class="scroll-tabs-bottom"> <!-- Slides Container -->
                    <div u="slides" class="slides" >
                        <?php foreach ($tv as $tv_data): ?>
                            <div><a href="javascript:;"><img u="image" alt="amazon" src="<?php echo base_url(); ?>public/tvcoverage/<?php echo $tv_data['image']; ?>" /></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>