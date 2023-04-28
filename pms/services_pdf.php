

<?php 
//use dompdf  library to generate pdf file
require_once './libs/pdf/vendor/autoload.php';
use Dompdf\Dompdf;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export to Pdf</title>
</head>
<body>
    <h2>Services Report</h2>
    <table>
        <thead>
            <tr>
                <th>Service ID</th>
                <th>Service Name</th>
                <th>Servie Description</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>A</td>
                <td>B</td>
            </tr>
        </tbody>

        <tr>
            <th colspan="4" class="">TOTAL # Of Services</th>
        </tr>
    </table>
</body>
</html>