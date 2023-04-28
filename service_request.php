

<?php 
    session_start();
    date_default_timezone_set('Africa/Cairo');
    
    //Fill-dropdown "Sections list" from Database
    $conn2 = mysqli_connect("localhost","root","","pms");
    $query2 ="SELECT section_name from assets_sections order by section_code ASC";
    $result2 = mysqli_query($conn2, $query2);
    //Service types
    $conn3 = mysqli_connect("localhost","root","","pms");
    $query3 = "SELECT service_name from services order by service_name ASC";
    $result3 = mysqli_query($conn3, $query3);
    //Service-For
    $conn4 = mysqli_connect("localhost","root","","pms");
    $query4 = "SELECT block_name from blocks order by block_name ASC";
    $result4 = mysqli_query($conn4, $query4);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PMS</title>
  </head>

    <?php 
    include 'navbar.php';
    ?>



  <body>
    <div class="container-fluid">
<?php include('message.php'); ?>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Service Request Form</h3>
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <div class="card-body">
                            <form action="service_request_actions.php" method="POST">

                                    <div class="mb-3">                         
                                        <label>Service Type</label>

                                        <select name="reqtype" class="form-control">

                                            <?php 
                                                while($row = mysqli_fetch_array($result3))
                                                    {
                                                        ?>
                                                        <option value="<?php echo $row['service_name']; ?>"> <?php echo $row['service_name']; ?> </option>
                                                        <?php
                                                    }
                                            ?>
                                        </select>
                                     </div>

                                     <div class="mb-3">                         
                                        <label>Service For</label>

                                        <select name="servicefor" class="form-control">

                                            <?php 
                                                while($row = mysqli_fetch_array($result4))
                                                    {
                                                        ?>
                                                        <option value="<?php echo $row['block_name']; ?>"> <?php echo $row['block_name']; ?> </option>
                                                        <?php
                                                    }
                                            ?>
                                        </select>
                                     </div>




                                    <div class="mb-3">                         
                                        <label>Section</label>

                                        <select name="sectionname" class="form-control">

                                            <?php 
                                                while($row = mysqli_fetch_array($result2))
                                                    {
                                                        ?>
                                                        <option value="<?php echo $row['section_name']; ?>"> <?php echo $row['section_name']; ?> </option>
                                                        <?php
                                                    }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label>Service Description</label>
                                        <input type="text" name="problemdescr" class="form-control">                                
                                    </div>

                                    <div class="form-control">
                                        <label>Importance Level :</label><br>
                                        <input type="radio" name="importancelevel" value="Normal"/>&nbsp; Normal &nbsp;
                                        <input type="radio" name="importancelevel" value="High"/>&nbsp; High &nbsp;
                                        <input type="radio" name="importancelevel" value="Critical"/>&nbsp; Critical &nbsp;
                                        <input type="radio" name="importancelevel" value="Emergency"/>&nbsp; Emergency
                                    </div>
                                    <br>

                                    <div class="mb-3">
                                        <button type="submit" name="submit_srvcrequest" class="btn btn-primary">Submit Service Request</button>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Requester Info.</h3>
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                        <label>Service Request No.</label>
                                        <input type="text" name="reqno" class="form-control" readonly>                                
                                    </div>

                                    <div class="mb-3">
                                        <label>Requester</label>
                                        <input type="text" name="requester" value="<?=$_SESSION['username'] ?>" class="form-control" readonly>                                
                                    </div>

                                    <div class="mb-3">
                                        <label>Department</label>
                                        <input type="text" name="dept" class="form-control" value="<?=$_SESSION['dept'];?>" readonly>                                
                                    </div>

                                    <div class="mb-3">
                                        <label>Request time</label>
                                        <input type="text" name="reqdate" class="form-control" value="<?=date("d/m/Y h:i:s a", time());  ?>" readonly>                                
                                    </div>

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

