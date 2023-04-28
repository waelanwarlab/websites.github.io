


<?php 
require 'dbconn.php';
session_start();

if(isset($_POST['submit_srvcrequest']))
{
    $reqsection = mysqli_real_escape_string($conn,$_POST['sectionname']);
    

    $servicefor = mysqli_real_escape_string($conn,$_POST['servicefor']);

    $requesttype = mysqli_real_escape_string($conn, $_POST['reqtype']);

    $problemdescr = mysqli_real_escape_string($conn,$_POST['problemdescr']);
    $importancelevel = mysqli_real_escape_string($conn, $_POST['importancelevel']);
    //
    $deptname=$_SESSION['dept'];
    $requester=$_SESSION['username'];
    //
    


    $query = "insert into mntrequests set reqsection='$reqsection', servicefor='$servicefor', requesttype='$requesttype', problemdescr='$problemdescr', importancelevel='$importancelevel', reqdept='$deptname', mntrequestername='$requester' ";
    $result = mysqli_query($conn, $query);

    if($result)
        {
        $_SESSION['message'] ="your Service Request is submitted Successfully !";
        header("Location: mntrequest_display.php");
        exit(0);
        }
    else
        {
        $_SESSION['message']="Error ! No Service Request Added !";
        header("Location: mntrequest_display.php");
        exit(0);

        }
}
?>