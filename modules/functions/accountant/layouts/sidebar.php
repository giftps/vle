    <!-- @Overide some fa styling -->
    <style>
      .navbar-nav i.fas{
        color: #f8f9fc !important;
        font-size: 190% !important;
      }
      .collapse-inner a {
        color: white! important;
      }
      .collapse-inner a:hover{
        background-color: lightgreen !important;
        color: black !important;
      }
      li span{
        color: #f8f9fc;
        font-style: bold!important;
        font-size: 110% !important;
      }
      .sidebar-light .sidebar-brand {
          color: #f8f9fc;
      }
      .sidebar_new_bg{
        background: #0067a9;
      }

    </style>
    
    <ul class="navbar-nav sidebar_new_bg sidebar sidebar-light accordion" id="accordionSidebar" >

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
            <div class="sidebar-brand-icon rotate-n-15">
              <!-- <i class="fas fa-laugh-wink"></i> -->
            </div>
            <?php //Get Title..
                  $query =  "SELECT name FROM school_info ";
                  $results=mysqli_query($db,$query);
                  $row=mysqli_fetch_array($results);
                  $admin_acc_title = $row['name'];
            ?>
            <div class="sidebar-brand-text mx-3"><?php echo $admin_acc_title ?> </div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <i class="fas fa-fw fa-tachometer-alt "></i>
              <span>Dashboard</span></a>
          </li>
          
          <!-- 
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#students"
                    aria-expanded="true" aria-controls="students">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Students </span>
                </a>
                <div id="students" class="collapse" aria-labelledby="students" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <a class="collapse-item" href="classes/index.php.php">Add student</a>
                        <a class="collapse-item" href="students/all_students.php">View all students</a>
                      </div>
                </div>
            </li>
          -->
          <li class="nav-item text-color-dark">
            <a class="nav-link" href="../payment_modes/index.php">
              <i class="fas fa-fw fa-hands "></i>
              <span>Payments options</span></a>
          </li>
          
          <li class="nav-item text-color-dark">
            <a class="nav-link" href="../fees/index.php">
              <i class="fas fa-fw fa-wallet "></i>
              <span>Manage Tuition</span></a>
          </li>
          
          <li class="nav-item text-color-dark">
            <a class="nav-link" href="../payments/index.php">
              <i class="fas fa-fw fa-wallet "></i>
              <span>Manage Income</span></a>
          </li>

          <li class="nav-item text-color-dark">
            <a class="nav-link" href="../expenses/index.php">
              <i class="fas fa-fw fa-wallet "></i>
              <span>Expenses</span></a>
          </li>

          <li class="nav-item text-color-dark">
            <a class="nav-link" href="../banks/index.php">
              <i class="fas fa-fw fa-university "></i>
              <span>Banks </span></a>
          </li>

          <li class="nav-item text-color-dark">
            <a class="nav-link" href="../calendar/index.php">
              <i class="fas fa-fw fa-calendar"></i>
              <span>My Calendar </span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

    </ul>