<?php
      foreach($dslistproduct as $list)
      {
        $color='';
      if($list['status']== '1')
      {
        $list['status']  = 'Active';
        $color= 'text-success';
      }
      if($list['status']=='0')
      {
        $list['status'] = 'Disable';
        $color = 'text-danger';
      }
          echo '
              <tr class="table">
                  <td> '.$list['catalog_id'].' </td>
                  <td> '.$list['catalog_name'].' </td>
                  <td ><p class="'.$color.'"> '.$list['status'].'</p></td>
              </tr>';?>
      <?php   
      }
?>