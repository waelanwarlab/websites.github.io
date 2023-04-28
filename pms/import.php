

<?php 
include 'dbconn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>


  <body>
  <h2>Import Excel File into MySQL Database using PHP</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
            </div>
        </form>
        
    </div>

    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM areas";
    $result = mysqli_query($conn,$sqlSelect);
        if (! empty($result)) 
            {
                ?>
                    <table class='tutorial-table'>
                    <thead>
                        <tr>
                            <th>area_id</th>
                            <th>area_code</th>
                            <th>area_name</th>
                            <th>area_description</th>
                        </tr>
                    </thead>
                <?php
    foreach ($result as $row) 
    {
        ?>                  
                <tbody>
                <tr>
                    <td><?php  echo $row['area_id']; ?></td>
                    <td><?php  echo $row['area_code']; ?></td>
                    <td><?php  echo $row['area_name']; ?></td>
                    <td><?php  echo $row['area_description']; ?></td>
                </tr>
        <?php
    }
?>
             </tbody>
    </table>
<?php 
        } 
?>  
  



   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Jquery CDN Link-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    
</body>

</html>