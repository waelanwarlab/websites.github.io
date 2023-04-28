
<?php 
session_start();
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
                    <h4>Assets Family - Add New
                        <a href="asset_fam_dis.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                    </div>

                    <div class="card-body">
                        <form action="asset_fam_codes.php" method="POST">
                            <div class="mb-3">
                                <label>Family Code</label>
                                <input type="text" name="fcode" class="form-control">                                
                            </div>
                            
                            <div class="mb-3">
                                <label>Family Name </label>
                                <input type="text" name="fname" class="form-control">                                
                            </div>

                            <div class="mb-3">
                                <label>Family Name - ar</label>
                                <input type="text" name="fnamear" class="form-control">                                
                            </div>

                            <div class="mb-3">
                                <label>Family Description</label>
                                <input type="text" name="fdescr" class="form-control">                                
                            </div>
                        
                            <div class="mb-3">
                                <label>Created by</label>
                                <input type="text" name="createdby" class="form-control">                                
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_family" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>