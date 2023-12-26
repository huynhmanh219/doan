
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Catalog Table </h3>
            </div>
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">SEARCH</h4>
                        <div style="justify-content:space-between;display:flex;">
                            <!-- chức năng Search -->
                              <form action="<?php echo($level);?>compoment/search_listproduct_process.php" method="GET" >
                                <input type="text" name="Searchlistproduct" placeholder="Name" class="border-dark">
                                <input type="submit" value="Search" name="submitSearch">
                              </form>
                              <a href="../form/form_listproduct_insert.php" style="text-decoration:none;" class="btn btn-primary p-2 m-2">Add Catagory</a>
                            </div>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th> Id </th>
                                    <th> Name </th>
                                    <th>Status</th>
                                    <th>Function</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($dslistproduct as $list)
                                {
                                    $color='';
                                    if($list['statu']== '1')
                                    {
                                        $list['statu']  = 'Active';
                                        $color= 'text-success';
                                    }
                                    if($list['statu']=='0')
                                    {
                                        $list['statu'] = 'Hidden';
                                        $color = 'text-danger';
                                    }
                                    echo '
                                        <tr class="table">
                                        <td><input type="checkbox"></td>
                                            <td> ML'.$list['catalog_id'].' </td>
                                            <td> '.$list['catalog_name'].' </td>
                                            <td ><p class="'.$color.'"> '.$list['statu'].'</p></td>
                                            <td>
                                                <a href="'.$level.'compoment/delete_listproduct.php?sid='.$list['catalog_id'].'" class="text-danger"><i class="fas fa-trash"></i></a>
                                                <a href="../form/form_listproduct_edit.php?cataID='.$list['catalog_id'].'" class="text-primary"><i class="fas fa-edit"></i></a>
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