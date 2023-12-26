<?php
     $level = "../";
    include($level.'DB/db.php');

    if(isset($_REQUEST['submitSearch']))
    {
        $search = addslashes($_GET['Searchlistproduct']);
        if (empty($search)) {
            echo "Yeu cau nhap du lieu vao o trong";
        }
        else {
        $sql = "SELECT* from catagory where catalog_name like '%$search%'or catalog_id like '%$search%'";
        $result = $db->prepare($sql);
        $result->execute();
            $row = $result->fetchALL();
        
        if($row > 0 && $search!= "")
        {    
            
             echo '<table border="1" cellspacing="0" cellpadding="10" style="text-align:center" align="center" >
                <h2 style="text-align:center">List Catagories</h2>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th> catalog_id </th>
                        <th> catalog_name </th>
                        <th>status</th>
                        <th>function</th>
                    </tr>
            ';
            foreach($row as $Cata)
            {
                $color='';
                if($Cata['statu']== '1')
                {
                    $Cata['statu']  = 'Active';
                    $color= 'text-success';
                }
                if($Cata['statu']=='0')
                {
                    $Cata['statu'] = 'Hidden';
                    $color = 'text-danger';
                }
                echo '
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>'.$Cata['catalog_id'].'</td>
                        <td>'.$Cata['catalog_name'].'</td>
                        <td>'.$Cata['statu'].'</td>
                        <td>
                            <a href="delete_listproduct.php?sid='.$Cata['catalog_id'].'" ><i class="fas fa-trash" ></i></a>
                            <a href="../pages/form/form_listproduct_edit.php?cataID='.$Cata['catalog_id'].'"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>';
                                                
                }
            echo '
                <tr style="background-color: #2249a2;">
                    <th>
                        <a href="../pages/product/listproduct.php" style="color: whitesmoke;text-decoration:none">Back Listproduct</a>
                    </th>
                </tr> 
            </table>';
        }
        else 
        {
            echo "Khong tim thay ket qua!";
        }
        }
    }


?>