<?php
   $conn = ("mysql:host=localhost;dbname=admin");
   $pass='';
   $_option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
   );
   try{
    $db = new PDO($conn, 'root',$pass,$option);
   }
   catch (PDOexeption $e)
   {
    echo $e->getMessage();
    exit;
    }

?>