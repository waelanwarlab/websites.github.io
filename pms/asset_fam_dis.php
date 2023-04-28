
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

    <title>PMS - ZAD</title>
  </head>
  <body>
    <h1></h1>
        <div class="container mt-5">
            <?php include('message.php')?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Assets Family List
                                <a href="asset_fam_ins.php" class="btn btn-primary float-end" >New Assets Family</a>
                            </h4>

                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Family ID</th>    
                                            <th>Family Code</th>
                                            <th>Family Name</th>
                                            <th>Family Name-Ar</th>
                                            <th>Family Description</th>
                                            <th>Created by</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query="SELECT * FROM assets_family";
                                        $result = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            foreach($result as $family)
                                            {
                                                ?>
                                                 <tr>
                                                    <td><?= $family['familyid']; ?> </td>
                                                    <td><?= $family['familycode'];?></td>
                                                    <td><?= $family['familyname'];?>  </td>
                                                    <td><?= $family['familynamear'];?> </td>
                                                    <td><?= $family['familydescription'];?> </td>
                                                    <td><?= $family['createdby'];?> </td>

                                                    <!-- Add Actions -->
                                                <td>
                                                <a href="asset_fam_view.php?id=<?=$family['familyid'];?>" class="btn btn-info btn-sm">View</a>
                                                <a href="asset_fam_edit.php?id=<?=$family['familyid'];?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                                </td>

                                                 </tr>

                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "<h5> No Data Found! </h5>";
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>

 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>