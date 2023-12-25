<?php
$level = "../";

if(isset($_POST['submit'])) {
    $path = basename($_FILES['image']['name']);
    $folder = $level."img-user/";
    $filepath = $folder.$path;
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$filepath);
    var_dump($filepath);
    echo "khoadeptrai";
    include $level."DB/db.php";
    $user = $_POST['user'];
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $im = $_FILES["image"]['name'];
    $pass = $_POST['password'];
    $create=$_POST['create'];
    $sta = $_POST['status'];
    $role = $_POST['role'];

    $SQL_str_themuser= 
    "Insert into user(users,fullname,email,picture,password,create_at,status,role)
    values(:users,:fullname,:email,:picture,:password,:create,:status,:role) ";

    $result = $db->prepare($SQL_str_themuser);

    $result -> bindValue(':users',$user,PDO::PARAM_STR);
    $result -> bindValue(':fullname',$fname,PDO::PARAM_STR);
    $result -> bindValue (':email',$email,PDO::PARAM_STR);
    $result -> bindValue (':picture',$im,PDO::PARAM_STR);
    $result -> bindValue (':password',$pass,PDO::PARAM_STR);
    $result -> bindValue (':create',$create,PDO::PARAM_STR);
    $result -> bindValue (':status',$sta,PDO::PARAM_STR);
    $result -> bindValue (':role',$role,PDO::PARAM_STR);

    var_dump($_FILES);
    move_uploaded_file($_FILES['image']['tmp_name'],
    $level."img-user/".$_FILES['image']['name']);

    $result -> execute();
}



header('location:'.$level.'"../../pages/user/user.php');



?>