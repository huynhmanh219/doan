<?php
     $level = "../";
    include($level.'DB/db.php');

    if(isset($_REQUEST['submitSearch']))
    {
        $search = addslashes($_GET['Searchproduct']);
        if (empty($search)) {
            echo "Yeu cau nhap du lieu vao o trong";
        }
        else {
        $sql = "SELECT* from product where names like '%$search%' or id like '%$search%' or catalog_id like '%$search%'";
        $result = $db->prepare($sql);
        $result->execute();
            $row = $result->fetchALL();
        
        if($row > 0 && $search!= "")
        {    
            
             echo '<table border="1" cellspacing="0" cellpadding="10" style="text-align:center" align="center" >
                <h2 style="text-align:center">List of Product</h2>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th> id </th>
                        <th> catalog_id </th>
                        <th>name</th>
                        <th>price</th>
                        <th>image</th>
                        <th>created</th>
                        <th>status</th>
                        <th>function</th>
                    </tr>
            ';
            foreach($row as $ketqua)
            {
                $color='';
                if($ketqua['statu']== '1')
                {
                    $ketqua['statu']  = 'in stock';
                    $color= 'text-success';
                }
                if($ketqua['statu']=='0')
                {
                    $ketqua['statu'] = 'sold out';
                    $color = 'text-danger';
                }
                echo '
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>'.$ketqua['id'].'</td>
                        <td>'.$ketqua['catalog_id'].'</td>
                        <td>'.$ketqua['names'].'</td>
                        <td>'.$ketqua['price'].'</td>
                        <td><img src="'.$level.'upload_img_product/'.$ketqua['image_link'].'" style="width:80px"/></td>
                        <td>'.$ketqua['created'].'</td>
                        <td class="'.$color.'">'.$ketqua['statu'].'</td>
                        <td>
                            <a href="delete_product.php?sid='.$ketqua['id'].'" ><i class="fas fa-trash" ></i></a>
                            <a href="../pages/form/form_product_edit.php?sid='.$ketqua['id'].'"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>';
                                                
                }
            echo '
                <tr style="background-color: #2249a2;">
                    <th>
                        <a href="../pages/product/product.php" style="color: whitesmoke;text-decoration:none">Back product</a>
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