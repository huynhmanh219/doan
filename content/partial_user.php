
          <div class="content-wrapper">
          <form action="../form/form_search_user_process.php" method="get">
            <input type="text" name = "search">
            <input type = "submit" name = "submit" value = "search">
         </form>
            <a href="<?php echo $level?>pages/form/form_user_add.php">Add User</a>
            <div class="col-lg-12 grid-margin stretch-card" style = "width: 1000px">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User</h4>
                    <p class="card-description">  Add class <code>.table-striped</code>
                    </p>
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
                          include($level.'Data/user_data.php');
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            
          <!-- partial -->
        </div>