<?php
    $level='../../';
    include($level.'DB/db.php');
   
    $edit_catalogID = $_REQUEST['catagoryID'];
    $edit_name = $_REQUEST['name'];
    $edit_status = $_REQUEST['status'];
    
    // $CataID = $_REQUEST['cataID'];


    $updateSQL_list = "UPDATE catagory SET 
      catalog_name=:NameCatagory,
      statu=:statu
        WHERE catalog_id = '$edit_catalogID'";
    
    $rst = $db->prepare($updateSQL_list);

    
    $rst -> bindValue(':NameCatagory',$edit_name,PDO::PARAM_STR);
    $rst -> bindValue(':statu',$edit_status,PDO::PARAM_INT);

    $rst -> execute();

    header('location:../product/listproduct.php');
?>