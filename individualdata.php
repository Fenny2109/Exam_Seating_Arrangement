<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My exam seating arrangement</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/individual.css"/>
</head>
<body>
<a href="selectoneof3.php" class="btn  back-button btn-sm">
    <span class="glyphicon glyphicon-chevron-left"></span>back
</a>
<?php
include_once("db.php");

mysqli_query($conn, "UPDATE viewcount set views=views+1 where pagename='individualdata'");
$re = mysqli_query($conn, "SELECT * from viewcount where pagename='individualdata' ");
while ($view = mysqli_fetch_array($re)) {
    ?>
    <span class="glyphicon glyphicon-eye-open"></span><?php echo " " . $view['views'];
} ?>

<?php if (isset($_POST["submit"])){
$roll = $_POST["rollno"];
$sql = "SELECT rollno,stdname,department,year from studenttable where rollno=$roll"; //rollno,studentname department and year is selected here

$retval = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($retval);

$rollno = $row[0]; #rollnumber
$stdname = $row[1];#student name
$department = $row[2]; #department
$year = $row[3]; #student year
?>
<div class="container vertical-align">
    <div class="row">
        <div class="col-xs-10 col-xs-push-1">
            <div class="panel panel-default">
                <div class="panel-body ">
                    <form class="form-horizontal  content" role="form">
                        <div class="form-group">
                            <table class="table table-hover ">

                                <tr>
                                    <td><h5><b>Enrollment number:</b></h5>
                                    <td>
                                    <td class="textstyle"><?php echo $rollno; ?></td>
                                </tr>
                                <tr>
                                    <td><h5><b>Student Name :</b></h5>
                                    <td>
                                    <td class="textstyle"><?php echo $stdname; ?></td>
                                </tr>
                                <tr>
                                    <td><h5><b>Branch :</b></h5>
                                    <td>
                                    <td class="textstyle"><?php echo $department; ?></td>
                                </tr>
                                <tr>
                                    <td><h5><b>Year :</b></h5>
                                    <td>
                                    <td class="textstyle"><?php echo $year; ?></td>
                                </tr>
                                <tr>
                                    <td><h5><b>Unit test :</b></h5>
                                    <td>
                                    <td class="textstyle">second</td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            $sub = "SELECT * from trisub WHERE ((from_enrollnumber <= '$roll' AND to_enrollnumber > '$roll'))";
            $retvalsubject = mysqli_query($conn, $sub);
            $count = mysqli_num_rows($retvalsubject);
            while ($rows = mysqli_fetch_assoc($retvalsubject)) {
                ?>
                <div class="panel panel-default">
                    <div class="panel-body ">
                        <form class="form-horizontal  content" role="form" method="post" action="<?php $_PHP_SELF ?>">
                            <div class="form-group">
                                <table class="table table-hover">
                                    <tr>
                                        <td width="20%"><b>Classroom :</b></td>
                                        <td class="textstyle"><?= $rows['classroom'] ?></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Exam Date :</b></td>
                                        <td class="textstyle"><?= date("d M, Y", strtotime($rows['examdate'])) ?></td><!--date is display here-->
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Time :</b></td>
                                        <td class="textstyle"><?= $rows['starttime'] . ' To ' . $rows['endtime'] ?></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Subject Name :</b></td>
                                        <td class="textstyle"><?= $rows['subject'] ?></td><!--subject is display here-->
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
            } ?>
        </div>
    </div>
</div>
</body>
</html>
