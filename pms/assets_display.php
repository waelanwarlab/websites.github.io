

<?php 
// show all assets
session_start();
require 'dbconn.php';
?>



<!doctype html>
<html lang="en">


  <head>

  <?php require 'navbar.php'; ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <!-- Datatable CDN-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.css"/>
 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.js"></script>




    <title>PMS - Assets</title>
  </head>


  <body>
    <div class="container">

        <div class="col-md-6">
            <br>
            
            <select class="js-example-basic-multiple form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="deptname" onchange="filter_assets_by_dept()" multiple="multiple">
            <!--<option>Select ... </option> -->

                    <?php 
                        $query2="SELECT dept_name from departments";    
                        $result2=mysqli_query($conn, $query2);
                        while($row=mysqli_fetch_array($result2))
                        {
                            ?>
                            <option value="<?php echo $row['dept_name']; ?>"> <?php echo $row['dept_name']; ?></option>
                            <?php
                        }
                    ?>
            </select>
        </div>
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Asstets List
                            <a href="assets.php" class="btn btn-primary float-end">Add New Asset</a>
                        </h4>
                    </div>


                    <div class="card-body">
                        <table class="table" table table-bordered table-striped>
                            <thead>
                                <tr>
                                    <th>Asset Code</th>
                                    <th>Asset Name</th>
                                    <th>Asset Description</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Serial</th>
                                    <th>Delivery Date</th>
                                </tr>
                            </thead>
                            
                            
                            
                            <tbody>
                                    <?php     
                                        $query="SELECT * FROM assets ORDER BY asset_id ASC";
                                        $result=mysqli_query($conn, $query);

                                            if(mysqli_num_rows($result) > 0 )
                                            {
                                                    foreach($result as $row)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <th><?=$row['asset_code'];?></th>
                                                            <th><?=$row['asset_name'];?></th>
                                                            <th><?=$row['asset_descr'];?></th>
                                                            <th><?=$row['brand'];?></th>
                                                            <th><?=$row['model'];?></th>
                                                            <th><?=$row['serial'];?></th>
                                                            <th><?=$row['delivery_date'];?></th>
                                                            </tr>

                                                        <?php
                                                    }
                                            }
                                            else
                                            {
                                                echo "<h5>No Records Found!</h5>";
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
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>  -->
    
    <!-- SELECT 2  Plugin declaration-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() 
        {
        $('.js-example-basic-multiple').select2();
        });
    </script>

    <!-- Paging Table-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
    
</body>

</html>