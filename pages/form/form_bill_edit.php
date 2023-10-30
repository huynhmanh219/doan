<?php
$level = "../../";
$bill = $_GET['smahd'];
include($level."DB/db.php");

$edit = "SELECT * from bill where mahd = '$bill'";

$result = $db->prepare($edit);
$result -> execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1> User Update</h1>
        <div class = "form-insert">
            <form action="form_bill_edit_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name  = "smahd" value ="smahd" ?>
             <div class = "form-label">  
                <label for="bill">
                Bill:<input type="text" name ="bill" id= "bill" value = "<?php echo($row['mahd'])?>">
                </label>
                <label for="fname">  
                Date: <input type ="text" name ="date" id ="fname" value ="<?php echo($row['ngay'])?>">
                </label>  
                <label for="lname">
                Paid Method:<input type ="text" name ="pttt" value ="<?php echo( $row['pttt'])?>">
                </label> 
                <label for="status">
                Price:<input type ="text" name ="price" value ="<?php echo( $row['gia'])?>">
                </label> 
                 <label for="file">
                status:<input type ="text" name ="status" value ="<?php echo( $row['statu'])?>">
                </label> 
                <input type="submit" VALUE = "EDIT" ID = "submit">
                 </div> 
            </form>
        </div>
</body>
</html>