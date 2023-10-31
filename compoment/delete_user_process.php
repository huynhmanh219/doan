<?php
$level = "../";
$status = '0';
$user = $_GET['suser'];
include($level.'DB/db.php');

$sql_update_user = "UPDATE user SET statu = '0' where users ='$user'";
$rs = $db->prepare($sql_update_user);
$rs ->execute();

header("location:../pages/user/user.php");
?>