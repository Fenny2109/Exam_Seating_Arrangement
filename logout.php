<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
</head>
<body>
<?php
session_start();
$msg = "you are successfully logout";
echo "<script type='text/javascript'>alert('$msg');</script> ";

unset($_SESSION["adminname"]);
header("location: index.php");
?>
</body>
</html>
