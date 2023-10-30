
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo ($level);?>pages/insert/form_insert_product.php">Add Product</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Basic tables</li> -->
                </ol>
              </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product</h4>
                            <p class="card-description"> Database</code></p>
                            
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th><input type="checkbox"></th>
                                  <th> id </th>
                                  <th> catalog_id </th>
                                  <th>name</th>
                                  <th>price</th>
                                  <th>image</th>
                                  <th>created</th>
                                  <th>status</th>
                                  <th>function</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php include($level.'Data/product_data.php') ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>