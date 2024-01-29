<?php
      require_once('../layouts/head_to_wrapper.php'); 
      //set to false if you don't want the sidebar to show
      $add_side_bar = true;
?>
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php include('../layouts/topbar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php
            // First get date to determine the current term.
            $date = date('M');
            //return var_dump($id);

            $fees_query = mysqli_query($db, "SELECT * FROM fees WHERE student_id = '$id'
                        ORDER BY fees.date_paid DESC LIMIT 1 " )or die("An error occured: ".mysqli_error($db));
            while($fees_row = mysqli_fetch_assoc($fees_query)){
                echo $fees_row['id'];
            }

        ?>
        
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Fees</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-left-info shadow py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-dark text-uppercase mb-1"> My Class </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="text-right col-auto">
                    <a class="btn-block btn btn-sm btn-info" href="../classes/index.php">View</a>
                </div>
              </div>
            </div>

                <?php 
  
                  $query = "SELECT  count(1) FROM subjects 
                          INNER JOIN teacher_subject_class
                          ON subjects.id = teacher_subject_class.subject_id
                          WHERE teacher_id = '$id' ";

                  if (mysqli_query($db, $query)){
                      
                      echo "";
                  }else{

                      echo "Error: " . $query . "<br>" . mysqli_error($db);

                  }

                  $result = mysqli_query($db, $query);

                  if (mysqli_num_rows($result) > 0){

                    $row = mysqli_fetch_array($result);
                    $total = $row[0];
                ?>


            <div class="col-xl-4 col-md-6 mb-3">
              <div class="card border-left-info  bg-dark shadow py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-info text-uppercase mb-1">My Subjects</div>
                      <div class="text-right h5 mb-0 font-weight-bold text-info"><?php echo $total; } ?></div>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
                <hr>
                <div class="text-right col-auto">
                    <a class="btn-block btn btn-sm btn-info" href="../subjects/index.php">View</a>
                </div>
              </div>
            </div>

                <?php 
                
                    /**
                     * TODO This is shit💩💩🤦🏾‍♂️... Change everything
                     */
                  $query = "SELECT  count(1) from hostels ";

                  if (mysqli_query($db, $query)){
                      
                      echo "";
                  }else{

                      echo "Error: " . $query . "<br>" . mysqli_error($db);

                  }

                  $result = mysqli_query($db, $query);

                  if (mysqli_num_rows($result) > 0){

                    $row = mysqli_fetch_array($result);
                    $total = $row[0];
                ?>

            <div class="col-xl-4 col-md-6 mb-3">
              <div class="card border-left-info shadow py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-dark text-uppercase mb-1">Hostels</div>
                      <div class="text-right h5 mb-0 font-weight-bold text-gray-800"><?php echo $total; } ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa- fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr>

          <!-- Feeds Heading -->
          <div class="card d-sm-flex align-items-center justify-content-between mb-4 py-2 h5 bg-dark">
            <h5 class="h5 mb-0 text-info ">Announcements </h5>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->

            <div class="col-lg-6 mb-4">

                     <?php 

                          $query = "SELECT  * from announcements WHERE audience = '$role' OR  audience = 'All' ORDER BY id DESC ";

                          if (mysqli_query($db, $query)){
                              
                              echo "";
                          }else{

                              echo "Error: " . $query . "<br>" . mysqli_error($db);

                          }

                          $count = 1;

                          $result = mysqli_query($db, $query);

                          if (mysqli_num_rows($result) > 0){

                            while($row = mysqli_fetch_assoc($result)){                              
                        ?>

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $row['title']; ?></h6>
                </div>
                <div class="card-body">
                  <p> <?php echo $row['name']; ?> </p>
                  <a href="view_announcements.php?id=<?php echo $row['id']?>">View</a>
                </div>
              </div>

                        <?php
                                $count++;
                              }
                            } else {
                            echo 'Announcements from the Adminstration will apear here.';
                            }
                        ?>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
     <?php
      require_once('../layouts/footer_to_end.php');
     ?>