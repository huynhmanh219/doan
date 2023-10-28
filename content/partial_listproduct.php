
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Catalog Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo ($level);?>pages/insert/form_insert_listproduct.php">Add Catalog</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Basic tables</li> -->
                </ol>
              </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Catalog</h4>
                            <p class="card-description"> Database</code>
                            </p>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Catalog_id </th>
                                    <th> Catalog_name </th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include($level.'Data/listProduct_data.php')?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>