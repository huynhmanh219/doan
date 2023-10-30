<?php
$level = "../../";
$id = $_GET['sid'];
include($level."DB/db.php");

$edit_product = "SELECT * from product where id = '$id'";


$result = $db->prepare($edit_product);
$result -> execute();

$edit = $result->fetch(PDO::FETCH_ASSOC);

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
                <h3 class="page-title"> Edit Product </h3>
                </div>
                <div class="">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Product</h4>
                                <p class="card-description"> Database</code></p>
                                <form action="form_edit_product_process.php" method="POST" enctype="multipart/form-data"> 
                                    <input type="hidden" name  = "sid" value ="sid" >
                                    <table>
                                        <tr class="rowTable">
                                            <td class="tdLabel"><label class="label">Id:</label></td>
                                            <td class="row"><input type="text" name="id" value="<?php echo $edit['id']?>" style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        </hr>
                                        <tr>
                                            <td class="tdLabel"><label >Catalog_id:</label></td>
                                            <td class="row"><input type="text" name="catagoryID" value="<?php echo $edit['catalog_id']?>" style="padding:3px 0 3px; border:1px solid black;">
                                                </td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label  class="label">Name:</label></td>
                                            <td class="row"><input type="text" name="name" value="<?php echo $edit['names']?>" style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Price:</label></td>
                                            <td class="row"><input type="text" name="prices" value="<?php echo $edit['price']?>"  style="padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Created:</label></td>
                                            <td class="row"><input type="date" name="created" value="<?php echo $edit['created']?>"  style="width:120px; padding:3px 1px 3px; border:1px solid black;"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Status:</label></td>
                                            <td class="row"><input type="text" name="status" value="<?php echo $edit['statu']?>" style="width:120px; padding:3px 1px 3px; border:1px solid black;" placeholder="1 or 0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tdLabel"><label >Image:</label></td>
                                            <td class="row"><input type="file" name="fileimg" value="<?php echo ($level."upload_img_product/". ($edit['image_link']))?>"  style="padding:3px 1px 3px; border:1px solid black;"/>
                                            <img src="<?php echo $level."upload_img_product/".($edit['image_link'])?>" name="imgEdit" style="width:200px;"></td>
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