<?php
    $level='../';
    include($level."DB/db.php");

    $catalog_id=$_REQUEST['catalog_id'];
    $name =$_REQUEST['catalog_name'];
    $status = $_REQUEST['status'];
    // var_dump($id);

    $sql_list="insert into catagory(catalog_id,catalog_name,statu)
                values(:catalog_id, :catalog_name, :status)";
    $result=$db->prepare($sql_list);

    $result -> bindValue(':catalog_id',$catalog_id,PDO::PARAM_STR);
    $result -> bindValue(':catalog_name',$name,PDO::PARAM_STR);
    $result -> bindValue(':status',$status,PDO::PARAM_INT);
   
    $result ->execute();
    header('location:'.$level.'../../LTWDA/admin/pages/product/listproduct.php');

?>