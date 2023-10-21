<?php
   $conn = ("mysql:host=localhost;dbname=bill");
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