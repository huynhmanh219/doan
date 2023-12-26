<?php
$level = "../../";
$id = $_GET['cataID'];
include($level."DB/db.php");

$edit_listproduct = "SELECT * from catagory  where catalog_id = '$id'";


$result = $db->prepare($edit_listproduct);
$result -> execute();

$editCatalog = $result->fetch(PDO::FETCH_ASSOC);

?>
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
                <h3 class="page-title"> Edit Catagory </h3>
                </div>
                <div class="">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Product</h4>
                                <p class="card-description"> Database</code></p>
                                <form action="<?php echo($level);?>compoment/edit_listproduct_process.php" method="POST" enctype="multipart/form-data"> 
                                    <input type="hidden" name  = "scatalogID" value ="scatalogID" >
                                    <table>     
                                        <div class="form-group">
                                        <label for="exampleInputID">Catalog_ID:</label>
                                            <input type="text" readonly name="" class="form-control" value="ML<?php echo $editCatalog['catalog_id']?>" id="exampleInputID" >
                                            <input type="text" readonly name="catagoryID" class="form-control" value="<?php echo $editCatalog['catalog_id']?>" id="exampleInputID" hidden="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Name:</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputName1" value="<?php echo $editCatalog['catalog_name']?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectStatus" >Status:</label>
                                            <select class="form-control" name="status" id="exampleSelectStatus" style="padding:15px;" >
                                                <?php
                                                    if($editCatalog['statu'] == 0)
                                                    {
                                                        $editCatalog['statu']='Hidden';
                                                        echo'
                                                            
                                                            <option  value=" '.$editCatalog['statu'].'">'.$editCatalog['statu'].'</option>
                                                            <option  value="1">Active</option>';
                                                    }
                                                        
                                                    else 
                                                    { 
                                                        $editCatalog['statu']='Active';
                                                        echo'
                                                            <option  value=" '.$editCatalog['statu'].'">'.$editCatalog['statu'].'</option>
                                                            <option  value="0">Hidden</option>';
                                                    }
                                                    
                                                ?>
                                            </select>
                                        </div>
                                        <input type="submit" class="btn btn-gradient-primary me-2"  value="Save" />
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
</div>