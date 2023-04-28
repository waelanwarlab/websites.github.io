

<?php 
    session_start();
    require_once 'dbconn.php';

    if(isset($_POST['asset_specs_save']))
    {
        $target_dir = "assets/imgs/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $assetcode= mysqli_real_escape_string($conn, $_POST['assetcode']);
        $assetname= mysqli_real_escape_string($conn, $_POST['assetname']);
        $devicename= mysqli_real_escape_string($conn, $_POST['devicename']);
        $assettype= mysqli_real_escape_string($conn, $_POST['assettype']);
        $brand = mysqli_real_escape_string($conn, $_POST['brand']);
        $model = mysqli_real_escape_string($conn,$_POST['model']);
        $cpu= mysqli_real_escape_string($conn,$_POST['cpu']);
        $memory= mysqli_real_escape_string($conn, $_POST['memory']);
        $hdd= mysqli_real_escape_string($conn,$_POST['hdd']);
        $cat= mysqli_real_escape_string($conn, $_POST['category']);
        $subcat = mysqli_real_escape_string($conn, $_POST['subcategory']);
        $networktype =mysqli_real_escape_string($conn,$_POST['networktype']);
        $serial= mysqli_real_escape_string($conn,$_POST['serial']);
        $ip= mysqli_real_escape_string($conn, $_POST['ipaddress']);
        $mac= mysqli_real_escape_string($conn, $_POST['macaddress']);
        $networktype= mysqli_real_escape_string($conn, $_POST['networktype']);
        $assigndate= date('Y-m-d', strtotime($_POST['assigndate']));
        $assignedto= mysqli_real_escape_string($conn, $_POST['assignedto']);      
        

        $query="INSERT INTO assets_specs SET asset_code='$assetcode', asset_name='$assetname', 
        device_name='$devicename', brand='$brand', model='$model', cpu='$cpu', memory='$memory', 
        hdd='$hdd', asset_type='$assettype', asset_category='$cat', network_type='$networktype',
        asset_subcategory='$subcat', network_address='$ip', mac_address='$mac', 
        asset_serial='$serial', assigned_to='$assignedto', assign_date='$assigndate', asset_img='$target_file' ";

        $result=mysqli_query($conn,$query);

                if($result)
                {
                            // Check if image file is a actual image or fake image
                            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                            if($check !== false) 
                                {
                                    echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                } 
                                else 
                                {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                }

                                // Check if file already exists
                            if (file_exists($target_file)) 
                                {
                                        echo "Sorry, file already exists.";
                                        $uploadOk = 0;
                                }

                                // Check file size
                            if ($_FILES["fileToUpload"]["size"] > 500000) 
                                {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                                }

                                // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) 
                                {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                                }

                                // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) 
                                {
                                echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                                } 
                                else 
                                {
                                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
                                        {
                                            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                        } 
                                         else 
                                        {
                                            echo "Sorry, there was an error uploading your file.";
                                }}                        
                            // End-of- File-Upload Code

                            
                        $_SESSION['message']="New Asset Specs. Saved Successfully !";
                        header("Location: asset_specs.php");

                        error_reporting(0);
                        exit(0);      
                }
                else
                {
                    error_reporting(0);    
                    $_SESSION['message']="Error! No Asset Specs Added!";
                    header("Location: asset_specs.php");
                    exit(0);
                }

    }
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
    

    <?php 
    include 'navbar.php';
    ?>

    <script type="text/javascript">
            $(document).ready(function(){
                $("#category-list").change(function(){
                    var category_code=$(this).val();
                    $.ajax({
                        url: "asset_specs_actions.php", 
                        method: "POST",
                        data:{category: category_code},
                        success:function(data){
                            $("#subcategory-list").html(data);
                        }
                    });

                });
            });
    </script>




    <title>Hello, world!</title>
  </head>


  <body>
    
  <div class="container mt-3">

     <?php include('message.php'); ?>

    <h4>Hardware Equipments Specifications
        <a href="assets_display.php" class="btn btn-danger float-end">Assets Display</a>
    </h4>


  <form action="" method="POST" class="row g-3" enctype="multipart/form-data">
        <div class="col-md-3">
            <label for="" class="form-label">Asset Code</label>
            <input type="text" name="assetcode" class="form-control" id="">
        </div>

        <div class="col-md-3">
            <label for="" class="form-label">Asset Name</label>
            <input type="text" name="assetname" class="form-control" id="">
        </div>


        <div class="col-md-3">
            <label for="" class="form-label">Device Name</label>
            <input type="text" name="devicename" class="form-control" id="">
        </div>

        <div class="col-md-3">
            <label for="" class="form-label">Serial #</label>
            <input type="text" name="serial" class="form-control" id="">
        </div>

        <div class="col-md-4">
            <label for="" class="form-label">Category</label>
            <select id="category-list" name="category" class="form-select">
            <option selected>Choose...</option>
                            <?php
                                $query2="SELECT * FROM specs_category";
                                $result2=mysqli_query($conn,$query2);

                                while($row=mysqli_fetch_array($result2))
                                {
                                    echo '<option value="'.$row['specs_category'].'">'.$row['specs_category'].'</option>';
                                }
                            ?>
            </select>
        </div>

        <div class="col-md-4">
            <label for="" class="form-label">SubCategory</label>
            <select id="subcategory-list" name="subcategory" class="form-select">
            <option selected>Choose...</option>
           
            </select>
        </div>

        <div class="col-md-4">
            <label for="" class="form-label">Type</label>
            <input type="text" name="assettype" class="form-control" id="">
        </div>

        <div class="col-md-3">
            <label for="" class="form-label">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand">
        </div>

        <div class="col-3">
            <label for="" class="form-label">Model</label>
            <input type="text" name="model" class="form-control" id="model" placeholder="Model">
        </div>

        <div class="col-md-2">
            <label for="" class="form-label">CPU</label>
            <input type="text" name="cpu" class="form-control" id="cpu">
        </div>

        <div class="col-md-2">
            <label for="" class="form-label">HDD</label>
            <select id="" name="hdd" class="form-select">
            <option selected>Choose...</option>
            <option>HDD 500GB</option>
            <option>HDD 1TB</option>
            <option>SSD 128GB</option>
            <option>SSD 500GB</option>
            <option>SSD iTB</option>
            </select>
        </div>


        <div class="col-md-2">
            <label for="" class="form-label">Memory</label>
            <select id="" name="memory" class="form-select">
            <option selected>Choose...</option>
            <option>DDR2</option>
            <option>DDR3</option>
            <option>DDR4</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">OS</label>
            <select id="" name="os" class="form-select">
            <option selected>Choose...</option>
            <option>Windows 11</option>
            <option>Windows 10</option>
            <option>Windows 8</option>
            <option>Windows 7</option>
            <option>Windows Server 2012</option>
            <option>Windows Server 2016</option>
            <option>Linux</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">Joined Domain</label>
            <select id="" name="networktype" class="form-select">
            <option selected>Choose...</option>
            <option>Workgroup</option>
            <option>Domain</option>
            </select>
        </div>


        <div class="col-md-3">
            <label for="inputCity" class="form-label">IP Address</label>
            <input type="text" name="ipaddress" class="form-control" id="">
        </div>

        <div class="col-md-3">
            <label for="inputCity" class="form-label">MAC-Address</label>
            <input type="text" name="macaddress" class="form-control" id="">
        </div>


        <div class="col-md-2">
            <label for="inputZip" class="form-label">Assigned to</label>
            <input type="text" name="assignedto" class="form-control" id="">
        </div>

        <div class="col-md-2">
            <label class="form-label">Assigned Date</label>
            <input type="date" name="assigndate" class="form-control" id="">
        </div>


        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="">
            <label class="form-check-label" for="gridCheck">
                QR Code
            </label>
            </div>
        </div>

        <div class="form-group">
            <div class="custom-file">
                <label class="custom-file-label">Choose Image</label>
                <input type="file" name="fileToUpload" class="custom-file-input" id="fileToUpload" >
                
            </div>
        </div>

        <div class="form-group">
            <button type="submit" name="asset_specs_save" class="btn btn-primary">Register</button>
        </div>
</form>

   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    

     <!-- SELECT 2 plug-in -->
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
</body>

</html>
