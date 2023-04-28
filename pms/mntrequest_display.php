
<?php 
session_start();
require 'dbconn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include('navbar.php'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PMS - Maintenanace</title>
  </head>


  <body>
    <div class="container">
        <?php include('message.php'); ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Maintenanace Requests List
                        <a href="mntrequest.php" class="btn btn-primary float-end">Add Request</a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Request No.</th>
                                    <th>Request Date</th>
                                    <th>Equipment Name</th>
                                    <th>Service</th>
                                    <th>Problem</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                    <?php 
                                    $dept=$_SESSION['dept'];
                                    $query="SELECT * from mntrequests WHERE reqdept='$dept' ";
                                    $result=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($result) > 0)
                                        {
                                            foreach($result as $row)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?= $row['mntreqid']; ?></td>
                                                            <td><?= $row['mntreqtime']; ?></td>
                                                            <td><?= $row['assetname']; ?></td>
                                                            <td><?= $row['servicefor']; ?></td>
                                                            <td><?= $row['problemdescr']; ?></td>
                                                            <td>
                                                                <a href="mntrequest_edit.php?<?=$row['mntreqid'];?>" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="" class="btn btn-info btn-sm">View</a>
                                                                <a href="" class="btn btn-danger btn-sm" >Delete</a>
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