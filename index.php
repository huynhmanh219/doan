<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    $page = 'index';
    $level = '';?>
    <!-- Required meta tags -->
<<<<<<< HEAD
   <?php
         include($LEVEL.'layout.php');
   ?>
=======
   <?php include($level.'link/link.php')?>
  </head>
  <body>
    <!-- banner-->
    <div class="container-scroller">
    
      <!-- partial:partials/_navbar.html -->
    <?php include($level.'partials/_navbar.php')?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include($level.'partials/_sidebar.php')?>
        <!-- partial -->
       <?php include($level.'content/partial.php')?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php require_once($level.'js/plugin1.php')?> 
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <?php require_once($level.'js/plugin2.php')?> 
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php require_once($level.'js/impact.php')?>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <?php require_once($level.'js/custom.php')?>
    <!-- End custom js for this page -->
  </body>
</html>
>>>>>>> e235ec88ee2ea150ad7604f9a3080db5b81f5dab
