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
       $sql = "SELECT* from user where firstname like '%$search%' or lastname like '%$search%' or users like '%$search%'";
       $result = $db->prepare($sql);
       $result->execute();
        $r = $result->fetchALL();
       
       if($r > 0 && $search!= "")
       {
            echo '<table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Image</th>
                <th> User </th>
                <th> First name </th>
                <th>Last name</th>
                <th>status</th>
            <th>Operation</th>
        </tr>';
            foreach($r as $ro)
            {
                echo '<tr>';
                    echo "<td><img src=../img-user/".$ro['picture']."></td>";
                    echo "<td>".$ro['users']."</td>";
                    echo "<td>".$ro['firstname']."</td>";
                    echo "<td>".$ro['lastname']."</td>";
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
