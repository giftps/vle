    <!-- @Overide some fa styling -->
 <style>
    .navbar-nav i.fas{
        color: green !important;
        font-size: 190% !important;
    }
    .collapse-inner a {
        color: green! important;
    }
    .collapse-inner a:hover{
        background-color: lightgreen !important;
        color: black !important;
    }
    li span{
        color: green;
        font-style: bold!important;
        font-size: 110% !important;
    }
    .sidebar-light .sidebar-brand {
        color: green;
    }
    .sidebar_new_bg{
        background: white;
    }

    .sidebar-light .nav-item .nav-link[data-toggle="collapse"]::after {
        display: none;

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
            <div class="sidebar-brand-text mx-3"> <img src="../../../assets/logo/vle.png" height="100px" width="200px"></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
            
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
            <a class="nav-link" href="../../../../lms/moe">            
              <span>E-Files & Forum </span></a>
          </li>

          <li class="nav-item text-color-dark">
            <a class="nav-link" href="../../chat/">            
              <span>Messegesdd </span></a>
          </li>

         

    </ul>
