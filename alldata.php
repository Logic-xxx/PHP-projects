<!--DB CONNECTION,SELECT-->
<?php
$db = mysqli_connect("localhost","root","","assignment7");
$sql = "SELECT * FROM assignment7";
$result = $db->query($sql);
mysqli_query($db,$sql);
?>
<?php
$sql1 = "SELECT * FROM service";
$result1 = $db->query($sql1);

?>
<?php
$sql2 = "SELECT * FROM tariff";
$result2 = $db->query($sql2);
?>
<?php
$sql3 = "SELECT * FROM tpurchase";
$result3 = $db->query($sql3);
?>
<?php
$sql4 = "SELECT * FROM tservice";
$result4 = $db->query($sql4);
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<!--JSON-->
<p><?php $json_array = array();
    while ($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
    }
    $data=json_encode($json_array);
    ?></p>

<p ><?php $json_array1 = array();
    while ($row1 = mysqli_fetch_assoc($result2)){
        $json_array1[] = $row1;
    }
    $data1 = json_encode($json_array1); ?></p>

<p ><?php
    $json_array2 = array();
    while ($row2 = mysqli_fetch_assoc($result1)){
        $json_array2[] = $row2;
    }
    $data2 = json_encode($json_array2); ?></p>
<p ><?php $json_array3 = array();
    while ($row3 = mysqli_fetch_assoc($result4)){
        $json_array3[] = $row3;
    }
    $data3 = json_encode($json_array3); ?></p>
<p ><?php $json_array4 = array();
    while ($row4 = mysqli_fetch_assoc($result3)){
        $json_array4[] = $row4;
    }
    $data4 = json_encode($json_array4); ?></p>
<!--CLIENT TABLE-->
<?php
$array = json_decode($data,true);?>

<table border="1" id="client">
    <tr>
        <th>User_id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th>Tariff_id</th>
        <th>Tariff_date</th>
        <th>Balance</th>
        <th>NextDate</th>
        <th>Password</th>
    </tr>
    <?php
    foreach ( $array as $column):
    ?>
    <tr>
        <td>
            <?php echo $column["userid"] ?>
        </td>
        <td>
            <?php echo $column["fname"] ?>
        </td>
        <td>
            <?php echo $column["lname"] ?>
        </td>
        <td>
            <?php echo $column["email"] ?>
        </td>
        <td>
            <?php echo $column["pnumber"] ?>
        </td>
        <td>
            <?php echo $column["tariffid"] ?>
        </td>
        <td>
            <?php echo $column["tariffdate"] ?>
        </td>
        <td>
            <?php echo $column["balance"] ?>
        </td>
        <td>
            <?php echo $column["nextdate"] ?>
        </td>
        <td>
            <?php echo $column["password"] ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table><br>
<!--TARIFF TABLE-->
<?php
$array1 = json_decode($data1,true);?>
<table border="1" id="tariff">
    <tr>
        <th>Tariff_id</th>
        <th>TariffName</th>
        <th>TariffPrice</th>
        <th>TariffInternet</th>
        <th>TariffMinute</th>
    </tr>
    <?php
    foreach ( $array1 as $column):
    ?>
    <tr>
        <td>
            <?php echo $column["tariffid"] ?>
        </td>
        <td>
            <?php echo $column["tname"] ?>
        </td>
        <td>
            <?php echo $column["tprice"] ?>
        </td>
        <td>
            <?php echo $column["tinternet"] ?>
        </td>
        <td>
            <?php echo $column["tminute"] ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table><br>
<!--SERVICE TABLE-->
<?php
$array2 = json_decode($data2,true);?>
<table border="1" id="service">
    <tr>
        <th>Service_id</th>
        <th>ServiceName</th>
        <th>ServicePrice</th>
    </tr>
    <?php
    foreach ( $array2 as $column):
    ?>
    <tr>
        <td>
            <?php echo $column["serviceid"] ?>
        </td>
        <td>
            <?php echo $column["sname"] ?>
        </td>
        <td>
            <?php echo $column["sprice"] ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table><br>
<!--TRANSACTION SERVICE-->
<?php
$array3 = json_decode($data3,true);?>
<table border="1" id="tran">
    <tr>
        <th>Tran_id</th>
        <th>User_id</th>
        <th>Service_id</th>
        <th>Date</th>
        <th>BalanceBefore</th>
        <th>BalanceAfter</th>
        <th>ChargePrice</th>
    </tr>
    <?php
    foreach ( $array3 as $column):
    ?>
    <tr>
        <td>
            <?php echo $column["tranid"] ?>
        </td>
        <td>
        <?php echo $column["userid"] ?>
        </td>
        <td>
            <?php echo $column["serviceid"] ?>
        </td>
        <td>
            <?php echo $column["date"] ?>
        </td>
        <td>
            <?php echo $column["bbefore"] ?>
        </td>
        <td>
            <?php echo $column["bafter"] ?>
        </td>
        <td>
            <?php echo $column["cprice"] ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table><br>
<!--TRANSACTION SERVICE-->
<?php
$array4 = json_decode($data4,true);?>
<table border="1" id="purchase">
    <tr>
        <th>Tran_id</th>
        <th>User_id</th>
        <th>Tariff_id</th>
        <th>Date</th>
        <th>BalanceBefore</th>
        <th>BalanceAfter</th>
        <th>ChargePrice</th>
    </tr>
    <?php
    foreach ( $array4 as $column):
        ?>
        <tr>
            <td>
                <?php echo $column["tranid"] ?>
            </td>
            <td>
                <?php echo $column["userid"] ?>
            </td>
            <td>
                <?php echo $column["tariffid"] ?>
            </td>
            <td>
                <?php echo $column["date"] ?>
            </td>
            <td>
                <?php echo $column["bbefore"] ?>
            </td>
            <td>
                <?php echo $column["bafter"] ?>
            </td>
            <td>
                <?php echo $column["cprice"] ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>





