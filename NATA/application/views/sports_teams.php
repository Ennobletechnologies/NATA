<div class="breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a></li>
                    <li class="active">Teams</li>
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
                    <h4>Teams</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>Team</th>
                                <th width="20%">First</th>
                                <th width="20%" >Last</th>
                                <th width="20%">DOB</th>
                            </tr>
                            <?php foreach ($teams as $teams_data): ?>
                                <tr>
                                    <td><b><?php echo $teams_data['team_name']; ?></b></td>
                                    <td colspan="3" style="padding: 0px;">
                                        <table class="table table-bordered" style="margin-bottom:0px;">
                                            <?php
                                            foreach ($team_members as $team_members_data):
                                                if ($teams_data['team_id'] == $team_members_data['team_id']) {
                                                    ?>
                                                    <tr>
                                                        <td width="20%"><?php echo $team_members_data['fname']; ?></td>
                                                        <td width="20%"><?php echo $team_members_data['lname']; ?></td>
                                                        <td width="20%"><?php echo
                                        date('m/d/Y', strtotime($team_members_data['dob']));
                                                    ?></td>
                                                    </tr>
        <?php }endforeach; ?>
                                        </table>
                                    </td>
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