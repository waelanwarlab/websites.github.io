
<?php 
$conn = mysqli_connect("localhost","root","","pms");

if(!$conn)
{
    die('Connecting to database failed!'.mysqli_connect_error());
}
?>