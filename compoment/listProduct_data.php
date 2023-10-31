<?php
$sql = "select* from catagory";
$result = $db->prepare($sql);
$result->execute();
$dslistproduct= $result->fetchAll();
?>