<?php
$level = "../../";

$bill = $_GET['smahd'];
include($level.'DB/db.php');

$sql_update_user = "UPDATE bill SET status = '0' where mahd ='$bill'";
$rs = $db->prepare($sql_update_user);
$rs ->execute();

header("location:../bill/bill.php");
?>