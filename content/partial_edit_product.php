<?php
$level = "../../";
$id = $_GET['sid'];
include($level."DB/db.php");

$edit_product = "SELECT * FROM product WHERE id = :id";
$result = $db->prepare($edit_product);
$result->bindValue(':id', $id, PDO::PARAM_INT);
$result->execute();

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
                                <form action="<?php echo($level);?>compoment/edit_product_process.php" method="POST" enctype="multipart/form-data"> 
                                    <input type="hidden" name  = "sid" value ="sid" >
                                
                                    <div class="form-group">
                                        <label for="exampleInputID">ID</label>
                                        <input type="text" readonly name="" class="form-control" value="SP<?php echo $edit['id']?>" id="exampleInputID" >
                                        <input type="text" readonly name="id" class="form-control" value="<?php echo $edit['id']?>" id="exampleInputID" hidden="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1" value="<?php echo $edit['names']?>">
                                    </div>
                                    <div class="form-group">
                                        <label  >Catalog_id</label>
                                        <select class="form-control" style="padding:15px;" name="catagoryID" >
                                           
                                            <?php
                                            foreach($dslistproduct as $list)
                                            {
                                                $selected = ($list['catalog_id'] == $edit['Catalog_id']) ? 'selected' : '';
                                                echo '<option value="' . $list['catalog_id'] . '" ' . $selected . '> ML' . $list['catalog_id'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPrice">Price</label>
                                        <input type="text" name="prices" class="form-control" id="exampleInputPrice" value="<?php echo $edit['price']?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleSelectStatus" >Status</label>
                                        <select class="form-control" name="status" id="exampleSelectStatus" style="padding:15px;" >
                                        <?php
                                            
                                            if($edit['statu'] == 0)
                                            {
                                                $edit['statu']='Disable';
                                                echo'
                                                    
                                                    <option  value=" '.$edit['statu'].'">'.$edit['statu'].'</option>
                                                    <option  value="1">Active</option>';
                                            }
                                                
                                            else 
                                            { 
                                                $edit['statu']='Active';
                                                echo'
                                                    <option  value=" '.$edit['statu'].'">'.$edit['statu'].'</option>
                                                    <option  value="0">Disable</option>';
                                            }
                                            
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label> </br>
                                        <input type="file" name="fileimg" value="<?php echo ($level."upload_img_product/". ($edit['image_link']))?>"></br>
                                        <input type="file" name="anhcu" value="<?php echo ($level."upload_img_product/". ($edit['image_link']))?>" hidden="true"></br>
                                        <img src="<?php echo $level."upload_img_product/".($edit['image_link'])?>" name="imgEdit" style="width:200px;margin-top:5px;"></td>
                                    </div>
                                    <input type="submit" class="btn btn-gradient-primary me-2"  value="Save" />
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>