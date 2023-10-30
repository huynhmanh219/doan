<?php
  $level = "../../";
  include($level.'DB/db.php');
if(isset($_REQUEST['submit']))
{
    $search = $_GET['search'];
    if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    }
     else {
       $sql = "SELECT* from user where firstname like '%$search%'";
       $result = $db->prepare($sql);
       $result->execute();
        $r = $result->fetchALL();
       
       if($r > 0 && $search!= "")
       {
            echo '<table border="1" cellspacing="0" cellpadding="10">';
            foreach($r as $ro)
            {
                echo '<tr>';
                    echo "<td>".$ro['users']."</td>";
                    echo "<td>".$ro['firstname']."</td>";
                    echo "<td>".$ro['lastname']."</td>";
                    echo "<td><img src=../../img-user/".$ro['picture']."></td>";
                    echo "<td>".$ro['statu']."</td>";
                echo '</tr>';
            }
            echo '</table>';
       }
            else 
            {
                echo "Khong tim thay ket qua!";
            }
        }
}


?>
