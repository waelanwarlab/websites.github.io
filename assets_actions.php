
<?php 
session_start();
require 'dbconn.php';
require 'message.php';



if(isset($_POST['save_asset']))
{
    

    $asset_code=$_POST['assetcode'];
    $assetstockcode=$_POST['assetstockcode'];
    $tag=$_POST['tag'];
    $barcode=$_POST['barcode'];
    $assetname=$_POST['assetname'];
    $assetdescr=$_POST['assetdescr'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];
    $ipaddress=$_POST['ipaddress'];
    
    $query="INSERT INTO assets SET asset_code='$asset_code', asset_stock_code='$assetstockcode' , asset_tag='$tag', asset_barcode='$barcode', asset_name='$assetname', asset_descr='$assetdescr', brand='$brand', model='$model', ip_address='$ipaddress'";
    $result=mysqli_query($conn, $query);

    if($result)
    {
        $_SESSION['message']="New Asset Added Successfully!";
        header("Location: assets_display.php");
        exit(0);
    }
    else
    {
        $_SESSION['session']="Error! No Data Saved!";
        header("Location: assets_display.php");
        exit(0);
    }
}



if(isset($_POST['save_assetdetails']))
{
    $assetcode=$_POST['assetcode'];
    
    $pono=$_POST['pono'];
    $poval=$_POST['povalue'];
    $deliverydate = date('Y-m-d',strtotime($_POST['deliverydate']));
    $installdate = date('Y-m-d',strtotime($_POST['installdate']));
    $warrenty=$_POST['warrenty'];
    $lifetime=$_POST['lifetime'];

    $query ="UPDATE assets set po_no='$pono', po_value='$poval', installation_date='$installdate', delivery_date='$deliverydate', warrenty='$warrenty', lifetime_m='$lifetime' where asset_code='$assetcode'";
    $result=mysqli_query($conn, $query);

    if($result)
    {
        $_SESSION['message']="Assets Details is Updated Successfully!";
        header("Location: assets_display.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Error! Update is Failed!";
        header("Location: assets_display.php");
        exit(0);
    }
}



?>