<?php
$level = "../";
var_dump($_POST);
include($level.'DB/db.php');


$id = $_POST['id'];
$up_user = $_POST['user'];
$up_fname = $_POST['fullname'];
$up_email = $_POST['email'];
$up_status = $_POST['status'];
$img =$_FILES['image']['name'];
if(($_FILES['image']['name'])== "")
{
    
    $img = $_POST['img'];
}
else{
    $img = $_FILES['image']["name"];
}
$up_password = $_POST['password'];
$up_create = $_POST['create'];
$up_role = $_POST['role'];


$update_sql = "UPDATE user SET fullname = :fname,
email =:email,
status = :status,
picture = :pic,
password = :pass,
create_at = :create,
role = :role WHERE id = '$id' ";

$result = $db->prepare($update_sql);

$result -> bindValue(':fname',$up_fname,PDO::PARAM_STR);
$result -> bindValue(':email',$up_email,PDO::PARAM_STR);
$result -> bindValue(':status',$up_status,PDO::PARAM_INT);
$result -> bindValue(':pic',$img,PDO::PARAM_STR);
$result -> bindValue(':pass',$up_password,PDO::PARAM_STR);
$result -> bindValue(':create',$up_create,PDO::PARAM_STR);
$result -> bindValue(':role',$up_role,PDO::PARAM_INT);

var_dump($_FILES);
move_uploaded_file($_FILES["image"]["tmp_name"],
$level."img-user/".$_FILES["image"]["name"]);
$result -> execute();

header('location:../pages/user/user.php');




?>