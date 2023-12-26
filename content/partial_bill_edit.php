<?php
$level = "../../";
$bill = $_GET['smahd'];
include($level."DB/db.php");
include($level.'metadata/link.php');
$edit = "SELECT * from bill where mahd = '$bill'";

$result = $db->prepare($edit);
$result -> execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

?>
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Table </h3>
            </div>
            <div class="row">
                <div class="col-lg-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Bill Update</h4>
                      <p class="card-description"> </p>
                      <form  class="forms-sample " action="<?php echo $level?>compoment/edit_bill_process.php" method="POST" enctype = "multipart/form-data">
                        <div class="form-group">
                          <label for="exampleInputName1">ID</label>
                          <input type="text" class="form-control" name = "id" id="exampleInputName1" placeholder="User" value = "<?php echo( $row['mahd'])?>" readonly>
                        </div>  
                        <div class="form-group">
                          <label for="exampleInputName1">date</label>
                          <input type="text" class="form-control" name = "date" id="exampleInputName1"  value = "<?php echo( $row['ngay'])?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail3">method pay</label>
                            <input type="text" class="form-control" name = "pay" id="exampleInputEmail3"  value = "<?php echo( $row['pttt'])?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInput">Money</label>
                          <input type="text" name = "money" class="form-control" id="exampleInput" placeholder=""value = "<?php echo( $row['gia'])?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleSelectStatus" >Status</label>
                          <select class="form-control" name="status" id="exampleSelectStatus" style="padding:15px;" >
                          <?php                                      
                            if($row['statu'] == 0)
                            {
                              $row['statu']='Disable';
                              echo'                                         
                                <option  value=" '.$row['statu'].'">'.$row['statu'].'</option>
                                <option  value="1">Active</option>';
                            }
                            else 
                            { 
                              $row['statu']='Active';
                              echo'
                                <option  value=" '.$row['statu'].'">'.$row['statu'].'</option>
                                <option  value="0">Disable</option>';
                            }                       
                            ?>
                          </select>
                        </div>                  
                        <input type="submit" name="submit" class="btn btn-gradient-primary me-2">
                      </form> 
                    </div>
                </div>
              </div>
            </div>
</div>