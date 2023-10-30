<?php

    foreach($dsuser as $user)
    {
        $color='';
        if($user['statu']== '1')
        {
          $user['statu']  = 'Active';
          $color= 'text-success';
        }
        if($user['statu']=='0')
        {
          $user['statu'] = 'disable';
          $color = 'text-danger';
        }
        echo' 
        <tr>
            <td> <img src="'.$level."img-user/".$user['picture'].'" alt=""></td>
            <td class="py-1"> '.$user['users'].' </td>
            <td> '.$user['firstname'].' </td>
            <td> '.$user['lastname'].' </td>
            <td ><p class="'.$color.'"> '.$user['statu']. '</p></td>
            <td style ="text-align: center"><a " href="../form/form_user_edit.php?suser='.$user['users'].'" class = "btn btn-primary ">Sửa</a>
            <a  href="../form/form_user_delete.php?suser='.$user['users'].'"class = "btn btn-danger">Xóa</a>   </td>
        </tr> ';
    }
?>

