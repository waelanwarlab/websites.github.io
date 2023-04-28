

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

    <title>Asset/Block Profile</title>
  </head>


  <body>
    <h1>Asset/block Profile</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-4">
            <div class="card-header">

            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="" method="GET">
                    <div class="input-group" mb-3>
                      <input type="text" name="asset_ref" required value="<?php if(isset($_GET['asset_ref'])) {echo $_GET['asset_ref'];}?>" class="form-control" placeholder="Search for Asset">
                      <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card" mt-3>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                  <th>Asset Code</th>  
                  <th>Asset Name</th>
                    <th>Request No</th>
                    <th>Maintenanace Date</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  require 'dbconn.php';
                  $filterby=$_GET['asset_ref'];
                  $query="SELECT * FROM mntrequests WHERE CONCAT(assetcode,assetname) LIKE '%$filterby%' ";
                  $result=mysqli_query($conn, $query);

                  if(mysqli_num_rows($result) > 0)
                  {
                    foreach($result as $row)
                    {
                      ?>
                      <tr>
                        <td><?=$row['assetcode']?></td>
                        <td><?=$row['assetname']?></td>
                        <td><?=$row['mntreqid']?></td>
                        <td><?=$row['mntreqtime']?></td>
                      </tr>

                      <?php
                    }

                  }
                  else
                  {
                    ?>
                    <tr>
                      <td colspan="4">No Data Found!</td>
                    </tr>
                    <?php

                  }
                  ?>

                  <tr>
                    <td></td>
                  </tr>
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