<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php
    $pick = '';
    include($level . 'metadata/link.php');
        ?>
</head>

<body>
    <!-- index-->
    <?php if ($page == 'index') 
    { ?>
        <!-- banner-->
        <div class="container-scroller">
    
            <!-- partial:partials/_navbar.html -->
            <?php include($level . 'partials/_navbar.php') ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <?php include($level . 'partials/_sidebar.php') ?>
                <!-- partial -->
                <?php include($level . 'content/partial_index.php') ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php include($level . 'js/plugin1.php') ?>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <?php include($level . 'js/plugin2.php') ?>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <?php include($level . 'js/impact.php') ?>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <?php include($level . 'js/custom.php') ?>
        <!-- End custom js for this page -->
        <?php
    }
    ?>
    
    <!-- chartjs-->
    <?php if ($page == 'chartjs') 
    {
        ?>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.php -->
            <?php include($level . 'partials/_navbar.php') ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_sidebar.php -->
                <?php include($level . 'partials/_sidebar.php') ?>
                <!-- partial -->
                <div class="main-panel">
                    <?php include($level . 'content/partial_char.php') ?>
                    <!-- partial:../../partials/_footer.php -->
                    <?php include($level . 'partials/_footer.php') ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php include($level . 'js/plugin1.php') ?>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <?php include($level . 'js/plugin2.php') ?>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <?php include($level . 'js/impact.php') ?>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <?php include($level . 'js/customchar.php') ?>
    
        <!-- End custom js for this page -->
        <?php
    }
    ?>
    
    <!--basic-->
    <?php if ($page == 'basic') 
    { ?>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.php -->
            <?php include($level . 'partials/_navbar.php') ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_sidebar.php -->
                <?php include($level . 'partials/_sidebar.php') ?>
                <!-- partial -->
                <div class="main-panel">
                    <?php include($level . 'content/partial_form.php') ?>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <?php include($level . 'js/plugin1.php') ?>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <?php include($level . 'js/plugin1.php') ?>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <?php include($level . 'js/customfile.php') ?>
            <!-- End custom js for this page -->
            <?php
    } ?>
    
    <!--mdi-->
    <?php if ($page == 'mdi') 
    {
            ?>
            <div class=" container-scroller">
                <!-- partial:../../partials/_navbar.php -->
                <?php include($level . 'partials/_navbar.php') ?>
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:../../partials/_sidebar.php -->
                    <?php include($level . 'partials/_sidebar.php') ?>
                    <!-- partial -->
                    <div class="main-panel">
                        <?php include($level . 'content/partial_mdi.php') ?>
                        <!-- partial:../../partials/_footer.php -->
                        <?php include($level . 'partials/_footer.php') ?>
                        <!-- partial -->
                    </div>
                </div>
            </div>
            <!-- plugins:js -->
            <?php require_once($level . 'js/plugin1.php') ?>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <?php require_once($level . 'js/impact.php') ?>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <!-- End custom js for this page -->
            <?php
     }
    ?>
    
    <!--blank-->
    <?php if ($page == 'blank') {
            ?>
            <div class="container-scroller">
                <!-- partial:../../partials/_navbar.html -->
                <?php include($level . 'partials/_navbar.php') ?>
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:../../partials/_sidebar.html -->
                    <?php include($level . 'partials/_sidebar.php') ?>
                    <!-- partial -->
                    <div class="main-panel">
                        <div class="content-wrapper">
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <?php include($level . 'partials/_footer.php') ?>
                        <!-- partial -->
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <?php include($level . 'js/plugin1.php') ?>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <?php include($level . 'js/impact.php') ?>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <!-- End custom js for this page -->
            <?php
    }
    ?>

    <!--error 404 -->
    <?php if($page == '404')
    {?>
    <div class="container-scroller">
      <?php include($level.'content/partial_404.php')?>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include($level.'js/plugin1.php')?>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php include($level.'js/impact.php')?>
    <!-- endinject -->
    <?php
    }
    ?>

    <!-- error 500 -->
    <?php if($page == '500')
    {?>
    <div class="container-scroller">
    <?php include($level.'content/partial_500.php')?>
     <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <?php include($level.'js/plugin1.php')?>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <?php include($level.'js/impact.php')?>
      <!-- endinject -->
    <?php
    }
    ?>

    <!--login-->
    <?php if($page == 'login')
    {?>
       <div class="container-scroller">
     <?php include($level.'content/partial_login.php')?>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include($level.'js/plugin1.php')?>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php include($level.'js/impact.php')?>
    <!-- endinject -->
    <?php
    }
    ?>

    <!--register-->
    <?php if($page == 'register')
    {?>
    <div class="container-scroller">
     <?php include($level.'content/partial_register.php')?>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include($level.'js/plugin1.php')?>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php include($level.'js/impact.php')?>
    <!-- endinject -->
    <?php
    }
    ?>

</body>

</html>