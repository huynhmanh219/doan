<?php
$sql = "select* from order";
$result = $db->prepare($sql);
$result->execute();
$dsbill= $result->fetchAll();