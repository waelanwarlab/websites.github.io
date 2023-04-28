

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

    <title>PMS - Maintenanace</title>
  </head>

    



  <body>
    <div class="container">
            <?php include('message.php'); ?>

        <div class="col-md-12">
            <div class="row">
                <div class="col">
                    <h3 class="text-center">Maintenanace Request - Edit</h3>

                    <div class="card">

                        <div class="card-header">

                        </div>

                        <div class="card-body">

                            <!-- check if user press "update request" or not-->
                            <?php 
                                if(isset($_GET['mntreqid']))
                                {
                                    $reqid = mysqli_real_escape_string($conn, $_GET['mntreqid']);
                                    $query2 = "select * from mntrequests WHERE mntreqid='$reqid'";
                                    $result2 = mysqli_query($conn, $query2);
                                    //
                                    if(mysqli_num_rows($result2) > 0 )
                                        {
                                            $row2 = mysqli_fetch_array($result2);
                                                ?>
                                                   

                                            <form action="mntrequest_actions.php" method="POST">

                                                <div class="mb-3">
                                                    <label for="">Request Type</label> <br>
                                                    <input type="text" name="reqtype" value="Equipments"/> Equipment/Appliance
                                                </div>

                                                <div class="mb-3">                         
                                                    <label>Section</label>
                                                    <input type="text" name="section" value=""/>Facility
                                                </div>

                                                <div class="mb-3">
                                                    <label>Asset Name</label>
                                                    <input type="text" name="assetname" class="form-control">                                
                                                </div>

                                                <div class="mb-3">
                                                    <label>Problem Description</label>
                                                    <input type="text" name="problemdescr" class="form-control">                                
                                                </div>

                                                <div class="mb-3">
                                                    <label>Importance Level</label><br>
                                                    <input type="text" name="importancelevel" class="form-control"> 
                                                </div>
                                                

                                                <div class="mb-3">
                                                    <button type="submit" name="update_mntrequest" class="btn btn-primary">Update Request</button>
                                                </div>
                                            </form>
                             
                                            <?php
                                        }
                                    else
                                        {
                                            echo "<h4>Error ! No Records Found! </h4>";
                                        }
                                }
                            ?>
                        </div>
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

