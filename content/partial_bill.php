 <form action="<?php echo($level);?>compoment/search_bill_process.php" method="get">
            <input type="text" name = "search">
            <input type = "submit" name = "submit" value = "search">
         </form><div class="col-lg-12 grid-margin stretch-card">
  
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bill</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Bill </th>
                          <th> Date </th>
                          <th> Paidment Method </th>
                          <th> Price </th>
                          <th> Status </th>
                          <th style ="text-align: center">Operation </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          foreach($dsbill as $bill)
                          {
                            $color='';
                            if($bill['statu']== '1')
                            {
                              $bill['statu']  = 'Active';
                              $color= 'text-success';
                            }
                            if($bill['statu']=='0')
                            {
                              $bill['statu'] = 'Disable';
                              $color = 'text-danger';
                            }
                            echo '<tr>
                              <td>'.$bill['mahd'].'</td>
                              <td>'.$bill['ngay'].'</td>
                              <td>'.$bill['pttt'].'</td>
                              <td>'.$bill['gia'].'</td>
                              <td class="'.$color.'">'.$bill['statu'].'</td>
                              <td style ="text-align: center" ><a href="../form/form_bill_edit.php?smahd='.$bill['mahd'].'" class = "btn btn-primary ">Edit</a>
                                  <a  href="'.$level.'compoment/delete_bill_process.php?smahd='.$bill['mahd'].'"class = "btn btn-danger">Delete</a>   </td>
                            </tr>';?>
                          <?php
                          }
                       ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>