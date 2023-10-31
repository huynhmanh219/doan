<?php
    $level='../';
    include($level.'DB/db.php');
    // var_dump($_POST);
    $edit_id=$_REQUEST['id'];
    $edit_catalogID = $_REQUEST['catagoryID'];
    $edit_name = $_REQUEST['name'];
    $edit_price = $_REQUEST['prices'];
    $edit_status = $_REQUEST['status'];
    $edit_created = $_REQUEST['created'];
    
    $sid = $_REQUEST['sid'];

    if($_FILES['fileimg']['name']=="")
    {
        $edit_img = $_FILES['fileimg']['name'];
    }
    else
    {
        $edit_img = $_FILES['fileimg']['name'];
    }

    $updateSQL = "UPDATE product SET catalog_id = :catagoryID,
      names=:NameProduct,
      price = :prices,
      image_link = :picture,
      statu=:statu,
      created = :created
        WHERE id = '$edit_id'";
    
    $rs = $db->prepare($updateSQL);

    $rs -> bindValue(':catagoryID',$edit_catalogID,PDO::PARAM_STR);
    $rs -> bindValue(':NameProduct',$edit_name,PDO::PARAM_STR);
    $rs -> bindValue(':prices',$edit_price,PDO::PARAM_STR);
    $rs -> bindValue(':picture',$edit_img,PDO::PARAM_STR);
    $rs -> bindValue(':statu',$edit_status,PDO::PARAM_INT);
    $rs -> bindValue('created',$edit_created,PDO::PARAM_STR);

    var_dump($_FILES);
    move_uploaded_file($_FILES["fileimg"]["tmp_name"],
        $level."../upload_img_product/".$_FILES["fileimg"]["name"]);

    $rs -> execute();

    header('location:../pages/product/product.php');
?>