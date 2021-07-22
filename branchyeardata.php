<!--classroom wise data is present here-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Seating Arrangement</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/branchyeardata.css"/>
    <link rel="stylesheet" href="css/bootstraap.css"/>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<a href="selectoneof3.php" class="btn  back-button btn-sm">
    <span class="glyphicon glyphicon-chevron-left"></span>back
</a>
<?php
include_once("db.php");

mysqli_query($conn, "UPDATE viewcount set views=views+1 where pagename='branchwisedata'");
$re = mysqli_query($conn, "SELECT * from viewcount where pagename='branchwisedata' ");
while ($view = mysqli_fetch_array($re)) {
    ?>
    <span class="glyphicon glyphicon-eye-open"></span><?php echo " " . $view['views'];
} ?>
<?php
$depttake = $_POST['department']; #department value is taken
$yeartake = $_POST['year'];#year value is taken
if ($depttake && $yeartake) {
    $deptname = mysqli_real_escape_string($conn, $depttake);
    $yearname = mysqli_real_escape_string($conn, $yeartake);
}
if ($yearname == 'I') #year in words for roman year
{
    $yeartext = 'First';
} elseif ($yearname == 'II') {
    $yeartext = 'Second';
} elseif ($yearname == 'III') {
    $yeartext = 'Third';
} elseif ($yearname == 'IV') {
    $yeartext = 'Fourth';
}
?>
<div class="container vertical-align">
    <div class="row">
        <div class="col-xs-10 col-xs-push-1">
            <div class="panel panel-default">
                <form class="form-horizontal  content" role="form" action="branchyeardata.php" method="post">
                    <div class="form-group">
                        <table class="table ">
                            <tr>
                                <!--year and department are displayed here-->
                                <th class="yearheading" colspan="4">
                                    <center>
                                        <?php echo "" . $yearname . "    " . $deptname . ""; ?></center>
                                </th>
                            </tr>
                        </table>
                    </div>
            </div>
            <?php
            #subject selection query
            $subquery = "SELECT distinct subject,examdate,starttime,endtime from trisub where department='$deptname' AND year='$yearname'";
            $retvalsquery = mysqli_query($conn, $subquery);
            ?>
            <?php
            while ($rowclassdata = mysqli_fetch_assoc($retvalsquery)) {
                $subject = $rowclassdata['subject'];//subject selection
                $examdate = $rowclassdata['examdate'];//date selection
                $starttime = $rowclassdata['starttime'];//starttime selection
                $endtime = $rowclassdata['endtime'];//endtime selection
                $classquery = "SELECT distinct classroom from trisub where department='$deptname' AND year='$yearname' AND subject='$subject' AND examdate='$examdate' AND starttime='$starttime' AND endtime='$endtime'"; //class query
                $retvalclassquery = mysqli_query($conn, $classquery);//class query retrival
                $classroomrow = mysqli_fetch_assoc($retvalclassquery);
                $classroom = $classroomrow['classroom'];//clasroom is obtain
                //for obtaining enrollNumber
                $rollnoquery = "SELECT  from_enrollnumber, to_enrollnumber, code_number from trisub where classroom='$classroom' AND department='$deptname' AND year='$yearname' AND subject='$subject' AND examdate='$examdate' AND starttime='$starttime' AND endtime='$endtime'";
                $retvalroll = mysqli_query($conn, $rollnoquery);

                ?>
                <div class="panel panel-default panelsub">

                    <div class="form-group sub-heading">
                        <table class="table" border="0">
                            <tr>
                                <td class="textstyle" width="40%"><b>Subject Name : </b><?= $subject; ?></td>
                                <!--subject is display here-->
                                <td class="textstyle" width="40%"><b>Date :</b> <?= date("d M, Y", strtotime($examdate)); ?> </td>
                                <!--exam date is display here-->
                                <td class="textstyle" width="20%"><b>Time
                                        : </b><?= "" . $starttime . " to " . $endtime . ""; ?></td>
                                <!--start and end time is dispplay here-->
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="panel panel-default panelcon">
                    <div class="form-group sub-heading">
                        <table class="table" border="0">

                            <tr>
                                <th colspan="2" width="50%">ROLL NUMBER</th>
                                <th colspan="2" width="50%">LECTURE HALL</th>
                            </tr>
                            <tr>
                                <!--roll numbers are display here-->
                                <td class="textstyle" colspan="2"><?php
                                    $count = 1;
                                    $rows = mysqli_num_rows($retvalroll);
                                    while ($rollrow = mysqli_fetch_assoc($retvalroll)) {
                                        if (($count % 6) != 0) {
                                            echo $rollrow['code_number'].$rollrow['from_enrollnumber'] . " <b>To</b> " . $rollrow['code_number'].$rollrow['to_enrollnumber'];
                                            $count = $count + 1;
                                        } else {
                                            echo "<br/>";
                                            $count = 1;
                                        }
                                    }
                                    ?>
                                    <!--classroom name is display here-->
                                <td class="textstyle"><?php echo $classroom; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php } ?>
            </form>
        </div>
    </div>
</div>
</body>
</html>
