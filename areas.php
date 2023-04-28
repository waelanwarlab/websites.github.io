

<?php 
session_start();
require 'dbconn.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php require 'navbar.php'; ?>
    
        <title>PMS - Areas</title>
  </head>


  <body>
    
  
  <div class="container">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Area
                        <a href="dashboard.php" class="btn btn-danger float-end">Home</a>
                    </h4>

                </div>


                <div class="card-body">
                    <form action="area_actions.php" method="POST">

                        <div class="mb-3">
                            <label>Area Code</label>
                            <input type="text" name="areacode" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Area Name</label>
                            <input type="text" name="areaname" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Area Description</label>
                            <input type="text" name="areadescr" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Area Image</label>
                            <input type="text" name="areaimg" class="form-control" disabled>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="btn_savearea" class="btn btn-primary">Add Area</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>






        <!-- Add Another CARD - Horizontal -->
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                <a href="" class="btn btn-primary float-end">Areas List</a>

            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Area Code</th>
                            <th>Area Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $query1="SELECT * FROM areas";
                            $result1=mysqli_query($conn, $query1);

                            if(mysqli_num_rows($result1) > 0)
                            {
                                foreach($result1 as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?=$row['area_code']; ?></td>
                                        <td><?=$row['area_name']; ?></td>
                                        <td><?=$row['area_description']; ?></td>
                                    </tr>
                                <?php

                                }
                                
                            }
                            else
                            {
                                echo "<h4>No Data Found!</h4>";
                            }

                        ?>
                    </tbody>
                </table>

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

