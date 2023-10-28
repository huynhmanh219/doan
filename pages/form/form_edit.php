<?php
$level = "../../";
var_dump($_POST);
include($level.'DB/db.php');
$up_user = $_POST['user'];
$up_fname = $_POST['fname'];
$up_lname = $_POST['lname'];
$up_status = $_POST['status'];

$suser = $_POST['suser'];

if($_FILES['image']['name'] == "")
{
    $img = $_POST['image'];
}
else{
    $img = $_FILES['image']["name"];
}



/*
$update_sql = "UPDATE user SET users = $up_user;
firstname = $up_fnamer;
lastname =$up_lname;
statu = $up_status;
picture = $img
 where users = $suser";*/

$update_sql = "UPDATE user SET firstname = :fname,
lastname =:lname,
statu = :statu,
picture = :pic
 where users = '$up_user'";


$result = $db->prepare($update_sql);

#$result -> bindValue(':users',$up_user,PDO::PARAM_STR);
$result -> bindValue(':fname',$up_fname,PDO::PARAM_STR);
$result -> bindValue(':lname',$up_lname,PDO::PARAM_STR);
$result -> bindValue(':statu',$up_status,PDO::PARAM_INT);
$result -> bindValue(':pic',$img,PDO::PARAM_STR);


var_dump($_FILES);
move_uploaded_file($_FILES["image"]["tmp_name"],$level."img-user/".$_FILES["image"]["name"]);

$result -> execute();

header('location:../user/user.php');




?>