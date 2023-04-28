

<?php 
require 'dbconn.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Local JQuery Library -->
    <script src="jquery.main.js" type="text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <?php 
    include 'navbar.php';
    ?>

    <title>PMS - Assignemnt</title>

    <script type="text/javascript">
            $(document).ready(function(){
                $("#area-list").change(function(){
                    var area_code=$(this).val();
                    $.ajax({
                        url: "asset_assignment_actions.php", 
                        method: "POST",
                        data:{areacode: area_code},
                        success:function(data){
                            $("#block-list").html(data);
                        }
                    });

                });
            });
    </script>

  </head>


  <body>
    <h4>Asset Assignemt Form</h4>
    <div class="container mt-3">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Information
                            <a href="" class="btn btn-danger float-end">Goto Staff</a>
                        </h4>
                    </div>

                    <div class="card-body">
                    
                        <form action="" method="GET">

                            <!-- Employee Information-->
                            <div class="mb-3">
                                    <label>Employee Code</label>
                                    <input type="text" name="empcode" value="<?php if(isset($_GET['empcode'])) { echo $_GET['empcode']; } ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>


                        <div class="mb-3">

                                    <?php 
                                        if (isset($_GET['empcode']))
                                        {
                                            $empcode=$_GET['empcode'];
                                            $query2="select * from employees where emp_id='$empcode'";
                                            $result2=mysqli_query($conn, $query2);

                                            if(mysqli_num_rows($result2)>0)
                                            {
                                                foreach($result2 as $row)
                                                {
                                                    ?>

                                                    <label>Employee Name</label>
                                                    <input type="text" name="empname" value="<?=$row['emp_name']; ?>" class="form-control" readonly>

                                                    <label>Department</label>
                                                    <input type="text" name="deptname" value="<?=$row['emp_dept']; ?>" class="form-control" readonly>

                                                    <label>Section</label>
                                                    <input type="text" name="sectionname" value="<?=$row['emp_job']; ?>" class="form-control" readonly>

                                                    <?php
                                                }

                                            }
                                            else
                                            {
                                                echo "No Data Found!";
                                            }
                                        }
                                    ?>      
                        </div>
                        
                    </div>
                </div>
            </div>



                <!-- Asset Information-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4> Assets Information
                            <a href="" class="btn btn-danger float-end">Goto Assets</a>
                        </h4>

                    </div>

                    <div class="card-body">

                    
                        <form action="" method="POST">

                        <div class="mb-3">
                            <label>Area </label>
                            <select class="form-control" name="area" id="area-list">
                                <option>SELECT (Area)</option>
                                <?php
                                $query3="SELECT * FROM areas";
                                $result3=mysqli_query($conn,$query3);

                                while($row=mysqli_fetch_array($result3))
                                {
                                    echo '<option value="'.$row['area_code'].'">'.$row['area_name'].'</option>';
                                }
                            ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Block </label>
                            <select class="form-control" name="block" id="block-list">

                            </select>
                        </div>



                            <div class="mb-3">
                                    <label>Asset Name</label>
                                    <input type="text" name="assetname" class="form-control">
                                    <button type="submit" class="btn btn-primary">Asset Details</button><br>
                                    <label>Brand</label>
                                    <input type="text" name="brand" class="form-control" readonly>
                                    <label>Model</label>
                                    <input type="text" name="model" class="form-control" readonly>
                                    <label>Serial #</label>
                                    <input type="text" name="serial" class="form-control" readonly>
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control" readonly>
                            </div>

                            <div class="mb-3">
                            <button type="submit" name="btn_assign_asset" class="btn btn-primary">Assign to Employee</button><br>
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
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.js" ></script> -->

    <!-- SELECT 2 plug-in -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    

    
    
</body>

</html>