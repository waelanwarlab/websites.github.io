
<?php 
// Add a Service ...
require 'dbconn.php';
session_start();

if(isset($_POST['save_service']))
{
    $srvcname=$_POST['srvcname'];
    $srvcdescr=$_POST['srvcdescr'];
    //
    $query="INSERT INTO services set service_name='$srvcname', service_descr='$srvcdescr'";
    $result=mysqli_query($conn, $query);

        if($result)
        {
            $_SESSION['message']="New Service is Added Successfully!";
            header("Location: services.php");
            exit(0);
        }
        else
        $_SESSION['message']="Error! Nothing Added";
        header("Location: services.php");
        exit(0);

}
?>