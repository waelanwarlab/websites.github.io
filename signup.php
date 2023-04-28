

<?php 
    $success=0;
    $user=0;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'dbconn.php';

        $username=$_POST['username'];
        $password=$_POST['password'];


        $query="SELECT * FROM signup WHERE username='$username'";
        $result=mysqli_query($conn, $query);

        if($count=mysqli_num_rows($result) > 0)
        {
            //echo "Error ! User is Already Registered!";
            $user=1;
        }
        else
        {
            $query="insert into signup set username='$username', password='$password'";
            $result = mysqli_query($conn, $query);

            if($result)
                 {
                    //echo "New User is Created Successfully";
                    $success=1;
                    header('Location: login.php');
                }
                 else
                {
                    die(mysqli_error($conn));

                }
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PMS - Signup</title>
  </head>
  <body>

        <?php 
            if($user)
            {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops! </strong> User Already Exist!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>

<?php 
            if($success)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Ok ! </strong> New User is signedup Successfully!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>


        <h4 class="text-center">Signup Page</h4>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                        <form action="signup.php" method="POST">
                                <div class="mb-3">
                                    <label for="" class="form-label">User Name</label>
                                    <input type="text" class="form-control" name="username" >
                                    <div id="unnotice" class="form-text">User Name is not "a Case Sensitive".</div>
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>


                                <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>