<style>
        .row{
            margin-left:60px;
        }
        
    </style>
<div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title"> Add Catalog </h3>
                </div>
                <div class="">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Catalog</h4>
                                <p class="card-description"> Database</code></p>
                                <form action="<?php echo($level);?>compoment/insert_listproduct_process.php" method="POST" enctype="multipart/form-data"> 
                                    <table>
                                        </hr>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Catalog_Name</label>
                                            <input type="text" name="catalog_name" class="form-control" id="exampleInputName1" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectStatus" >Status</label>
                                            <select class="form-control" name="status" id="exampleSelectStatus" style="padding:15px;">
                                                <option value="1">Active</option>
                                                <option value="0">Hidden</option>
                                            </select>
                                        </div>
                                       
                                        <input type="submit" class="btn btn-gradient-primary me-2"  value="ADD" />
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>