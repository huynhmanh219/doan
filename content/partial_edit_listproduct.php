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
                                        
                                        </hr>
                                        <tr>
                                            <td class="tdLabel"><label >Catalog_id:</label></td>
                                            <td class="row"><input type="text" readonly name="catagoryID" value="<?php echo $editCatalog['catalog_id']?>" style="padding:3px 0 3px; border:1px solid black;">
                                                </td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label  class="label">Name:</label></td>
                                            <td class="row"><input type="text" name="name" value="<?php echo $editCatalog['catalog_name']?>" style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Status:</label></td>
                                            <td class="row"><input type="text" name="status" value="<?php echo $editCatalog['statu']?>" style="width:120px; padding:3px 1px 3px; border:1px solid black;" placeholder="1 or 0">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td >
                                            <div ><input type="submit"  value="Save" />
                                            </div>
                                        </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>