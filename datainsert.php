<?php
session_start();
if (!isset($_SESSION['adminname'])) {
    header("location:index.php");
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/datai.css">
        <title>Filling of seating arrangement</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="clockfiles/jquery.min.js"></script>
        <script src="clockfiles/bootstrap.min.js"></script>
        <!--this are the file require for clockpicker-->
        <link rel="stylesheet" href="clockfiles/bootstrap-clockpicker.css"/>
        <link rel="stylesheet" href="clockfiles/bootstrap-clockpicker.min.css"/>
        <link rel="stylesheet" href="clockfiles/jquery-clockpicker.css"/>
        <link rel="stylesheet" href="clockfiles/jquery-clockpicker.min.css"/>
        <link rel="stylesheet" href="clockfiles/clockpicker.css"/>
        <link rel="stylesheet" href="clockfiles/standalone.css"/>
        <script type="text/javascript" src="clockfiles/bootstrap-clockpicker.js"></script>
        <script type="text/javascript" src="clockfiles/jquery-clockpicker.min.js"></script>
        <script type="text/javascript" src="clockfiles/jquery-clockpicker.js"></script>
        <script type="text/javascript" src="clockfiles/jquery-clockpicker.min.js"></script>
        <script type="text/javascript" src="clockfiles/clockpicker.js"></script>
    </head>
    <body>
    <?php
    include_once("menu.php");
    if (isset($_POST['submit']) && isset($_POST['department']) && isset($_POST['year'])) {
        $department = $_POST['department'];
        $year = $_POST['year'];

        $sub = "SELECT * from subjecttable where department='$department' AND year='$year'";
        $retvalsubject = mysqli_query($conn, $sub);
    }
    ?>
    <div class="container vertical-align">
        <div class="row">
            <div class="col-xs-4 col-xs-push-4">
                <div class="heading-control">
                    <font ="Helvetica-BoldOblique">
                    <center>
                        <h1>SEATING ARRANGEMENT FILLING<h1>
                    </center
                    </font>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal  content" action="datainsert.php" method="post" role="form">
                            <div class="form-group text-control">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <label for="departmentname" class="to-control">&nbsp;Department :</label>
                                        <input type="text" class="form-control" name="department"
                                               value="<?= isset($_POST['department']) ? $_POST['department'] : '' ?>"
                                               readonly>
                                    </div>
                                    <label for="yearname" class="to-control">Year :</label>
                                    <input type="text" class="form-control" name="year"
                                           value="<?= isset($_POST['year']) ? $_POST['year'] : '' ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group text-control">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <label for="numberstart" class="enroll-control">Start number :<span
                                                    style="color:#FF0000">*</span></label>
                                        <input type="number" class="form-control" name="from_enrollnumber"
                                               id="from_enrollnumber" placeholder="Enter start number"
                                               value="<?= isset($_POST['from_enrollnumber']) ? $_POST['from_enrollnumber'] : '' ?>"
                                               required>
                                    </div>
                                    <label for="numberstart " class="to-control">End number :<span
                                                style="color:#FF0000">*</span></label>
                                    <input type="number" class="form-control" name="to_enrollnumber"
                                           id="to_enrollnumber" placeholder="Enter end number"
                                           value="<?= isset($_POST['to_enrollnumber']) ? $_POST['to_enrollnumber'] : '' ?>"
                                           required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <!--subject is selected here-->
                                <label for="SelectSubejct" class="sub-control">Select Subject :<span
                                            style="color:#FF0000">*</span></label>
                                <select class="form-control" name="subject" value="" required>
                                    <?php
                                    while ($rows = mysqli_fetch_assoc($retvalsubject)) {
                                        echo "<option>" . $rows['subject'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!--classroom is selected here-->
                            <div class="form-group">
                                <label for="SelectClass" class=" class-control">Select classroom :<span
                                            style="color:#FF0000">*</span></label>
                                <select name="classroom" class="form-control" required>
                                    <option>101</option>
                                    <option>102</option>
                                    <option>103</option>
                                    <option>104</option>
                                    <option>105</option>
                                    <option>201</option>
                                    <option>202</option>
                                    <option>203</option>
                                    <option>204</option>
                                    <option>205</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <!--date is inserted here-->
                                <label for="examdate" class="class-control">Date :<span
                                            style="color:#FF0000">*</span></label><br/>
                                <input class="form-control" placeholder="DD/MM/YYYY" type="date" name="examdate"
                                       id="examdate" value="<?= isset($_POST['examdate']) ? $_POST['examdate'] : '' ?>"
                                       required/>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <!--time i.e starttime and end time is inserted here-->
                                        <label for="examptime1" class="class-control">Start Time:<span
                                                    style="color:#FF0000">*</span></label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input placeholder="HH:MM" type="text" class="form-control ic"
                                                   name="starttime"
                                                   value="<?= isset($_POST['starttime']) ? $_POST['starttime'] : '' ?>"
                                                   required>
                                            <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                        </div>
                                    </div>
                                    <label for="examptime2" class="class-control">End time :<span
                                                style="color:#FF0000">*</span></label>
                                    <div class="input-group clockpicker" data-autoclose="true">
                                        <input type="text" placeholder="HH:MM" name="endtime" class="form-control ic"
                                               value="<?= isset($_POST['endtime']) ? $_POST['endtime'] : '' ?>"
                                               required>
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <center>
                                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-lg btn-success">
                                    <a href="adminbranchyear.php" class="btn btn-lg btn-success">CANCEL</a>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script>
        $('.clockpicker').clockpicker({
            beforeShowDay: function (date) {
                var day = date.getDay();
                return [(day != 0), ''];
            }
        });
    </script>
    </html>
<?php
if (isset($_POST['submit']) && $_POST['submit'] == "SUBMIT") {
    $year = $_POST['year'];
    $deptName = $_POST['department'];
    $from_enrollnumber = $_POST['from_enrollnumber'];
    $to_enrollnumber = $_POST['to_enrollnumber'];
    $classroom = $_POST['classroom'];
    $subject = $_POST['subject'];
    $examdate = $_POST['examdate'];
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];

    // From
    $from_en_num = substr($from_enrollnumber, -2);

    // To
    $to_en_num = substr($to_enrollnumber, -2);

    // Code number
    $code_num = substr($from_enrollnumber, 0, -2);

    $where = "SELECT * FROM trisub WHERE ((from_enrollnumber <= '$from_en_num' AND to_enrollnumber > '$from_en_num') OR (from_enrollnumber < '$to_en_num' AND to_enrollnumber >= '$to_en_num')) AND code_number='$code_num' AND examdate='$examdate'";
    $rows = mysqli_num_rows(mysqli_query($conn, $where));

    if ($rows <= 0) {

        // Code number
        $code_num = substr($from_enrollnumber, 0, -2);

        $insert = "INSERT INTO trisub(year, department, from_enrollnumber, to_enrollnumber, code_number, classroom, subject, examdate, starttime, endtime) VALUES('$year','$deptName','$from_en_num','$to_en_num','$code_num','$classroom','$subject','$examdate','$starttime','$endtime')";
        $query = mysqli_query($conn, $insert) or die(mysqli_error());

        if ($query) {
            $msg = "Data successfully submitted!";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    } else {
        $msg = "Data already exist!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
}
?>