<?php
    $level='../';
    include($level.'DB/db.php');

    $imgpath = basename($_FILES['fileimg']['name']);
    $folder_path = $level."upload_img_product/";
    $file_path = $folder_path . $imgpath;
    move_uploaded_file($_FILES['fileimg']['tmp_name'],$file_path);
    // var_dump($file_path);
    // var_dump($_FILES['fileimg']['name']);

    $edit_id=$_POST['id'];
    $edit_catalogID = $_POST['catagoryID'];
    $edit_name = $_POST['name'];
    $edit_price = $_POST['prices'];
    $edit_status = $_POST['status'];
    
    $edit_img=$_FILES['fileimg']['name'];
    if(isset($_FILES['fileimg']['name'])&&$_FILES['fileimg']['name']=="")
    {
        // $edit_img = $_FILES['fileimg']['name'];
        $edit_img = $_POST['anhcu'];
    }
    else
    {
         $edit_img = $_FILES['fileimg']['name'];
         
    }
       
    $updateSQL = "UPDATE product set Catalog_id = :catagoryID,
      names=:NameProduct,
      price = :prices,
      image_link = :picture,
      statu=:statu
        where id = '$edit_id' ";
    
    $rs = $db->prepare($updateSQL);
    var_dump($updateSQL);
    
    $rs -> bindValue(':catagoryID',$edit_catalogID,PDO::PARAM_INT);
    $rs -> bindValue(':NameProduct',$edit_name,PDO::PARAM_STR);
    $rs -> bindValue(':prices',$edit_price,PDO::PARAM_STR);
    $rs -> bindValue(':picture',$edit_img,PDO::PARAM_STR);
    $rs -> bindValue(':statu',$edit_status,PDO::PARAM_INT);
    // $rs -> bindValue(':edit_id',$edit_id,PDO::PARAM_STR);
    
    
    var_dump($_FILES);
    move_uploaded_file($_FILES["fileimg"]["tmp_name"],
    $level."upload_img_product/".$_FILES["fileimg"]["name"]);

    if($rs -> execute()){
        echo'Truy van thanh cong';
        header('location:../pages/product/product.php');
    }
    else{
        echo 'that bai';
        var_dump($rs->errorInfo());
    }
    
    
?>