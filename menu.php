<?php
session_start();
$userName = 'Login';
$flag = false;
if (isset($_SESSION['adminname'])) {
    $userName = 'Hi! ' . ucfirst($_SESSION['adminname']);
    $flag = true;
    include_once("db.php");
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Exam Seating Arrangement</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="firstpageresponse.php" class="active">Home</a>
                </li>
                <li>
                    <a href="<?= $flag ? 'adminbranchyear.php' : 'adminloginde.php' ?>"><?= $userName ?></a>
                </li>
                <li>
                    <a href="contactus.php">Contact us</a>
                </li>
            </ul>
            <?php if ($flag): ?>
                <ul class="nav navbar-nav navbar-right nave-pills">
                    <li class="dropdown ">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            <span class="glyphicon glyphicon-user white"></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a href="profile.php" class="glyphicon glyphicon-user"> Profile</a></li>
                            <!--profile link-->
                            <li><a href="setting.php" class="glyphicon glyphicon-cog"> Setting</a></li>
                            <!--setting link-->
                            <li><a href="clear.php" class="glyphicon glyphicon-trash"> ClearDB</a></li>
                            <!--cleardb link-->
                            <li><a href="logout.php" class="glyphicon glyphicon-off"> Signout</a></li>
                            <!--signout link-->
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>