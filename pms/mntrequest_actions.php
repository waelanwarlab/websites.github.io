
<?php 
require 'dbconn.php';
session_start();

if(isset($_POST['submit_mntrequest']))
{
    $reqsection = mysqli_real_escape_string($conn,$_POST['sectionname']);
    $assetname = mysqli_real_escape_string($conn,$_POST['assetname']);
    $requesttype = mysqli_real_escape_string($conn, $_POST['reqtype']);
    $problemdescr = mysqli_real_escape_string($conn,$_POST['problemdescr']);
    $importancelevel = mysqli_real_escape_string($conn, $_POST['importancelevel']);
    //
    $deptname=$_SESSION['dept'];
    $requester=$_SESSION['username'];
    //

    $query = "insert into mntrequests set reqsection='$reqsection', assetname='$assetname', requesttype='$requesttype', problemdescr='$problemdescr', importancelevel='$importancelevel', reqdept='$deptname', mntrequestername='$requester' ";
    $result = mysqli_query($conn, $query);

    if($result)
        {
        $_SESSION['message'] ="your Request is Added Successfully !";
        header("Location: mntrequest_display.php");
        exit(0);
        }
    else
        {
        $_SESSION['message']="Error ! No Request Added !";
        header("Location: mntrequest_display.php");
        exit(0);

        }
}
?>