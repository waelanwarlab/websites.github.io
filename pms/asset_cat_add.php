

<?php
    session_start();
    //Fill-dropdown family list from Database
    $conn=mysqli_connect("localhost","root","","pms");
    $query1="SELECT DISTINCT familyname from assets_family order by familyname ASC";
    $result = mysqli_query($conn, $query1);
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

           <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h4>Assets Category - Add New
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>

                        </div>

                        <div class="card-body">
                            <form action="asset_cat_actions.php" method="POST">

                            <div class="mb-3">                          
                                <label>Assets Family</label>
                                <select name="famname" class="form-control">
                                <?php 
                                    while($row = mysqli_fetch_array($result))
                                        {
                                             ?>
                                                <option value="<?php echo $row['familyname']; ?>"> <?php echo $row['familyname']; ?> </option>
                                            <?php
                                         }
                                ?>
                                </select>
                                </div>



                                <div class="mb-3">
                                <label>Category Code</label>
                                <input type="text" name="catcode" class="form-control">
                                </div>

                                <div class="mb-3">
                                <label>Category TAG</label>
                                <input type="text" name="cattag" class="form-control">
                                </div>

                                <div class="mb-3">
                                <label>Category Name</label>
                                <input type="text" name="catname" class="form-control">
                                </div>

                                <div class="mb-3">
                                <label>Category Description</label>
                                <input type="text" name="catdescr" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <button type="submit" name="save_category" class="btn btn-primary">Save</button>
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

