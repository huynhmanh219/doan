<?php

$level = "../../";


$imgpath = basename($_files['image']['name']);
$folder = $level."img-user/";
$file_path = $folder.$imgpath;
move_uploaded_file($_files['image']['tmp_name'],$file_path);
include $level."DB/db.php";

var_dump($file_path);

var_dump($_POST);

$user = $_POST['user'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sta = $_POST['status'];
$img = $_files['image']['name'];

$SQL_str_themuser= 
"Insert into user(user,firstname,lastname,status,image)
values(:user,:firstname,:lastname,:status,:image) ";
$result = $db->prepare($SQL_str_themuser);
$result -> bindValue(':user',$user,PDO::PARAM_STR);
$result -> bindValue(':firstname',$fname,PDO::PARAM_STR);
$result -> bindValue (':lastname',$lname,PDO::PARAM_STR);
$result -> bindValue (':status',$sta,PDO::PARAM_STR);
$result -> bindValue (':image',$img,PDO::PARAM_STR);
var_dump($_FILES);

move_uploaded_file($_files["image"]["tmp_name"],
$level."img-user/" . $_files["image"]["name"]);

$result -> execute();
header('location:'.$level.'../admin/pages/user/user.php');



?>