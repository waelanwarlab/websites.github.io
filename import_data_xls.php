
<?php 
  require_once 'dbconn.php';
  $message='';

  if($_POST['upload'])
  {
      //check if file is selected by user
      if($_FILES['assets_file']['name'])
      {
        $filename=explode(".",$_FILES['assets_file']['name']);
          if(end($filename) =="csv")
            {
                $handle = fopen($_FILES['assets_file']['tmp_name'],"r");
                while($data = fgetcsv($handle))
                {
                  //read data cell-by-cell from csv file and strore in variables
                  $asset_code=mysqli_real_escape_string($conn,$data[0]);
                  $asset_section=mysqli_real_escape_string($conn,$data[1]);
                  $asset_name=mysqli_real_escape_string($conn,$data[2]);
                  $asset_descr=mysqli_real_escape_string($conn,$data[3]);
                  $brand=mysqli_real_escape_string($conn,$data[4]);
                  $model=Mysqli_real_escape_string($conn,$data[5]);
                  //$serial=mysqli_real_escape_string($conn, data[6]);
                  //$delivery_date=mysqli_real_escape_string($conn,data[7]);
                  $registered_by=mysqli_real_escape_string($conn,$data[8]);
                  //$regestered_date=mysqli_real_escape_string($conn,$data[9]);

                  //Now, Insert Variables in mysql database
                  $query="INSERT INTO assets SET asset_code='$asset_code', asset_section='$asset_section',
                                      asset_name='$asset_name', asset_descr='$asset_descr', brand='$brand', model='$model',
                                      registered_by='$registered_by'";
                  mysqli_query($conn, $query);
                }

                fclose($handle);
                header("Location: import_data_xls.php");
            }
            else
            {
              $message='<label class="text-danger">Please Select CSV File Only! </label>';
            }

      }
      else
      {
        $message='<label class="text-danger">Please Select File First! </label>';
      }
  }
    //if insertion sucess, show message
    if(isset($_GET['insertion']))
    {
      $message='<label class="text-success">Data Imported Successfully!</label>';
    }

    $query2="SELECT * from assets ORDER BY asset_id DESC";
    $result2=mysqli_query($conn, $query2);    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include 'navbar.php'; ?>
  </head>


  <body>
      <div class="container">
          <h2 align="center" >Import Data from .CSV File 
          </a></h2>
          <br />
            <form action="" method="POST" enctype="multipart/form-data">
                  <p><label>Select File (csv Only)</label>
                  <input type="file" name="assets_file">
                  </p>
                  <input type="submit" name="upload" class="btn btn-danger" value="upload" />
            </form>
          <br />

          <!--Show success message-->
          <?php echo $message; ?>


          <h3 align="center">Assets Data</h3>
          
          

        <div class="table-responsive">
              <table class="table table-borded table-stripped">
                <tr>
                    <th>Asset Code</th>
                    <th>Section Code</th>
                    <th>Asset Name</th>
                    <th>Asset Description</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Serial</th>
                    <th>Purchase Date</th>
                    <th>Recorded by</th>
                    <th>Recorded Date</th>
                </tr>
                <!-- Show Data-->
                <?php 
                    while($row=mysqli_fetch_array($result2))
                    {
                        echo '
                        <tr>
                          <td>'.$row["asset_code"].'</td>
                          <td>'.$row["asset_section"].'</td>
                          <td>'.$row["asset_name"].'</td>
                          <td>'.$row["asset_descr"].'</td>
                          <td>'.$row["brand"].'</td>
                          <td>'.$row["model"].'</td>
                          <td>'.$row["serial"].'</td>
                          <td>'.$row["delivery_date"].'</td>
                          <td>'.$row["registered_by"].'</td>
                          <td>'.$row["registered_date"].'</td>
                        </tr>
                        ';
                    }
                ?>
            </table>
          </div>
      </div>
   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Jquery CDN Link-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    
</body>

</html>