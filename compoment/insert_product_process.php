<?php
    $level='../';
    include($level."DB/db.php");

    $imgpath = basename($_FILES['myfile']['name']);
    $folder_path = $level."upload_img_product/";
    $file_path = $folder_path . $imgpath;
    move_uploaded_file($_FILES['myfile']['tmp_name'],$file_path);
    var_dump($file_path);

    
    $catalog_id=$_REQUEST['catalog_id'];
    $name =$_REQUEST['name'];
    $price=$_REQUEST['price'];
    $image_link=$_FILES['myfile']['name'];
    $status = $_REQUEST['status'];
    // var_dump($id);

    $sql_into="insert into product(Catalog_id,names,price,image_link,statu)
                values( :catalog_id, :name, :price, :image_link, :status)";
    $result=$db->prepare($sql_into);


    $result -> bindValue(':catalog_id',$catalog_id,PDO::PARAM_INT);
    $result -> bindValue(':name',$name,PDO::PARAM_STR);
    $result -> bindValue(':price',$price,PDO::PARAM_INT);
    $result -> bindValue(':image_link',$image_link,PDO::PARAM_STR);
    $result -> bindValue(':status',$status,PDO::PARAM_INT);
    var_dump($_FILES);

    move_uploaded_file($_FILES['myfile']['tmp_name'],
        $level."upload_img_product/" . $_FILES['myfile']['name']);
    $result ->execute();
    header('location:'.$level.'../../LTWDA/admin/pages/product/product.php');

?>