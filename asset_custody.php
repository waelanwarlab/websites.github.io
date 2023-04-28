

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

    <?php 
    include 'navbar.php';
    ?>
    <title>Staff Custody Report</title>
  </head>


  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4> Employee Custody
                            <a href="" class=""></a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <form action="" method="GET">

                            <div class="mb-3">
                                <label>Employee ID</label>
                                <input type="text" name="empid" value="<?php if(isset($_GET['empid'])) {echo $_GET['empid'];}?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>

                        </form>
        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Employee Name</th>    
                                    <th>Asset Name</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Asset Serial</th>
                                    <th>Assign Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (isset($_GET['search']))
                            {
                                $empid=$_GET['empid'];
                                $query="SELECT employees.emp_id, employees.emp_name, 
                                                assets_assignmnet.asset_name, assets_assignments.asset_brand, 
                                                assets_assignment.asset_model, assets_assignment.asset_serial
                                        FROM    employees, assets_assignment
                                        WHERE   employees.emp_id=$empid AND assets_assignment.emp_id = $empid";

                                $result=mysqli_query($conn, $query);
                                if(mysqli_num_rows($result) > 0 )
                                {
                                    foreach($result as $row)
                                    {
                                        ?>
                                            <tr>

                                            <td><?=$row['employees.emp_name']; ?></td>
                                            <td><?$row['assets_assignmnet.asset_name']; ?></td>
                                            <td><?=$row['assets_assignments.asset_brand']; ?></td>
                                            <td><?$row['assets_assignment.asset_model']; ?></td>
                                            <td><?$row['assets_assignment.asset_serial']; ?></td>

                                            </tr>

                                        <?php
                                    }

                                }
                                else
                                {
                                    echo "No Equipments are assigned as a Custody On This Employee";
                                }
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