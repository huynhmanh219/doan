
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
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
</head>
<body>
    <div class="container-scroller">
        <?php include($level.'partials/_navbar.php');?>
        <!-- Main -->
        <div class="container-fluid page-body-wrapper">
            <?php include($level.'partials/_sidebar.php');?>
                <div class="main-panel">
                    <?php include($level . 'content/partial_bill_edit.php');?>                
                    <?php include($level.'partials/_footer.php')?> 
                </div>
            </div>
        </div>
    </div>
            <?php include($level.'js/plugin1.php')?>
            <?php include($level.'js/impact.php')?>
</body>
</html>