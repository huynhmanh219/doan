<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $level = "../../";
  include($level.'link/link.php')?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include($level.'partials/_navbar.php')?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include($level.'partials/_sidebar.php')?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include($level.'partials/_footer.php')?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
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
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>