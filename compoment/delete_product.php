<?php
    $level='../';
    include($level.'DB/db.php');
    $status = '0';
    $id=$_GET['sid'];

    $sql_update = "UPDATE product SET statu = '0' where id='$id'";
    $result = $db->prepare($sql_update);
     $result->execute();

    header("location:../pages/product/product.php");
?>