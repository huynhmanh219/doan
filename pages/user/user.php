<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $level = '../../';
    ?>
    <?php include($level.'link/link.php');
          include($level.'DB/db.php');
          include($level.'compoment/add_db.php')
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
        <!-- partial --><div class="main-panel">
        <?php include($level.'content/partialuser.php')?>
          <!-- partial:../../partials/_footer.html -->
        
        <!-- main-panel ends -->
      </div> 
     
      <!-- page-body-wrapper ends -->
    </div>
     <?php include($level.'partials/_footer.php')?>
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