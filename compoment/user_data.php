<?php
$sql = "select* from user";
$result = $db->prepare($sql);
$result->execute();
$dsuser= $result->fetchAll();
?>