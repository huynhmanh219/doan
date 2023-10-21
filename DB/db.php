<?php
   $conn = ("mysql:host=localhost;dbname=admin");
   $pass='';
   $_option='';
   try{
    $db = new PDO($conn, 'root',$pass,$option);
   }
   catch (PDOexeption $e)
   {
    echo $e->getMessage();
    exit;
    }

?>