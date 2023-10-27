<?php
    foreach($dsproduct as $sanpham)
    {
      $color='';
      if($sanpham['status']== '1')
      {
        $sanpham['status']  = 'còn hàng';
        $color= 'text-success';
      }
      if($sanpham['status']=='0')
      {
        $sanpham['status'] = 'hết hàng';
        $color = 'text-danger';
      }
        echo '
            <tr class="table">
              
              <td> '.$sanpham['id'].'</td>
              <td> '.$sanpham['catalog_id'].'</td>
              <td> '.$sanpham['name'].'</td>
              <td> '.$sanpham['price'].'</td>
              <td><img src="'.$level.'upload_img_product/'.$sanpham['image_link'].'" alt=""></td>
              <td> '.$sanpham['created'].'</td>
              <td ><p class="'.$color.'"> '.$sanpham['status'].'</p></td>
              <td><a href="" name="btnSave" class=""><i class="mdi mdi-delete"></i></a></td>
            </tr>';?>
    <?php   
    }
?>