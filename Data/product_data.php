<?php
    foreach($dsproduct as $sanpham)
    {
      $color='';
      if($sanpham['statu']== '1')
      {
        $sanpham['statu']  = 'còn hàng';
        $color= 'text-success';
      }
      if($sanpham['statu']=='0')
      {
        $sanpham['statu'] = 'hết hàng';
        $color = 'text-danger';
      }
        echo '
            <tr class="table">
              <td><input type="checkbox"></td>
              <td> '.$sanpham['id'].'</td>
              <td> '.$sanpham['catalog_id'].'</td>
              <td> '.$sanpham['names'].'</td>
              <td> '.$sanpham['price'].'</td>
              <td><img src="'.$level.'upload_img_product/'.$sanpham['image_link'].'" alt=""></td>
              <td> '.$sanpham['created'].'</td>
              <td ><p class="'.$color.'"> '.$sanpham['statu'].'</p></td>
              <td>
                <a href="../update-delete/update_product.php?sid='.$sanpham['id'].'" class="text-danger"><i class="fas fa-trash"></i></a>
                <a href="../update-delete/form_edit_product.php?sid='.$sanpham['id'].'" class="text-primary"><i class="fas fa-edit"></i></a>
              </td>
            </tr>';?>
    <?php   
    }
?>