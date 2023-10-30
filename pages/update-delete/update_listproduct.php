<?php
    $level='../../';
    include($level.'DB/db.php');
    $status = '0';
    $catalogId=$_GET['sid'];

    $sql_update_listproduct = "UPDATE catagory SET statu = '0' where catalog_id='$catalogId'";
    $result = $db->prepare($sql_update_listproduct);
     $result->execute();

    header("location:../product/listproduct.php");
?>