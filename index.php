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
    <?php include('header/banner.php')?>
      <!-- partial:partials/_navbar.html -->
    <?php include('header/navbar.php')?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include('content/sidebar.php')?>
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
    <?php require_once('content/plugin1.php')?> <!-- tác động vào banner và navbar -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <?php require_once('content/plugin2.php')?> <!-- tác động vào navbar và làm mất đồ thị -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php require_once('content/impact.php')?>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <?php require_once('content/custom.php')?>
    <!-- End custom js for this page -->
  </body>
</html>