<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/profile.css"/>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['adminname'])) {
    include_once("db.php");

    $username = $_SESSION['adminname'];
    $re = mysqli_query($conn, "SELECT * FROM admintable where adminname = '$username'");
    $rows = mysqli_fetch_assoc($re);
    ?>
    <a href="adminbranchyear.php" class="btn  back-button btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
    <div class="container vertical-align">
        <div class="row">
            <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal  content" role="form">
                            <div class="form-group">

                                <center><img class="img-circle" src="images/Administrator Male-52.png" heignt="150"
                                             width="150"/>
                                </center>
                                <br>

                                <center><label><?= $rows['fullname'] ?></label></center>
                                <center><label><?= $rows['adminemail'] ?></label></center>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    $msg = "you are not login!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
} ?>
</body>
</html>
