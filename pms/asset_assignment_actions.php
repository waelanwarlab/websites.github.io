

<?php 
require 'dbconn.php';

$output='';
$query="SELECT * FROM blocks where area_code='".$_POST['areacode']."' ";
$result=mysqli_query($conn,$query);

$output .='<option value="" disabled selected> --SELECT Block -- </option>';

while($row=mysqli_fetch_array($result))
{
    $output .='<option value="'.$row['block_id'].'">'.$row['block_name'].'</option>';
}
echo $output;
?>