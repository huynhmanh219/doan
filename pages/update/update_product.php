<?php
    $level='../../';
    include($level.'DB/db.php');

    try {
         $id=$_POST['id'];
    if(isset($_POST['btnSave']))
    {
        $sql_update = "UPDATE product SET status = '0' where id=$id";
        $result = $db->prepare($sql_update);
        $result->execute();
        $update= $result->fetchAll();
        // if($status ==0)
        // {
        //     echo '0';
        // }
        var_dump($update);
        
    }
    }
   
?>