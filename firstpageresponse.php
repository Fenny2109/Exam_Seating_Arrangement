<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Welcome to Exam Seating Arrangement</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/my.css"/>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once("menu.php"); ?>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2500" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item slides active">
            <div class="slide-1"></div>
            <div class="screen-word">
                <hgroup>
                    <h2></h2>
                </hgroup>
                <a href="selectoneof3.php" class="btn btn-hero btn-lg btn-responsive">SEARCH YOU</a>
            </div>
        </div>
        <div class="item slides">
            <div class="slide-2"></div>
            <div class="screen-word">
                <hgroup>
                    <h2></h2>
                </hgroup>
                <a href="selectoneof3.php" class="btn btn-hero btn-lg btn-responsive">SEARCH YOU</a>
            </div>
        </div>
        <div class="item slides">
            <div class="slide-3"></div>
            <div class="screen-word">
                <hgroup>
                    <h2></h2>
                </hgroup>
                <a href="selectoneof3.php" class="btn btn-hero btn-lg btn-primary btn-responsive">SEARCH YOU</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
