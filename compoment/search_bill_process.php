<?php
  $level = "../";
  include($level.'DB/db.php');
if(isset($_REQUEST['submit']))
{
    $search = $_GET['search'];
    if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    }
     else {
       $sql = "SELECT* from bill where mahd like '%$search%' or pttt like '%$search%' or gia like '%$search%' or ngay like '$search'";
       $result = $db->prepare($sql);
       $result->execute();
        $r = $result->fetchALL();
       
       if($r > 0 && $search!= "")
       {
            echo '<table border="1" cellspacing="0" cellpadding="10">';
            foreach($r as $ro)
            {
                echo '<tr>';
                    echo "<td>".$ro['mahd']."</td>";
                    echo "<td>".$ro['ngay']."</td>";
                    echo "<td>".$ro['pttt']."</td>";
                    echo "<td>".$ro['gia']."</td>";
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