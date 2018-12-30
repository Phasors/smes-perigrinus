<?php 
require_once '../dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// $name = $_GET["fname"]." ".$_GET["mname"]." ".$_GET["lname"];
// $fname = $_GET["fname"];
// $mname = $_GET["mname"];
// $lname = $_GET["lname"];
// $acadlevel = $_GET["acadlevel"];
// $app_id = $_GET["applicant_id"];
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml(file_get_contents('printapplicationform.php'));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Perigrinus-Application-Form.pdf");

?>