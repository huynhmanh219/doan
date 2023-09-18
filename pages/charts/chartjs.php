<!DOCTYPE php>
<php lang="en">

<head>
  <?php $level = '../../';
  ?>

  <!-- Required meta tags -->
  <?php include($level.'link/link.php') ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.php -->
    <?php include($level . 'partials/_navbar.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.php -->
      <?php include($level . 'partials/_sidebar.php') ?>
      <!-- partial -->
      <div class="main-panel">
        <?php include($level . 'content/partialchar.php') ?>
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
  <?php require_once($level . 'js/plugin1.php') ?>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <?php require_once($level . 'js/plugin2.php') ?>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <?php require_once($level . 'js/impact.php') ?>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <?php require_once($level.'js/customchar.php') ?>
  
  <!-- End custom js for this page -->
</body>

</php>