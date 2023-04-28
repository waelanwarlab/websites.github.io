

<?php 
    session_start();
    require 'dbconn.php';

    if(isset($_POST['save_category']))
    {
        $famname = mysqli_real_escape_string($conn, $_POST['famname']);
        $catcode = mysqli_real_escape_string($conn, $_POST['catcode']);
        $catname = mysqli_real_escape_string($conn, $_POST['catname']);
        $cattag = mysqli_real_escape_string($conn, $_POST['cattag']);
        $catdescr = mysqli_real_escape_string($conn, $_POST['catdescr']);

        $query="INSERT into assets_category SET categorytag='$cattag', familyfk='$famname', categorycode='$catcode' ,categoryname='$catname', categorydescr='$catdescr'";
        $result = mysqli_query($conn,$query);

            if($result)
            {
                $_SESSION['message']="New Category Is Saved Successfully !";
                header("Location: asset_cat_add.php");
                exit(0);
            }
            else
            {
                $_SESSION['message']="Error ! No Data Saved !";
                header("Location: asset_cat_add.php");
                exit(0);
            }

    }
?>