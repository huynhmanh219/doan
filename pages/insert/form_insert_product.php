<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        $level='../../';
            include($level.'metadata/link.php');
            include($level.'DB/db.php');
            include($level.'compoment/add_db.php');
        ?>
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
            <?php include($level.'partials/_navbar.php')?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_sidebar.html -->
                <?php include($level.'partials/_sidebar.php')?>
                <div class="main-panel">
                    <?php include($level.'content/partial_insert_product.php')?>
                    <?php include($level.'partials/_footer.php')?>  
                </div>
            </div>
        </div>
        <?php include($level.'js/plugin1.php')?>
        <?php include($level.'js/impact.php')?>
    </body>
</html>