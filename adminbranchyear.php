<?php
session_start();
if (!isset($_SESSION['adminname'])) {
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filling of seating arrangement </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/classwisepages.css"/>
</head>
<body>
<?php
include_once("menu.php");

//branch retrival query
$branch = "SELECT distinct department from studenttable ";
$retvalbranch = mysqli_query($conn, $branch);

//year retrival query
$year = "SELECT distinct year from studenttable ";
$retvalyear = mysqli_query($conn, $year);
?>
<div class="container ">
    <div class="row">
        <div class="col-xs-4 col-xs-push-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal content" action="datainsert.php" method="post" role="form">
                        <div class="form-group">
                            <label class="control-label" for="name">Branch Name :</label>
                            <!--selection of branch name-->
                            <select class="form-control" name="department">
                                <?php while ($rows = mysqli_fetch_assoc($retvalbranch)) {
                                    echo "<option>" . $rows['department'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Year :</label>
                            <!--selection of year-->
                            <select class="form-control" name="year">
                                <?php
                                while ($rows = mysqli_fetch_assoc($retvalyear)) {

                                    echo "<option>" . $rows['year'] . "</option>";
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <center><input type="submit" name="submit" value="select"
                                           class="btn btn-lg btn-success"></input></center><!--submit button-->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
