<?php
$sql = "select* from product";
$result = $db->prepare($sql);
$result->execute();
$dsproduct= $result->fetchAll();
var_dump($dsproduct);
?>