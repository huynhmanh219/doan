<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    $level = '';?>
    <!-- Required meta tags -->
   <?php include('link/link.php')?>
  </head>
  <body>
    <!-- banner-->
    <div class="container-scroller">
    
      <!-- partial:partials/_navbar.html -->
    <?php include('partials/_navbar.php')?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include('partials/_sidebar.php')?>
        <!-- partial -->
       <?php include('content/partial.php')?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php require_once('js/plugin1.php')?> 
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <?php require_once('js/plugin2.php')?> 
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php require_once('js/impact.php')?>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <?php require_once('js/custom.php')?>
    <!-- End custom js for this page -->
  </body>
</html>