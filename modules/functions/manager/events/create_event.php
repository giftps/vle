<?php 
    require_once('../../../config/manager_server.php');
    $add_side_bar = true;
    include_once('../layouts/head_to_wrapper.php');
    include_once('../layouts/topbar.php');

?>

<style>
    .table-width {
    padding-right: 75px;
    padding-left: 75px;
    margin-right: auto;
    margin-left: auto;
    }
    @media (min-width: 768px) {
    .table-width {
        width: 750px;
    }
    }
    @media (min-width: 992px) {
    .table-width {
        width: 970px;
    }
    }
    @media (min-width: 1200px) {
    .table-width {
        width: 1170px;
    }
    }
</style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-s border-0 rounded-lg mt-1">

                    <div class="card-header"><h5 class="text-center my-2">Create Event </h5></div>
                    <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data">

                            <table class="table" id="dataTable" width="100%" cellspacing="9">
                                <input id="id" type="hidden" name="id">
                                <tr>
                                    <td>Type:</td>
                                    <td class="text-right"><input id="name" type="text" name="type" placeholder="Type of event"></td>
                                </tr>
                                <tr>
                                    <td>Name:</td>
                                    <td class="text-right"><input id="name" type="text" name="name" placeholder="Name"></td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td class="text-right"><textarea id="name" row="3" name="description" placeholder="Description"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Start Date:</td>
                                    <td class="text-right">
                                    <input type="text" name="start_date" id="date1" alt="date" class="IP_calendar" title="Y-m-d" 
                                                readonly placeholder="Start date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Start Time:</td>
                                    <td class="text-right">
                                        <label for="h1">Hour</label>
                                        <select name="s_time_H" id="h1">
                                            <?php
                                                for ($hr1=1; $hr1 <=24 ; $hr1++) { 
                                                    echo "<option value=".$hr1.">".$hr1."</option>";
                                                }
                                            ?>     
                                        </select>
                                        <label for="m1">Minute</label>
                                        <select name="s_time_M" id="m1">
                                            <?php
                                                for ($min1=1; $min1 <=59 ; $min1++) { 
                                                    echo "<option value=".$min1.">".$min1."</option>";
                                                }
                                            ?>     
                                        </select>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>End Date:</td>
                                    <td class="text-right">
                                    <input type="text" name="end_date" id="date1" alt="date" class="IP_calendar" title="Y-m-d" 
                                                readonly placeholder="End date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>End Time:</td>
                                    <td class="text-right">
                                        <label for="h2">Hour</label>
                                        <select name="e_time_H" id="h2">
                                            <?php
                                                for ($hr2=1; $hr2 <=24 ; $hr2++) { 
                                                    echo "<option value=".$hr2.">".$hr2."</option>";
                                                }
                                            ?>     
                                        </select>
                                        <label for="m2">Minute</label>
                                        <select name="e_time_M" id="m2">
                                            <?php
                                                for ($min2=1; $min2 <=59 ; $min2++) { 
                                                    echo "<option value=".$min2.">".$min2."</option>";
                                                }
                                            ?>     
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="hidden" name="created_by" value="<?php echo $id ?>" >  </td>
                                    <td class="text-left"><input class="btn btn-sm btn-primary " type="submit" name="create_event" value="Submit"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('../layouts/footer_to_end.php'); ?>

