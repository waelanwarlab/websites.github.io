

<?php 
//session_start();
require 'sys.php';
require 'assets_actions.php';
require 'dbconn.php';
?>

<?php
//SET Auto-Code For New Asset
$query2="SELECT asset_code from assets ORDER BY asset_id DESC LIMIT 1";
$result2=mysqli_query($conn, $query2);
$row2=mysqli_fetch_array($result2);
$lastrec=$row2['asset_code'];

    if($lastrec==NULL)
    {
        $asset_auto_code="A0001";
    }
    else
    {
        $lastrec = substr($lastrec,4);
        $lastrec = intval($lastrec);
        $asset_auto_code = "A000" . ($lastrec + 1);
    }

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
                            <h4>Assets (Equipments) Info.
                                <a href="assets_details.php" class="btn btn-danger float-end">Asset Purchasing Info.</a>
                            </h4>
                        </div>

                        <div class="card-body">
                            <form action="assets_actions.php" method="POST">

                            <div class="mb-3">
                                <label>Asset Code</label>
                                <input type="text" name="assetcode" value="<?php echo $asset_auto_code; ?>" class="form-control" readonly>
                            </div>

                            <div class="mb-3">
                                <label>Stock Code</label>
                                <input type="text" name="assetstockcode" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Asset TAG</label>
                                <input type="text" name="tag" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Barcode</label>
                                <input type="text" name="barcode" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Asset Name</label>
                                <input type="text" name="assetname" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Asset Description</label>
                                <input type="text" name="assetdescr" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Brand/Manufacturer</label>
                                <input type="text" name="brand" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Model</label>
                                <input type="text" name="model" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Asset Serial</label>
                                <input type="text" name="model" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>IP Address</label>
                                <!-- <input type="text" name="ipaddress" value="<?=get_client_ip();?>" class="form-control" readonly> -->
                                <input type="text" name="ipaddress" value="<?=get_user_machine_ip();?>" class="form-control" readonly>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_asset" class="btn btn-primary">Add Asset</button>
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