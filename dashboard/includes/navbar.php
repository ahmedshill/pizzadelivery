    
  
<?php
    $current_user = $_SESSION['SBUser'];
    $user_detailers = $db->query("SELECT * FROM users where id='$current_user'");
    $user_info = mysqli_fetch_assoc($user_detailers);

?>





    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="userindex.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">pizza hub<sup></sup></div>
          <?php
              echo $user_info['username'];
              
          ?>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="userindex.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>user Dashboard</span></a>
      </li>

     

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

       <li class="nav-item">
        <a class="nav-link" href="menu.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>pizza menu</span></a>
      </li>


        <li class="nav-item">
        <a class="nav-link" href="usersorder.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Orders</span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="#">logout</a>
            <!-- <a class="collapse-item" href="logout.php">Logout</a> -->
            
          </div>
        </div>
      </li>
       

       <!-- Nav Item - Admin Profile -->
      

    

      <!-- Divider -->
      <hr class="sidebar-divider">

      
    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

        <!-- End of Topbar -->
        