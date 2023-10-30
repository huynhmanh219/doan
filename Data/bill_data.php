<?php   
    foreach($dsbill as $bill)
    {
    echo '<tr>
       <td>'.$bill['mahd'].'</td>
       <td>'.$bill['ngay'].'</td>
       <td>'.$bill['pttt'].'</td>
       <td>'.$bill['gia'].'</td>
       <td>'.$bill['statu'].'</td>
       <td style ="text-align: center" ><a href="../form/form_bill_edit.php?smahd='.$bill['mahd'].'" class = "btn btn-primary ">Sửa</a>
          <a  href="../form/form_bill_delete.php?smahd='.$bill['mahd'].'"class = "btn btn-danger">Xóa</a>   </td>
     </tr>';
   }
?>