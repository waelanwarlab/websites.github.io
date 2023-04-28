
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

    <title>PMS - Assets</title>
  </head>


  <body>
        <div class="container">
            <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Search by Asset Code</h5>
                        </div>

                        <div class="card-body">
                            <form action="" method="GET">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <input type="text" name="assetcode" value="<?php if(isset($_GET['assetcode']))  {echo $_GET['assetcode'];}?>" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                        <Button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                    <?php 
                        if(isset($_GET['assetcode']))
                        {
                            $assetcode=$_GET['assetcode'];

                            $query2="SELECT * FROM assets WHERE asset_code='$assetcode' ";
                            $result2 = mysqli_query($conn, $query2);

                            if(mysqli_num_rows($result2) > 0)
                                {
                                    foreach($result2 as $row)
                                    ?>
                                        <div class="mb-3">
                                            <label>Asset Name</label>
                                            <input type="text" name="assetname" value="<?=$row['asset_name']; ?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>Purchase Order No.</label>
                                            <input type="text" name="pono" value="<?=$row['po_no']; ?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>Purchase Order Value</label>
                                            <input type="text" name="povalue" value="<?=$row['po_value']; ?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>Delivery Date</label>
                                            <input type="date" name="deliverydate" value="<?=$row['delivery_date']; ?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>installation Date</label>
                                            <input type="date" name="installdate" value="<?=$row['installation_date']; ?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>Warrenty - Months</label>
                                            <input type="text" name="warrenty" value="<?=$row['warrenty']; ?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>Lifetime - Months</label>
                                            <input type="text" name="lifetime" value="<?=$row['lifetime_m']; ?>" class="form-control">
                                        </div>

                                    <?php

                                }
                                else
                                {
                                    
                                }
                        }
                    ?>




                    <div class="card">
                        <div class="card-header">
                            <h5>Assets Purchasing Info.
                            <a href="assets.php" class="btn btn-danger float-end">Back to Assets</a>
                            </h5>
                        </div>

                        <div class="card-body">
                            <form action="assets_actions.php" method="POST">
                                
                                <div class="mb-3">
                                    <label>Asset Name</label>
                                    <input type="text" name="assetname" value="<?=$row['asset_name']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Purchase Order No.</label>
                                    <input type="text" name="pono" value="<?=$row['po_no']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Purchase Order Value</label>
                                    <input type="text" name="povalue" value="<?=$row['po_value']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Delivery Date</label>
                                    <input type="date" name="deliverydate" value="<?=$row['delivery_date']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>installation Date</label>
                                    <input type="date" name="installdate" value="<?=$row['installation_date']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Warrenty - Months</label>
                                    <input type="text" name="warrenty" value="<?=$row['warrenty']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Lifetime - Months</label>
                                    <input type="text" name="lifetime" value="<?=$row['lifetime_m']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                <button type="submit" name="save_assetdetails" class="btn btn-primary">Update Asset Details</button>
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