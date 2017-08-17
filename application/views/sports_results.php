<div class="breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ol class="breadcrumb">
                    <li><a href="http://www.nataus.org">Home</a></li>
                    <li class="active">Results</li>
                </ol>
            </div>
            <div class="col-md-10">
                <marquee align="middle" dir="ltr" behavior="scroll" scrollamount="5">
                    <p class="marquee">
                        <?php
                        foreach ($scrolling as $scrolling_data) {
                            echo $scrolling_data['scroll_text'];
                        }
                        ?>
                    </p>
                </marquee>
            </div>
        </div>
    </div>
</div>
<div class="overlaybg" style="display: none;"></div>
<div class="inner-page">
    <div class="container inner-content">
        <div class="row">
            <div class="col-md-10">
                <div class="news-heading">
                    <h4>Results</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered points-table">
                            <tr>
                                <th>Team</th>
                                <th>Played</th>
                                <th>Win</th>
                                <th>Lost</th>
                                <th>Draw</th>
                                <th>Points</th>
                            </tr>
<?php foreach ($teams as $teams_data): ?>
                                <tr>
                                    <td><?php echo $teams_data['team_name']; ?></td>
                                    <td><?php echo $teams_data['played']; ?></td>
                                    <td><?php echo $teams_data['win']; ?></td>
                                    <td><?php echo $teams_data['lost']; ?></td>
                                    <td><?php echo $teams_data['draw']; ?></td>
                                    <td><?php echo $teams_data['points']; ?></td>
                                </tr>
<?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2 latest-videos">
                <div class="news-heading">
                    <h4>Sponsors</h4>
                </div>
                <div class="row">
          <div class="col-md-12 scroll-tabs">
         <ul id="marquee_1" class="list-unstyled">
                <li class="sponser1"></il>
                <li class="sponser2"></li>
                <li class="sponser3"></li>
                <li class="sponser4"></li>
                <li class="sponser5"></li>
                <li class="sponser6"></li>
            </div>
          </div>
            </div>
        </div>
    </div>
</div>