<?php
$level = "../../";
include($level.'DB/db.php');
include($level.'compoment/add_db.php')
?>
<html>

<head>
    <link rel="stylesheet" href="form.css">
    <?php $level='../../'?>
</head>
<body>
    
    <h1>Add Account User</h1>
        <div class = "form-insert">
<<<<<<< Updated upstream:content/partial_user_add.php
            <form action="<?php echo($level);?>compoment/insert_user_process.php" method="POST" enctype="multipart/form-data">
=======
           
        <form action="form_user_insert.php" method="POST" enctype = "mutilpart/form-data">
>>>>>>> Stashed changes:pages/form/form.php
             <div class = "form-label">  
                <label for="user">
                User:<input type="text" name ="user" id= "user">
                </label>
                <label for="fname">  
                FirstName: <input type ="text" name ="fname" id ="fname">
                </label>  
                <label for="lname">
                LastName:<input type ="text" name ="lname">
                </label> 
                <label for="status">
                Status:<input type ="text" name ="status">
                </label> 
                 <label>
                Image:<input type ="file" name= "image" id ="file">
                </label> 
                <input type="submit" VALUE = "THÊM" ID = "submit">
                </div> 
            </form>
        </div>
</body>
</html>