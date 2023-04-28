

<?php 
//require 'dbconn.php';
session_start();
?>


<!doctype html>
<html lang="en">
  <head>

  <?php 
    include 'navbar.php';
 ?>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PMS</title>
  </head>


  <body>
    <h3>Performance Tracking Board</h3>
    <br>
<!-- <h5>Maintenanace Figures</h5> -->



<!-- First Row of Cards-->
    <div class="row">

        <div class="col-sm-3">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Work Requests</div>
                <div class="card-body">
                    
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  -->
                    <?php 
                    require 'dbconn.php';

                   // $query1="SELECT TABLE_ROWS FROM information_schema.tables
                    //WHERE TABLE_SCHEMA = 'pms' 
                    //AND TABLE_NAME = 'mntrequests' ";

                    $query1="SELECT mntreqid FROM mntrequests";

                    $result1 = mysqli_query($conn, $query1);
                    $row1 = mysqli_num_rows($result1);
                    echo '<h1>'.$row1.'</h1>';
                    ?>
                </div>
                </div>
        </div>


        <div class="col-sm-3">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Todo</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Secondary card title</h5>
                    //<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <?php 
                    require 'dbconn.php';

                   //$query1="SELECT TABLE_ROWS FROM information_schema.tables
                    //WHERE TABLE_SCHEMA = 'pms' 
                    //AND TABLE_NAME = 'mntrequests' ";

                    $query2="SELECT mntreqid FROM mntrequests WHERE req_state='ToDo' ";

                    $result2 = mysqli_query($conn, $query2);
                    $row2 = mysqli_num_rows($result2);
                    echo '<h1>'.$row2.'</h1>';
                    ?>
                </div>
                </div>
        </div>


        <div class="col-sm-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Doing</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  -->
                    <?php 
                    require 'dbconn.php';

                   //$query1="SELECT TABLE_ROWS FROM information_schema.tables
                    //WHERE TABLE_SCHEMA = 'pms' 
                    //AND TABLE_NAME = 'mntrequests' ";

                    $query3="SELECT mntreqid FROM mntrequests WHERE req_state='Doing' ";

                    $result3 = mysqli_query($conn, $query3);
                    $row3 = mysqli_num_rows($result3);
                    echo '<h1>'.$row3.'</h1>';
                    ?>

                </div>
                </div>
        </div>


        <div class="col-sm-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Done</div>
            <div class="card-body">
                <!-- <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <?php 
                    require 'dbconn.php';

                   //$query1="SELECT TABLE_ROWS FROM information_schema.tables
                    //WHERE TABLE_SCHEMA = 'pms' 
                    //AND TABLE_NAME = 'mntrequests' ";

                    $query4="SELECT mntreqid FROM mntrequests WHERE req_state='Done' ";

                    $result4 = mysqli_query($conn, $query4);
                    $row4 = mysqli_num_rows($result4);
                    echo '<h1>'.$row4.'</h1>';
                    ?>
            </div>
            </div>
        </div>
</div>



<!-- Second Row of Cards-->
<div class="row">

<div class="col-sm-3">
<div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Work Orders</div>
  <div class="card-body">
    <!-- <h5 class="card-title">Warning card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  -->

    <?php 
                    require 'dbconn.php';
                    $query5="SELECT wo_id FROM mntorders ORDER BY wo_id  ";
                    $result5 = mysqli_query($conn, $query5);
                    $row5 = mysqli_num_rows($result5);
                    echo '<h1>'.$row5.'</h1>';
      ?>

  </div>
</div>
</div>


<div class="col-sm-3">
<div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Todo</div>
  <div class="card-body">
    <!-- <h5 class="card-title">Info card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  -->
    <?php 
                    require 'dbconn.php';
                    $query6="SELECT wo_id FROM mntorders WHERE wo_state='Todo' ";
                    $result6 = mysqli_query($conn, $query6);
                    $row6 = mysqli_num_rows($result6);
                    echo '<h1>'.$row6.'</h1>';
      ?>
  </div>
</div>
</div>


<div class="col-sm-3">
<div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Doing</div>
  <div class="card-body">
    <!-- <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  -->
    <?php 
                    require 'dbconn.php';
                    $query7="SELECT wo_id FROM mntorders WHERE wo_state='Doing' ";
                    $result7 = mysqli_query($conn, $query7);
                    $row7 = mysqli_num_rows($result7);
                    echo '<h1>'.$row7.'</h1>';
      ?>
  </div>
</div>
</div>


<div class="col-sm-3">
<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Done</div>
  <div class="card-body">
   <!-- <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <?php 
                    require 'dbconn.php';
                    $query8="SELECT wo_id FROM mntorders WHERE wo_state='Done' ";
                    $result8 = mysqli_query($conn, $query8);
                    $row8 = mysqli_num_rows($result8);
                    echo '<h1>'.$row8.'</h1>';
      ?>
  </div>
</div>
</div>
</div>





<!-- Third Row of Cards-->
<div class="row">

<div class="col-sm-3">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success">Assets Register</div>
  <div class="card-body text-success">
  <?php 
                    require 'dbconn.php';
                    $query9="SELECT asset_id FROM assets";
                    $result9 = mysqli_query($conn, $query9);
                    $row9 = mysqli_num_rows($result9);
                    echo '<h1>'.$row9.'</h1>';
      ?>
    <!-- <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>
</div>


<div class="col-sm-3">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success">Allocated</div>
  <div class="card-body text-success">
    <!--<h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <?php 
                    require 'dbconn.php';
                    $query10="SELECT wo_id FROM mntorders WHERE wo_state='Done' ";
                    $result10 = mysqli_query($conn, $query10);
                    $row10 = mysqli_num_rows($result10);
                    echo '<h1>'.$row10.'</h1>';
      ?>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>
</div>



<div class="col-sm-3">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success">Staff Custody</div>
  <div class="card-body text-success">
    <!-- <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <?php 
                    require 'dbconn.php';
                    $query11="SELECT wo_id FROM mntorders WHERE wo_state='Done' ";
                    $result11 = mysqli_query($conn, $query11);
                    $row11 = mysqli_num_rows($result11);
                    echo '<h1>'.$row11.'</h1>';
      ?>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>
</div>



<div class="col-sm-3">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success">Deprecated</div>
  <div class="card-body text-success">
   <!-- <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <?php 
                    require 'dbconn.php';
                    $query12="SELECT wo_id FROM mntorders WHERE wo_state='Done' ";
                    $result12 = mysqli_query($conn, $query12);
                    $row12 = mysqli_num_rows($result12);
                    echo '<h1>'.$row12.'</h1>';
      ?>
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>
</div>




</div>



   <!-- <button type="button" class="btn btn-primary">Primary <span class="badge">7</span></button>
    <h1>Example <span class="label label-default">New</span></h1>
    <h2>Example <span class="label label-default">New</span></h2>
    <span class="label label-default">Default Label</span>
    <span class="label label-primary">Primary Label</span>
    <span class="label label-success">Success Label</span>
    <span class="label label-info">Info Label</span>
    <span class="label label-warning">Warning Label</span>
    <span class="label label-danger">Danger Label</span>  -->


   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Jquery CDN Link-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    
</body>

</html>