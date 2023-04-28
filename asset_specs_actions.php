

<?php 
require 'dbconn.php';

$output='';
$query3= "SELECT * FROM specs_subcategory WHERE specs_category_fk='".$_POST['category']."' ";
$result3= mysqli_query($conn,$query3);

$output .='<option value="" disabled selected> --SELECT Subcategory -- </option>';

while ($row=mysqli_fetch_array($result3))
{
    $output .='<option value="'.$row['specs_subcategory'].'">'.$row['specs_subcategory'].'</option>';
}
echo $output;
?>