<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <?php 
    $level = "../../";
    $sid = $_GET['sid'];
    include($level."DB/db.php");
    $edit = "SELECT * from user where id = '$sid'";
    $result = $db->prepare($edit);
    $result -> execute();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    include($level.'metadata/link.php')
    ?>
</head>
<body>
<div class="container-scroller">
<?php include($level.'partials/_navbar.php');?>
<!-- Main -->
<div class="container-fluid page-body-wrapper">
<?php include($level.'partials/_sidebar.php');?>
<div class="main-panel">
<div class = "content-wrapper">
<div class="col-12 grid-margin stretch-card ">               
<?php include($level . 'content/partial_user_edit.php');?>                
</div><?php include($level.'partials/_footer.php')?> 
</div> 
</div>
</div>
</div>
</div>
        <?php include($level.'js/plugin1.php')?>
        <?php include($level.'js/impact.php')?>
</body>
</html>