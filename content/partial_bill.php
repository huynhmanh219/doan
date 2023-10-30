  <div class="col-lg-12 grid-margin stretch-card">
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
                        include($level.'data/bill_data.php');
                       ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>