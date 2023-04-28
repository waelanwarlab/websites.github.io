

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
    
    <div class="container mt-5">

    <!--alert message -->
    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-header">
                    <h4>Assets Family - View Details
                        <a href="asset_fam_dis.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                    </div>

                    <div class="card-body">

                        <!-- Get Family ID -->
                            <?php 
                            if(isset($_GET['id']))
                            {
                                //$famid=$_GET['id'];
                                //this method to protect against sql injection
                                $famid = mysqli_real_escape_string($conn, $_GET['id']);
                                //
                                $query="SELECT * FROM assets_family WHERE familyid = '$famid' ";
                                $result=mysqli_query($conn, $query);
                                if(mysqli_num_rows($result)> 0 )
                                {
                                    $family = mysqli_fetch_array($result);

                                    ?>

                        <form action="asset_fam_codes.php" method="POST">
                           
                            <div class="mb-3">
                                <label>Family Code</label>
                                <P class="form-control">
                                <?=$family['familycode'];?>
                                </p>
                            </div>
                            
                            <div class="mb-3">
                                <label>Family Name </label>
                                <P class="form-control">
                                <?=$family['familyname'];?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Family Name - ar</label>
                                <P class="form-control">
                                <?=$family['familynamear'];?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Family Description</label>
                                <P class="form-control">
                                <?=$family['familydescription'];?>
                                </p>
                            </div>

                         
                            <div class="mb-3">
                                <label>Created by</label>                                
                                <P class="form-control">
                                <?=$family['createdby'];?>
                                </p>
                            </div>


                        </form>
                        <?php

                                }
                                else
                                {
                                    echo "<h4> No Family ID ! </h4>";
                                }
                            }
                            ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>