<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once("db.php");
$find = mysqli_query($conn, "SELECT * from viewcount");
while ($row = mysqli_fetch_assoc($find)) {
    $current = $row['views'];
    $new = $current + 1;
    //$update = mysqli_query($conn, "UPDATE 'viewcount' set views='$new'");
    echo $new."<br>";
}
?>
</body>
</html>
