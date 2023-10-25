<?php
$sql = "select* from user";
$result = $db->prepare($sql);
$result->execute();
$dsuser= $result->fetchAll();

?>
<?php
$sql = "select* from catalog";
$result = $db->prepare($sql);
$result->execute();
$dslistproduct= $result->fetchAll();

?>
<?php
$sql = "select* from bill";
$result = $db->prepare($sql);
$result->execute();
$dsbill= $result->fetchAll();

?>
<?php
$sql = "select* from product";
$result = $db->prepare($sql);
$result->execute();
$dsproduct= $result->fetchAll();

?>