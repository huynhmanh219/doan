<?php
$level = "../../";
$user = $_GET['suser'];
include($level."DB/db.php");

$edit = "SELECT * from user where users = '$user'";


$result = $db->prepare($edit);
$result -> execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

?>