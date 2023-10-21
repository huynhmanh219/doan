<?php
$sql = "select* from bill";
$result = $db->prepare($sql);
$result->execute();
$dsbill= $result->fetchAll();
var_dump($dsbill);
?>