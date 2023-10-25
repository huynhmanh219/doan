<?php 
    $level='../../';
    include($level.'DB/db.php');
    include($level.'compoment/add_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xuly_insert.php" method="POST" enctype="multipart/form-data">
        <div id="chuaform">
            <label for="">id</label> </br>
            <input type="text" name="id"> 
        </div>
        
        <div id="chuaform">
            <label for="">catalog_id</label> </br>
        <input type="text" name="catalog_id"> 
        </div>

        <div id="chuaform">
            <label for="">name</label> </br>
            <input type="text" name="name"> 
        </div>

        <div id="chuaform">
            <label for="">price</label> </br>
            <input type="text" name="price"> 
        </div>

        <div id="chuaform">
            <label for="">image_link</label> </br>
            <input type="file" name="myfile"> 
        </div>

        <div id="chuaform">
            <label for="">created</label> </br>
            <input type="date" name="created"> 
        </div>
        <input type="submit" values="submit">
      
    </form>
</body>
</html>