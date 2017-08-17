<div class="breadcrumb-bg"> 
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ol class="breadcrumb">
                    <li><a href="http://www.nataus.org">Home</a></li>
                    <li class="active">Schedule</li>
                </ol>
            </div>
            <div class="col-md-10">
                <marquee align="middle" dir="ltr" behavior="scroll" scrollamount="5">
                    <p class="marquee">
                        <?php foreach ($scrolling as $scrolling_data){
     echo $scrolling_data['scroll_text'];
                        }?>
                    </p>
                </marquee>
            </div>
        </div>
    </div>
</div> 
<div class="inner-page">
    <div class="container inner-content">
        <div class="row">
            <div class="col-md-9">
                <div class="news-heading">
                    <h4>Schedules</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion">
                            <?php foreach ($sports_schedule as $sports_schedule_data):?>
                            <div class="panel panel-default">
                                <div class="panel-heading saturday"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Day01">
                                        <h5 class="panel-title"><span class="glyphicon glyphicon-minus"></span><?php echo 
                            date('l m/d/Y',  strtotime($sports_schedule_data['schedule_date']));?>  <?php echo $sports_schedule_data['schedule_time'];?>:<?php echo $sports_schedule_data['schedule_time_minutes'];?>0 <?php echo $sports_schedule_data['schedule_time_in'];?></h5>
                                    </a> </div>
                                <div id="Day01" class="panel-collapse collapse in">
                                    <div class="panel-body saturday-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Home Team</th>
                                                <th>Away Team</th>
                                                <th>Ground</th>
                                                <th>Ground Responsibility</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo $sports_schedule_data['team_name'];?></td>
                                                <td><?php echo $sports_schedule_data['team1_name'];?> </td>
                                                <td><?php echo $sports_schedule_data['ground'];?></td>
                                                <td><?php echo $sports_schedule_data['ground_responsibility'];?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             <?php endforeach;?>
                        </div>
                        <?php //echo $pagination;?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 latest-videos">
                <div class="news-heading">
                    <h4>Sports Points</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered points-table">
                            <tr>
                                <th>Team</th>
                                <th>Points</th>
                            </tr>
                            <?php foreach ($results as $results_data):?>
                            <tr>
                                <td><?php echo $results_data['team_name'];?></td>
                                <td><?php echo $results_data['points'];?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>