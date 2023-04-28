
<?php 
session_start();
$conn=mysqli_connect("localhost","root","","soc");

    if(isset($_POST['btnsave']))
    {
       // echo "Welcome!";
       //$fcode=$_POST['famcode'];
       $fname=$_POST['famname'];
       $fnamear=$_POST['famnamear'];
       $fdescr=$_POST['famdescr'];

       $query="INSERT INTO assets_family set family_name='$fname', family_name_ar='$fnamear', family_descr='$fdescr'";
       $result=mysqli_query($conn, $query);

       if($result)
       {
           // echo '<script>alert("New Family Addedd Successfully.") </script>';
           $_SESSION['status']="New Assets Family Inserted Successfully";
           header("Location: assets_family.php");
       }
       else
       {
            //echo '<script>alert("Insertion Error!") </script>';
            $_SESSION['status']="Insertion Error!";
            header("Location: assets_family.php");
       }
    }
?>


