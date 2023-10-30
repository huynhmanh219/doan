<?php
      foreach($dslistproduct as $list)
      {
        $color='';
      if($list['statu']== '1')
      {
        $list['statu']  = 'Active';
        $color= 'text-success';
      }
      if($list['statu']=='0')
      {
        $list['statu'] = 'Disable';
        $color = 'text-danger';
      }
          echo '
              <tr class="table">
              <td><input type="checkbox"></td>
                  <td> '.$list['catalog_id'].' </td>
                  <td> '.$list['catalog_name'].' </td>
                  <td ><p class="'.$color.'"> '.$list['statu'].'</p></td>
                  <td>
                    <a href="../update-delete/update_listproduct.php?sid='.$list['catalog_id'].'" class="text-danger"><i class="fas fa-trash"></i></a>
                    <a href="../update-delete/form_edit_listproduct.php?cataID='.$list['catalog_id'].'" class="text-primary"><i class="fas fa-edit"></i></a>
                  </td>
              </tr>';?>
      <?php   
      }
?>