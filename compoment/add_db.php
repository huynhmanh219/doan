<?php
$sql = "select* from user";
$result = $db->prepare($sql);
$result->execute();
$dsuser= $result->fetchAll();
// var_dump($dsuser);
$sql = "select* from product";
$result = $db->prepare($sql);
$result->execute();
$dsproduct= $result->fetchAll();

$sql = "select* from bill";
$result = $db->prepare($sql);
$result->execute();
$dsbill= $result->fetchAll();

$sql = "select* from catagory";
$result = $db->prepare($sql);
$result->execute();
$dslistproduct= $result->fetchAll();
?>