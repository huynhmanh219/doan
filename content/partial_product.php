
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product</h4>
                            <p class="card-description"> Database</code>
                            </p>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th> id </th>
                                <th> catalog_id </th>
                                <th>name</th>
                                <th>price</th>
                                <th>image_link</th>
                                <th>created</th>
                                <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="../update/update_product.php" enctype="multipart/form-data" method="POST">
                                    <?php
                                    
                                    foreach($dsproduct as $sanpham)
                                    {
                                        echo '
                                            <tr class="table">
                                                
                                                    <td> '.$sanpham['id'].'</td>
                                                    <td> '.$sanpham['catalog_id'].'</td>
                                                    <td> '.$sanpham['name'].'</td>
                                                    <td> '.$sanpham['price'].'</td>
                                                    <td><img src="'.$level.'upload_img/'.$sanpham['image_link'].'" alt=""></td>
                                                    <td> '.$sanpham['created'].'</td>
                                                    <td> '.$sanpham['status'].'</td>
                                                    <td><a href="" name="btnSave" class=""><i class="mdi mdi-delete"></i></a></td>
                                            
                                            </tr>';?>
                                    <?php   
                                    }
                                    ?>
                                </form>
                            </tbody>
                            </table>
                            <a href="<?php echo ($level);?>pages/insert/form_insert.php">thêm</a>
                        </div>
                    </div>
                </div>
            </div>
</div>