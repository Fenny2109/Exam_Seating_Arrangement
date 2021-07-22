<?php
include_once("db.php");

$query = "SELECT DISTINCT classroom from trisub";
$classroom = mysqli_query($conn, $query);
?>
<!--class wise arrangement-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Seating Arrangement
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/lh.css"/>
</head>
<body>
<a href="selectoneof3.php" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
<div class="container ">
    <div class="row">
        <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal content" action="lhwise.php" method="post" role="form">
                        <div class="form-group">
                            <label class=" control-label" for="name"> Select Branch :</label>
                            <br/>
                            <!--branch selection -->
                            <select class="form-control" name="classroom">
                                <?php
                                while ($rows = mysqli_fetch_assoc($classroom)) {
                                    ?>
                                    <option><?= $rows['classroom'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <center>
                            <input type="submit" name="submit" value="search" class="btn btn-lg btn-success">
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
<?php
if (isset($_POST['classroom'])) {
    header("location:lecturehallwisedata.php?branch=" . $_POST['classroom']);
}
?>
