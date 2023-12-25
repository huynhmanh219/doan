<style>
        .row{
            margin-left:60px;
        }
        .rowTable{
            margin:10px 0;
        }
    </style>
<div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title"> Add Product </h3>
                </div>
                <div class="">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Product</h4>
                                <p class="card-description"> Database</code></p>
                                <form action="<?php echo($level);?>compoment/insert_product_process.php" method="POST" enctype="multipart/form-data"> 
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectCatalog_id" >Catalog_id</label>
                                        <select class="form-control" style="padding:15px;" name="catalog_id" id="exampleSelectCatalog_id" class="form-select">
                                        <?php
                                        foreach($dslistproduct as $list)
                                        {
                                            echo'<option value="'.$list['catalog_id'].'">ML'.$list['catalog_id'].'</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPrice">Price</label>
                                        <input type="text" name="price" class="form-control" id="exampleInputPrice" placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectStatus" >Status</label>
                                        <select class="form-control" name="status" id="exampleSelectStatus" style="padding:15px;">
                                        <option value="1">Active</option>
                                        <option value="0">Disable</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label> </br>
                                        <input type="file" name="myfile" >
                                        <!-- <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <input class=" btn btn-gradient-primary" type="submit" value="Upload">
                                        </span>
                                        </div> -->
                                    </div>
                                    <input type="submit" class="btn btn-gradient-primary me-2"  value="ADD" />
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>