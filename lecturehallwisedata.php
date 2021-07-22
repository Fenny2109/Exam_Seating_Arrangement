<?php
if (!isset($_GET['branch']) || empty($_GET['branch'])) {
    header('location:lhwise.php');
}
$class = $_GET['branch'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrangement in Lecture Hall</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstraap.css"/>
    <link rel="stylesheet" href="css/lecturehalldata.css"/>
</head>
<body>
<style>
    @media print {
        .print_btn, .btn-sm {
            display: none;
        }
    }
</style>
<a href="selectoneof3.php" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
<?php
include_once("db.php");

mysqli_query($conn, "UPDATE viewcount set views=views+1 where pagename='lecturehalldata'");
$re = mysqli_query($conn, "SELECT * from viewcount where pagename='lecturehalldata' ");
while ($view = mysqli_fetch_array($re)) {
    ?>
    <span class="glyphicon glyphicon-eye-open"></span>
    <?php echo " " . $view['views'];
}

$branch = "SELECT distinct department from trisub where classroom='$class'";//distinct department selection
$retvalbranch = mysqli_query($conn, $branch);

$year = "SELECT distinct year from trisub where classroom='$class'";//distinct year selection
$retvalyear = mysqli_query($conn, $year);
?>
<center><h2 class="table-header"><?= "Class Room No. " . $class; ?></h2>
    <button style="text-decoration: none; color: #ac2925" class="print_btn" onclick="window.print()">
        <span class="glyphicon glyphicon-print"></span> Print
    </button>
</center>
<div class="panel panel-default">
    <table class="table" width="100%">

        <tr>
            <td rowspan="10" width="50%">
                <table class="table table-hover" border="2">
                    <?php
                    $rowbranch1 = mysqli_fetch_row($retvalbranch);
                    $rowyear1 = mysqli_fetch_row($retvalyear);
                    $branch1 = $rowbranch1[0];
                    $year1 = $rowyear1[0];
                    ?>
                    <tr>
                        <td>
                            <lable>Branch : <?= $branch1 ?><label>
                        </td>
                        <td>
                            <lable>Year : <?= $year1 ?><label>
                        </td>
                    </tr>
                    <?php
                    $subq1 = "SELECT distinct subject,examdate,starttime,endtime from trisub where classroom='$class' AND year='$year1' AND department='$branch1'";
                    $retvalsub1 = mysqli_query($conn, $subq1);
                    while ($rowall1 = mysqli_fetch_assoc($retvalsub1)) {
                        ?>
                        <tr>
                            <td>
                                <?= $rowall1['subject']; ?>
                            </td>
                            <td>
                                <?= $rowall1['examdate'] . " / " . $rowall1['starttime'] . " to " . $rowall1['endtime'] . " "; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
        <tr>
            <td rowspan="10" width="50%">
                <table class="table table-hover" border="2">
                    <?php
                    $rowbranch = mysqli_fetch_row($retvalbranch);
                    $year = "SELECT distinct year from trisub where classroom='$class'";//distinct year selection
                    $rowyear = mysqli_fetch_row(mysqli_query($conn, $year));
                    $branch2 = $rowbranch[0];
                    $year2 = $rowyear[0];
                    ?>
                    <tr>
                        <td>
                            <lable>Branch : <?= $branch2 ?><label>
                        </td>
                        <td>
                            <lable>Year : <?= $year2 ?><label>
                        </td>
                    </tr>
                    <?php
                    $subq2 = "SELECT distinct subject,examdate,starttime,endtime from trisub where classroom='$class' AND year='$year2' AND department='$branch2'";
                    $retvalsub2 = mysqli_query($conn, $subq2);
                    while ($rowall2 = mysqli_fetch_assoc($retvalsub2)) {
                        ?>
                        <tr>
                            <td>
                                <?= $rowall2['subject']; ?>
                            </td>
                            <td>
                                <?= $rowall2['examdate'] . " / " . $rowall2['starttime'] . " to " . $rowall2['endtime'] . " "; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
    </table>
    <?php
    //first branch  rollnumber selected here
    $numq1 = "SELECT distinct department, from_enrollnumber, to_enrollnumber, code_number from trisub where classroom='$class' AND year='$year1' AND department='$branch1'";
    $retvalnum1 = mysqli_query($conn, $numq1);
    $rownum1 = mysqli_fetch_assoc($retvalnum1);
    $branchRange1 = range($rownum1['from_enrollnumber'], $rownum1['to_enrollnumber']);
    $branchCount1 = count($branchRange1);

    //second branch  rollnumber selected here
    $numq2 = "SELECT distinct department, from_enrollnumber, to_enrollnumber, code_number from trisub where classroom='$class' AND year='$year2' AND department='$branch2'";
    $retvalnum2 = mysqli_query($conn, $numq2);
    $rownum2 = mysqli_fetch_assoc($retvalnum2);

    $branchRange2 = range($rownum2['from_enrollnumber'], $rownum2['to_enrollnumber']);
    $branchCount2 = count($branchRange2);

    $combined = [];
    // You can set any message
    $blankMessage = "-";

    if ($branchCount1 > $branchCount2) {
        foreach ($branchRange1 as $index => $key) {
            $combined[$key] = isset($branchRange2[$index]) ? $branchRange2[$index] : $blankMessage; // You can set any message
        }
    } else {
        foreach ($branchRange2 as $index => $key) {
            $combined[$key] = isset($branchRange1[$index]) ? $branchRange1[$index] : $blankMessage; // You can set any message
        }
    }

    $completedArray = [];
    foreach ($combined as $branch1 => $branch2) {
        $completedArray[] = $branch1 . "," . $branch2;
    }

    /**
     * Check fill chunck ane gte column wise data.
     *
     * @param $array
     * @param $parts
     * @return array
     */
    function fill_chunck($array, $parts)
    {
        $t = 0;
        $result = array_fill(0, $parts - 1, array());
        $max = ceil(count($array) / $parts);
        foreach ($array as $v) {
            count($result[$t]) >= $max and $t++;
            $result[$t][] = $v;
        }
        return $result;
    }

    $columns = 4;
    ?>
    <table class="table main-table" width="10%" border="1">
        <tr>
            <?php for ($i = 1; $i <= $columns; $i++): ?>
                <td align="center"><b><?= "Column " . $i ?></b></td>
            <?php endfor; ?>
        </tr>
        <tr>
            <?php
            $data = fill_chunck($completedArray, $columns);
            foreach ($data as $column => $dataColumns):
                ?>
                <td>
                    <table class="table table-hover" width="10%" border="1">
                        <?php foreach ($dataColumns as $index => $dataColumn): $td = explode(',', $dataColumn); ?>
                            <tr>
                                <td align="center"
                                    width="10%"><?= $td[0] != '-' ? $rownum1['code_number'] . $td[0] : $td[0] ?></td>
                                <td align="center"
                                    width="10%"><?= $td[1] != '-' ? $rownum2['code_number'] . $td[1] : $td[1] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </td>
            <?php endforeach; ?>
        </tr>
    </table>
</div>
</body>
</html>
