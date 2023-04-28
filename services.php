

<?php 
session_start();
require 'dbconn.php';



?>

<!doctype html>
<html lang="en">
  <head>

    <?php include 'navbar.php'; ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Services</title>
  </head>


  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Services List
                        <a href="services.php" class="btn btn-info float-end" target="_blank">Print</a>
                        <a href="services.php" class="btn btn-danger float-end">Add Service</a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service ID</th>
                                    <th>Service Name</th>
                                    <th>Service Description</th>
                                </tr>
                            </thead>

                            <tbody>
                                        <?php 
                                        $query2="SELECT * from services";
                                        $result2 = mysqli_query($conn, $query2);

                                        if(mysqli_num_rows($result2) > 0)
                                        {

                                            foreach($result2 as $row)
                                            {
                                            ?>
                                                <tr>
                                                    <td><?=$row['service_id']; ?></td>
                                                    <td><?= $row['service_name']; ?></td>
                                                    <td><?= $row['service_descr']; ?></td>
                                                </tr>
                                            <?php 
                                            }
                                        }
                                        else
                                        {
                                                echo "<h5>No Records Found</h5>";
                                        }



                                        ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="container">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    <h4>Add New Service
                        <a href="mntrequest_display.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                    </div>


                    <div class="card-body">
                        <form action="actions.php" method="POST">

                            <div class="mb-3">
                            <label>Service Name</label>
                            <input type="text" name="srvcname" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Service Description</label>
                                <input type="text" name="srvcdescr" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_service" class="btn btn-primary">Add Service</button>
                            </div>
                        </form>
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>



   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Jquery CDN Link-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    
</body>

</html>