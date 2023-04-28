
<?php 
session_start();
require 'dbconn.php';
?>


<!doctype html>
<html lang="en">
  <head>

  <?php 
    include 'navbar.php';
  ?>

    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>


  <body>
    
  <div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Work Orders - in Process
                        <a href="dashboard.php" class="btn btn-primary float-end">HOME</a>
                    </h4>
                </div>


                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Request No.</th>
                                <th>Work Order No.</th>
                                <th>WO Issue Date</th>
                                <th>WO Closing Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php 
                                    $dept=$_SESSION['dept'];
                                    $query="SELECT * from mntorders WHERE wo_state='Doing' ORDER BY wo_id";
                                    $result=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($result) > 0)
                                        {
                                            foreach($result as $row)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?= $row['reqid']; ?></td>
                                                            <td><?= $row['wo_id']; ?></td>
                                                            <td><?= $row['wo_issue_date']; ?></td>
                                                            <td><?= $row['wo_closing_date']; ?></td>
                                                            <td>
                                                                <a href="" class="btn btn-info btn-sm">More Details</a>
                                                                <a href="" class="btn btn-danger btn-sm">Done</a>
                                                                <a href="" class="btn btn-danger btn-sm">Cancel</a>
                                                            </td>
                                                            
                                                        </tr>
                                                    <?php
                                                }

                                        }
                                    else
                                        {
                                        echo "<h5> No Records Found! </h5>";
                                        exit;
                                        }

                                    ?>
                            </tbody>
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