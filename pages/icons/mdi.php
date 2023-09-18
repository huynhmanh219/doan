<!DOCTYPE php>
<php lang="en">
  <head>
  <?php $level = '../../';
  ?>
  <?php include($level.'link/link.php') ?>
  </head>
  <body>
    <div class=" container-scroller">
      <!-- partial:../../partials/_navbar.php -->
      <?php include($level.'partials/_navbar.php')?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.php -->
        <?php include($level.'partials/_sidebar.php')?>
        <!-- partial -->
        <div class="main-panel">
          <?php include($level.'content/partialmdi.php')?>
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
    <?php require_once($level.'js/impact.php')?>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</php>