

<?php 
session_start(); 
require 'dbconn.php'; 


// CASE : "Archive"
if(isset($_POST['submit_archive']))
{
    $reqid = $_POST['reqid'];
    //$reqstate = $_POST['reqstate'];


    $query= "UPDATE mntrequests SET req_state ='Archive' where mntreqid ='$reqid' ";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo '<script> alert("your Data is Submitted Successfully"); </script>';
        header("Location: mntbacklogs.php");
        exit(0);
    }
    else
    {
        echo '<script> alert("Error! No Data Submitted"); </script>';
        header("Location: mntbacklogs.php");
        exit(0);
    }
}






// CASE : "SOLVED"
if(isset($_POST['submit_solved']))
    {
        $reqid = $_POST['reqid'];
        //GET REQID AUTO. ?????
        //$reqstate = $_POST['reqstate'];
    
        $wostate ='Done';
        //$closingtime = getdate();
        $techaction = $_POST['techactions'];
        $techcomment = $_POST['comment'];
    

        $query2= "INSERT INTO mntorders SET wo_id='$reqid', reqid='$reqid', wo_state='$wostate', wo_closing_date=CURRENT_TIMESTAMP, technical_action='$techaction', technical_comment='$techcomment' ";
        $result2 = mysqli_query($conn, $query2);

        if($result2)
        {
            //Update "Mnt. request State" in mntRequests Table
            $sql2="UPDATE mntrequests SET req_state ='Done' where mntreqid ='$reqid' ";
            $sql_run2=mysqli_query($conn,$sql2);
            //
            echo '<script> alert("your Data is Submitted Successfully"); </script>';
            header("Location: mntbacklogs.php");
            exit(0);
         }
        else
        {
            echo '<script> alert("Error! No Data Submitted"); </script>';
            header("Location: mntbacklogs.php");
            exit(0);
        }

        
    }









    // CASE : "Requisition"
if(isset($_POST['submit_requisition']))
{
    $reqid = $_POST['reqid'];
    //GET REQID AUTO. ?????
    //$reqstate = $_POST['reqstate'];

    $wostate ='Doing';
    //$closingtime = getdate();
    $techaction = $_POST['techactions'];
    $techcomment = $_POST['comment'];
    $budget=$_POST['wobudget'];
    $prno=$_POST['prno'];




    $query3= "INSERT INTO mntorders SET wo_id='$reqid', reqid='$reqid', wo_state='$wostate', wo_closing_date=CURRENT_TIMESTAMP, pr_no='$prno', wo_budget='$budget', technical_action='$techaction', technical_comment='$techcomment' ";
    $result3 = mysqli_query($conn, $query3);

    if($result3)
    {
        //Update "Mnt. request State" in mntRequests Table
        $sql3="UPDATE mntrequests SET req_state ='Doing' where mntreqid ='$reqid' ";
        $sql_run3=mysqli_query($conn,$sql3);
        //
        echo '<script> alert("your Data is Submitted Successfully"); </script>';
        header("Location: mntbacklogs.php");
        exit(0);
     }
    else
    {
        echo '<script> alert("Error! No Data Submitted"); </script>';
        header("Location: mntbacklogs.php");
        exit(0);
    }
}








// CASE : "Outsourcing"
if(isset($_POST['submit_outsourcing']))
{
    $reqid = $_POST['reqid'];
    //GET REQID AUTO. ?????
    //$reqstate = $_POST['reqstate'];

    $wostate ='Doing';
    //$closingtime = getdate();
    $techaction = $_POST['techactions'];
    $techcomment = $_POST['comment'];
    $budget=$_POST['wobudget'];
    $prno=$_POST['prno'];
    $reason=$_POST['reason'];




    $query3= "INSERT INTO mntorders SET wo_id='$reqid', reqid='$reqid', wo_state='$wostate', wo_closing_date=CURRENT_TIMESTAMP, pr_no='$prno', wo_budget='$budget', technical_action='$techaction', technical_comment='$techcomment' , outsource_reason='$reason' ";
    $result3 = mysqli_query($conn, $query3);

    if($result3)
    {
        //Update "Mnt. request State" in mntRequests Table
        $sql4="UPDATE mntrequests SET req_state ='Doing' where mntreqid ='$reqid' ";
        $sql_run4=mysqli_query($conn,$sql4);
        //
        echo '<script> alert("your Data is Submitted Successfully"); </script>';
        header("Location: mntbacklogs.php");
        exit(0);
     }
    else
    {
        echo '<script> alert("Error! No Data Submitted"); </script>';
        header("Location: mntbacklogs.php");
        exit(0);
    }
}




?>