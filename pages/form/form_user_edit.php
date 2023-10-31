<?php
$level = "../../";
$user = $_GET['suser'];
include($level."DB/db.php");

$edit = "SELECT * from user where users = '$user'";


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
            <form action="<?php echo($level);?>compoment/edit_user_process.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name  = "suser" value ="suser" >
             <div class = "form-label">  
                <label for="user">
                User:<input type="text" name ="user" id= "user"  value = "<?php echo( $row['users'])?>">
                </label>
                <label for="fname">  
                FirstName: <input type ="text" name ="fname" id ="fname" value ="<?php echo($row['firstname'])?>">
                </label>  
                <label for="lname">
                LastName:<input type ="text" name ="lname" value ="<?php echo( $row['lastname'])?>">
                </label> 
                <label for="status">
                Status:<input type ="text" name ="status" value ="<?php echo( $row['statu'])?>">
                </label> 
                 <label for="file">
                Image:<input type ="file" name= "image" id ="file" value ="<?php echo($level."img-user/".$row['picture'])?>">
                <img src="<?php echo $level."img-user/".($row['picture'])?>" alt="">
                </label> 
                <input type="submit" VALUE = "EDIT" ID = "submit">
                 </div> 
            </form>
        </div>
</body>
</html>