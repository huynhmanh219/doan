<?php   
    foreach($dsbill as $bill)
    {
    echo '<tr>
       <td>'.$bill['mahd'].'</td>
       <td>'.$bill['ngay'].'</td>
       <td>'.$bill['pttt'].'</td>
       <td>'.$bill['gia'].'</td>
       <td>'.$bill['status'].'</td>
     </tr>';
   }
?>