<?php 
    require_once('../scripts/lecturer_validation.php');
    require_once('../../../config/admin_server.php');   //contains db connection so we good 🤦🏾‍♂️
    $add_side_bar = true;
    include_once('../layouts/head_to_wrapper.php');
    include_once('../layouts/topbar.php');

    $lecturer_id = $_GET['id'];

?>
        <hr/>        
        <?php 
            $query = "SELECT * from teachers where id = '$lecturer_id' ";

            $result = mysqli_query($db, $query) or die(mysqli_error($db));
            $count = 1;
            if (mysqli_num_rows($result) > 0){  
                $images_dir = "../../../utils/images/lecturers/";
                   
                while($row = mysqli_fetch_assoc($result)){ 
                    $picname = $row['img'];
        ?>

        <main>



                <div class="card mb-4">
                    <div class=" card-header text-center">
                        <h3 class="text-">Users Information.</h3>
                        <div class="text-">
                            <?php //echo "<img src='".$images_dir.$picname."' alt='".$picname."' width='140' height='140'> "?>
                        </div>    
                    </div>
                    
                    <div class="card-body">

                    <div class="row">
                            <div class="col-lg-6">
                                <div class=" mb-4">
                                    <div class="card-body text-right">
                                        <h5 style="color:lightblue"> Personal Info </h5>
                                        <hr>
                                        <p>ID</p>
                                        <p>Name</p>
                                        <p>Username</p>
                                        <p>Gender</p>
                                      
                                        <h5 style="color:lightblue"> Contact Info </h5>
                                        <hr>
                                        <p>Email</p>
                                        <p>Phone Number</p>
                                        <p>Address</p>
                                        

                                    </div>
                                </div>
                            </div>
                            <div > <hr style="height:100%; width:1px; backgro~und-color:grey; "></div>
                            
                            <div class="col-lg-5">
                                <div class=" mb-4">
                                    <div class="card-body">
                                        <h5 style="color: transparent"> Personal Info</h5>
                                        <hr>
                                        <p> <?php echo $row['id']; ?> </p>
                                        <p> <?php echo $row['name']; ?> </p>
                                        <p> <?php echo $row['username']; ?> </p>
                                        <p> <?php echo $row['sex']; ?> </p>
                                      
                                        <h5 style="color: transparent"> Contact Info</h5>
                                        <hr>
                                        <p> <?php echo $row['email']; ?> </p>
                                        <p> <?php echo $row['phone']; ?> </p>
                                        <p> <?php echo $row['address']; ?> </p>
                                       
                                    </div>
                                </div>
                                <div class="text-right text-white">
                                    <a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="../../../config/admin_server.php?id=<?php echo $lecturer_id;?>&delete_lecturer=true" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </main>
        <?php
                }
            } else {
            echo 'No Records Found!';
            }
        ?>

<?php require_once('../layouts/footer_to_end.php'); ?>
