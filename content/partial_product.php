

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Table </h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo ($level);?>pages/insert/form_insert_product.php">Add Product</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Basic tables</li> 
                </ol>
              </nav> -->
            </div>
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">SEARCH</h4>
                            <div style="justify-content:space-between;display:flex;">
                            <!-- chức năng Search -->
                              <form action="<?php echo($level);?>compoment/search_product_process.php" method="GET" >
                                <input type="text" name="Searchproduct" placeholder="product name" class="border-dark">
                                <input type="submit" value="Search" name="submitSearch">
                              </form>
                              <a href="../form/form_product_insert.php" style="text-decoration:none;" class="btn btn-primary p-2 m-2">Add Product</a>
                            </div>
                            <table class="table table-bordered">
                              <thead>
                                  <tr>
                                    <th><input type="checkbox"></th>
                                    <th> id </th>
                                    <th> catalog_id </th>
                                    <th>name</th>
                                    <th>price</th>
                                    <th>image</th>
                                    <th>status</th>
                                    <th>function</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                foreach($dsproduct as $sanpham)
                                {
                                  $color='';
                                  if($sanpham['statu']== '1')
                                  {
                                    $sanpham['statu']  = 'Active';
                                    $color= 'text-success';
                                  }
                                  if($sanpham['statu']=='0')
                                  {
                                    $sanpham['statu'] = 'Disable';
                                    $color = 'text-danger';
                                  }
                                    echo '
                                        <tr class="table">
                                          <td><input type="checkbox"></td>
                                          <td>SP'.$sanpham['id'].'</td>
                                          <td> ML'.$sanpham['Catalog_id'].'</td>
                                          <td> '.$sanpham['names'].'</td>
                                          <td> '.$sanpham['price'].'</td>
                                          <td><img src="'.$level.'upload_img_product/'.$sanpham['image_link'].'" alt=""></td>
                                          <td ><p class="'.$color.'"> '.$sanpham['statu'].'</p></td>
                                          <td>
                                            <a href="'.$level.'compoment/delete_product.php?sid='.$sanpham['id'].'" class="text-danger"><i class="fas fa-trash"></i></a>
                                            <a href="../form/form_product_edit.php?sid='.$sanpham['id'].'" class="text-primary"><i class="fas fa-edit"></i></a>
                                          </td>
                                        </tr>';?>
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