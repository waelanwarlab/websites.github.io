
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



    <?php 
    include 'navbar.php';
    ?>
    
    <title>Hardware Specifications - Display</title>

  </head>



  <body>
    <h3 class="text-center text-light bg-info p-2">Hardware Specifications - Display</h3>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <h5 class="text-center" id="" ></h5>
                    <hr>
                        <div class="row" id="result">
                            <?php 
                                $query="SELECT * FROM assets_specs";
                                $result=mysqli_query($conn, $query);

                                while($row=$result->fetch_assoc())
                                {
                                    ?>
                                    <div class="col-md-3 mb-2">
                                        <div class="card-deck">
                                            <div class="card border-secondary">
                                                <img src="<?=$row['asset_img']; ?>" class="card-img-top" width="200" height="200">
                                                <div class="card-img-overlay">
                                                    <h6 style="margin-top:175px;" class="text-light bg-info text-center rounded"><?=$row['model']; ?></h6>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-title text-danger">Serial:
                                                        <?=$row['asset_serial'];?>
                                                    </h6>
                                                    <p>MEMORY:<?=$row['memory']; ?><br>
                                                    CPU:<?=$row['cpu']; ?><br>
                                                    HDD:<?=$row['hdd'];?><br>
                                                    </p>
                                                    <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                                                </div>
                                            </div>
                                    </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>





   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
    <!-- Jquery CDN Link -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script> 
    
</body>

</html>