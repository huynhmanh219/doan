<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="<?php echo $level?>img-user/hinh1.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">ADMIN </span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $level?>index.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Product</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-cart menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo $level?>pages/product/product.php">product</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $level?>pages/product/listproduct.php">list product</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $level?>pages/user/user.php">
        <span class="menu-title">User</span>
        <i class="mdi mdi-account menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $level?>pages/icons/mdi.php">
        <span class="menu-title">Icons</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>
     
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $level?>pages/charts/chartjs.php">
        <span class="menu-title">Charts</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $level?>pages/bill/bill.php">
        <span class="menu-title">Bill</span>
        <i class="mdi mdi-calendar-text menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $level?>pages/tables/basic-table.php">
        <span class="menu-title">Tables</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
    
    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Sample Pages</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.php"> Blank Page </a></li> -->
          <li class="nav-item"> <a class="nav-link" href="<?php echo $level?>pages/samples/login.php"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $level?>pages/samples/register.php"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $level?>pages/samples/error-404.php"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $level?>pages/samples/error-500.php"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item sidebar-actions">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-3">Projects</h6>
        </div>
        <a href="#" class="btn btn-block btn-lg btn-gradient-primary mt-4">Load</a>
        <button class="btn btn-block btn-lg btn-gradient-primary mt-4" hidden>Home</button>
        <div class="mt-4">
          <div class="border-bottom">
            <p class="text-secondary">Categories</p>
          </div>
          <ul class="gradient-bullet-list mt-4">
            <li>Free</li>
            <li>Pro</li>
          </ul>
        </div>
      </span>
    </li>
  </ul>
</nav>