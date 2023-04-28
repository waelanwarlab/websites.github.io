

<?php 
session_start();
require 'dbconn.php';

if(isset($_POST['btn_savearea']))
{
    $areacode = mysqli_real_escape_string($conn, $_POST['areacode']);
    $areaname = mysqli_real_escape_string($conn, $_POST['areaname']);
    $areadescr = mysqli_real_escape_string($conn,$_POST['areadescr']);
   // $areaimg = mysqli_real_escape_string($conn,$_POST['areaimg']);
////////
    $query="INSERT INTO areas SET area_code='$areacode', area_name='$areaname', area_description='$areadescr'";
    $result = mysqli_query($conn, $query);
///////
    if($result)
    {
        $_SESSION['message'] ="New Area is Added Successfully.";
        header("Location: areas.php");
        exit(0);
    }
    else
    {
        $SESSION['message']="Error! No Area Added";
       header("Location: areas.php");
        exit(0);
    }

}



if(isset($_POST['btn_saveblock']))
{
    $area=mysqli_real_escape_string($conn, $_POST['area']);
    $blockcode = mysqli_real_escape_string($conn, $_POST['blockcode']);
    $blockname = mysqli_real_escape_string($conn, $_POST['blockname']);
    $blockdescr = mysqli_real_escape_string($conn,$_POST['blockdescr']);
   // $areaimg = mysqli_real_escape_string($conn,$_POST['areaimg']);
////////
    $query2="INSERT INTO blocks SET area_code='$area', block_code='$blockcode', block_name='$blockname', block_descr='$blockdescr'";
    $result2 = mysqli_query($conn, $query2);
///////
    if($result2)
    {
        $_SESSION['message'] ="New Block is Added Successfully.";
        header("Location: blocks.php");
        exit(0);
    }
    else
    {
        $SESSION['message']="Error! No Block Added";
       header("Location: blocks.php");
        exit(0);
    }

}
?>