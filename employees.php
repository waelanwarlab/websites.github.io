
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
    <title>PMS - Employees List</title>
  </head>


  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4> Registered Employees List
                                <a href="" class="btn btn-danger float-end">Add Employee</a>
                            </h4>
                        </div>


                        <div class="card-body">
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Department</th>
                                        <th>Job</th>
                                        <th>Hiring Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                            $query="SELECT * FROM employees";
                            $result=mysqli_query($conn,$query);
                                if(mysqli_num_rows($result)>0)
                                {
                                    foreach($result as $row )
                                    {
                                        ?>
                                            <tr>
                                                <td><?=$row['emp_id']; ?></td>
                                                <td><?=$row['emp_name']; ?></td>
                                                <td><?=$row['emp_dept']; ?></td>
                                                <td><?=$row['emp_job']; ?></td>
                                                <td><?=$row['emp_hiredate']; ?></td>
                                            </tr>
                                        <?php
                                    }

                                }
                                else
                                {
                                    echo "No Data Found!";
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

