<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> User Table </h3>
          </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card"style = "width:2000px">
                <div class="card" style = "width:1000px">
                  <div class="card-body">
                    <h4 class="card-title">SEARCH</h4>
                    <div style="justify-content:space-between;display:flex;">
                      <form action="<?php echo ($level);?>compoment/search_user_process.php" method="get" enctype = "mutilpart/form-data">
                        <input type="text" name = "search" placeholder="First name" class="border-dark">
                        <input type = "submit" name = "submit" value = "search">
                      </form>
                      <a href="../form/form_user_add_.php" style="text-decoration:none;" class="btn btn-primary p-2 m-2">Add User</a>
                    </div>
                      <table style ="text-align: center"class="table table-striped">
                      <thead >
                        <tr >
                          <th > Image </th>
                          <th > ID </th>
                          <th> User </th>
                          <th> Full Name </th>
                          <th > Email </th>
                          <th> Password </th>
                          <th> create </th>
                          <th> Status </th>
                          <th> Role </th>
                          <th> Operation </th>
                        </tr>
                      </thead>
                      
                      <tbody>
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
                              $user['status'] = 'Deative';
                              $color = 'text-danger';
                            }
                            echo' 
                            <tr>
                                <td> <img src="'.$level."img-user/".$user['picture'].'" alt=""></td>
                                <td class="py-1"> '.$user['id'].' </td>
                                <td class="py-1"> '.$user['users'].' </td>
                                <td> '.$user['fullname'].' </td>
                                <td> '.$user['email'].' </td>
                                <td> '.$user['password'].' </td>
                                <td> '.$user['create_at'].' </td>
                                <td ><p class="'.$color.'"> '.$user['status']. '</p></td>
                                <td> '.$user['role'].' </td>
                                <td style ="text-align: center"><a " href="../form/form_user_edit_.php?sid='.$user['id'].'" class = "btn btn-primary ">Edit</a>
                                <a  href="'.$level.'compoment/delete_user_process.php?sid='.$user['id'].'"class = "btn btn-danger" >Delete</a>   </td>
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