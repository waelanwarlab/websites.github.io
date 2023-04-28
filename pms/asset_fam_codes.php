
<?php 
session_start();
require 'dbconn.php';

if(isset($_POST['update_family']))
    {
        $famid = mysqli_real_escape_string($conn, $_POST['famid']);
        $fcode = mysqli_real_escape_string($conn, $_POST['fcode']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $fnamear = mysqli_real_escape_string($conn, $_POST['fnamear']);
        $fdescr = mysqli_real_escape_string($conn, $_POST['fdescr']);
        $createdby = mysqli_real_escape_string($conn, $_POST['createdby']);

        $query="UPDATE assets_family set familycode='$fcode', familyname='$fname', familynamear='$fnamear', familydescription='$fdescr', createdby='$createdby' 
        WHERE familyid='$famid'";
        $result=mysqli_query($conn, $query);

        if($result)
    {
        $_SESSION['message']="Update Asset Family is Successfully";
        header("Location: asset_fam_dis.php");
        //exit(0);
    }
    else
    {
        $_SESSION['message']="Error! Not Updated!";
        header("Location: asset_fam_dis.php");
        //exit(0);
    }

    }





if(isset($_POST['save_family']))
{
    $fcode = mysqli_real_escape_string($conn, $_POST['fcode']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $fnamear = mysqli_real_escape_string($conn, $_POST['fnamear']);
    $fdescr = mysqli_real_escape_string($conn, $_POST['fdescr']);
    //$createdts = mysqli_real_escape_string($conn,$_POST['createdts']);
    $createdby = mysqli_real_escape_string($conn, $_POST['createdby']);

    $query="INSERT INTO assets_family SET familycode='$fcode', familyname='$fname', familynamear='$fnamear', familydescription='$fdescr', createdby='$createdby' ";
          
    $result=mysqli_query($conn, $query);

    if($result)
    {
        $_SESSION['message']="New Asset Family is Created Successfully";
        header("Location: asset_fam_ins.php");
        //exit(0);
    }
    else
    {
        $_SESSION['message']="Error! Not Saved!";
        header("Location: asset_fam_ins.php");
        //exit(0);
    }
}

?>
