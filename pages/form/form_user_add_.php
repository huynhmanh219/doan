<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <?php 
    $level = "../../";
    include($level.'metadata/link.php');
    include($level.'DB/db.php');
    include($level.'compoment/user_data.php')
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
 <div class="card" >  
<?php include($level.'content/partial_user_add.php');?>
<?php include($level.'partials/_footer.php')?> 
</div>
</div> 
</div>
</div>
</div>
</div>
        <?php include($level.'js/plugin1.php')?>
        <?php include($level.'js/impact.php')?>
</body>
</html>