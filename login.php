

<?php 
   $log_success=0;
   $log_fail=0;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'dbconn.php';

        $username=$_POST['username'];
        $role=$_POST['role'];
        $password=$_POST['password'];
        $dept='';


        $query="SELECT * FROM signup WHERE username='$username' AND password='$password' ";
        $result=mysqli_query($conn, $query);
        
        $row=mysqli_fetch_array($result); // store result in array variable 

        $num=mysqli_num_rows($result);
            if($num > 0)
                {
                    //echo "login Successed";
                    $log_success=1;
                    session_start();
                    $_SESSION['username']=$username;
                    $_SESSION['dept'] = $row['dept_fk'];
                    //print_r($row['dept_fk']);
                    //print_r($_SESSION['dept']);
                   // $_SESSION['deptcode']=$result['dept_code_fk'];

                    //
                    //get user's Deprtment and store in session
                    

                    //
                   // header('Location: mntrequest_display.php');
                   header("Location: dashboard.php");
                }
                else
                {
                    //echo "Invalide Credentials !";
                    $log_fail=1;
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

    <title>PMS - Login</title>
  </head>
  <body>
  <?php 
            if($log_success)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Welcome ! </strong> Log-in Successful!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>

<?php 
            if($log_fail)
            {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops ! </strong> Invalid User Name/Password or both!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>




        
        <div class="container mt-5">
            <h4 class="text-center">Login to PMS</h4>
            <div class="row justify-content-center">
                <div class="col-md-4">
                        <form action="login.php" method="POST">
                            <br>

                                <div class="form-group lead">
                                    <label for="" class="form-label">Login As :</label>
                                    <input type="radio" name="role" value="user" class="custom-radio" required>&nbsp;User
                                    <input type="radio" name="role" value="user" class="custom-radio" required>&nbsp;Superuser
                                    <input type="radio" name="role" value="user" class="custom-radio" required>&nbsp;Sysadmin
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="" class="form-label">User Name</label>
                                    <input type="text" class="form-control form-control-lg" name="username" required>
                                    <div id="unnotice" class="form-text">User Name is not "Case Sensitive"</div>
                                </div>


                                <div class="form-group">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password" required>
                                </div>

                                

                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                        </form>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>