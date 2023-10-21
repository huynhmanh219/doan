<?php
$sql = "select* from admin";
$result = $db->prepare($sql);
$result->execute();
$dsuser= $result->fetchAll();
var_dump($dsuser);
?>