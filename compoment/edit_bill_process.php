<?php
$level = "../";

include $level."DB/db.php";
$mahd = $_POST['id'];
$date = $_POST['date'];
$pttt = $_POST['pay'];
$price = $_POST['money'];
$status = $_POST['status'];


$update_sql = "UPDATE bill SET ngay = :ngay,
pttt =:pttt,
gia = :price,
statu = :statu
 where mahd = '$mahd'";


$result = $db->prepare($update_sql);

$result -> bindValue(':ngay',$date,PDO::PARAM_STR);
$result -> bindValue(':pttt',$pttt,PDO::PARAM_STR);
$result -> bindValue(':price',$price,PDO::PARAM_INT);
$result -> bindValue(':statu',$status,PDO::PARAM_STR);

$result -> execute();

header("location:../pages/bill/bill.php");

?>