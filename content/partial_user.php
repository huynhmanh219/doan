<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> User Table </h3>
          </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card" style = "width: 1000px">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">SEARCH</h4>
                    <div style="justify-content:space-between;display:flex;">
                      <form action="<?php echo ($level);?>compoment/search_user_process.php" method="get">
                        <input type="text" name = "search" placeholder="First name" class="border-dark">
                        <input type = "submit" name = "submit" value = "search">
                      </form>
                      <a href="../form/form_user_add.php" style="text-decoration:none;" class="btn btn-primary p-2 m-2">Add User</a>
                    </div>
                      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Image </th>
                          <th> User </th>
                          <th> First name </th>
                          <th> Last name </th>
                          <th> Status </th>
                          <th style ="text-align: center"> Operation </th>
                        </tr>
                      </thead>
                      
                      <tbody>
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
                                <td style ="text-align: center"><a " href="../form/form_user_edit.php?suser='.$user['users'].'" class = "btn btn-primary ">Edit</a>
                                <a  href="'.$level.'compoment/delete_user_process.php?suser='.$user['users'].'"class = "btn btn-danger">Delete</a>   </td>
                            </tr> ';?>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>