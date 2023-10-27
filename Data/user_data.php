<?php
    foreach($dsuser as $user)
    {
        $color='';
        if($user['status']== '1')
        {
          $user['status']  = 'Active';
          $color= 'text-success';
        }
        if($user['status']=='0')
        {
          $user['status'] = 'Disable';
          $color = 'text-danger';
        }
        echo' 
        <tr>
            <td> <img src="'.$level."img-user/".$user['image'].'" alt=""></td>
            <td class="py-1"> '.$user['user'].' </td>
            <td> '.$user['firstname'].' </td>
            <td> '.$user['lastname'].' </td>
            <td ><p class="'.$color.'"> '.$user['status']. '</p></td>
        </tr> ';
    }
?>