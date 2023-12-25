<?php
$level = "../";
$user = $_GET['sid'];
include($level.'DB/db.php');

$sql_update_user = "UPDATE user SET status = '0' where id ='$user'";
$rs = $db->prepare($sql_update_user);
$rs ->execute();

header("location:../pages/user/user.php");
?>