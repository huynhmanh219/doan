<?php
$level = "../../";
$path = $_FILES['image']['name'];
$folder = "../../img-user/";
$filepath = $folder. 
move_uploaded_file($_FILES['image']['tmp_name'],$filepath);
var_dump($filepath);

include $level."DB/db.php";
$user = $_POST['user'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sta = $_POST['status'];
$img = $_FILES['image']['name'];

$SQL_str_themuser= 
"Insert into user(users,firstname,lastname,statu,picture)
values(:users,:firstname,:lastname,:statu,:picture) ";
$result = $db->prepare($SQL_str_themuser);
$result -> bindValue(':users',$user,PDO::PARAM_STR);
$result -> bindValue(':firstname',$fname,PDO::PARAM_STR);
$result -> bindValue (':lastname',$lname,PDO::PARAM_STR);
$result -> bindValue (':statu',$sta,PDO::PARAM_STR);
$result -> bindValue (':picture',$img,PDO::PARAM_STR);

var_dump($_FILES);
move_uploaded_file($_FILES["picture"]["tmp_name"],$level."img-user/" .$_FILES["picture"]["name"]);
$result -> execute();

header('location:'.$level.'"../../pages/user/user.php');



?>