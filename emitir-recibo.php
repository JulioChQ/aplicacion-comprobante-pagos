<?php
require_once "lib/dompdf/autoload.inc.php";
use Dompdf\Dompdf;

$ruc = 10123456789;
$razonSocial = "Mi pequeña empresa";
$numRecibo=1;

$tipoDoc = $_POST["tipo-documento"];
$numDoc = $_POST["numero-documento"];
$razonSocial = $_POST["razon-social"];
$formaPago = $_POST["forma-pago"];





//var_dump($asignaturas);

ob_start();

require_once "recibo-honorarios.php";

$html = ob_get_clean();
//echo $html;


$dompdf = new Dompdf();
$dompdf->set_base_path("reportes.css");

$options = $dompdf->getOptions();
$options->set(array("isRemoteEnabled" => true));
$dompdf->setOptions($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', "portrait");
$dompdf->render();
$dompdf->stream("recibo_honorarios.pdf", array("Attachment" => false));
