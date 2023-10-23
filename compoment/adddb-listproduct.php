<?php
$sql = "select* from catalog";
$result = $db->prepare($sql);
$result->execute();
$dslistproduct= $result->fetchAll();
var_dump($dslistproduct);
?>