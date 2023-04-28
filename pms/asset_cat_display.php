
<?php 
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

    <title>Hello, world!</title>
  </head>


  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Assets Category List
                        <a href="asset_cat_add.php" class="btn btn-primary float-end">Add Category</a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Category Code</th>
                                    <th>Category TAG</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                    <?php 
                                    $query="SELECT * from assets_category";
                                    $result=mysqli_query($conn, $query);
                                    if(mysqli_num_rows($result) > 0)
                                        {
                                            foreach($result as $row)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?= $row['categorycode']; ?></td>
                                                            <td><?= $row['Categorytag']; ?></td>
                                                            <td><?= $row['categoryname']; ?></td>
                                                            <td><?= $row['categorydescr']; ?></td>
                                                            <td>
                                                                <a href="" class="btn btn-success btn-sm">Edit</a>
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