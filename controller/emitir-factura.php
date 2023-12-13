<?php
require_once "../lib/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');


//$tipoDoc = $_POST["tipo-documento"];
$tipoDoc = "DNI";
$numDoc = $_POST["numero-documento"];
$razonSocial = $_POST["razon-social"];
$domicilio = $_POST["domicilio"];
$formaPago = $_POST["forma-pago"];
$observacion = $_POST["observacion"];
$fechaEmision = $_POST["fecha-emision"];
$tipoMoneda = "SOL";
$idProductos[] = $_POST["id-productos"];
$descripcionProductos = $_POST["descripcion-productos"];
$precioProductos = $_POST["precio-productos"];
$cantidadProductos = $_POST["cantidad-productos"];

$total = 100;
$igv = $total * 18/100;
$gravada = $total- $igv;
/*
$fmt = new NumberFormatter("es_PE", NumberFormatter::SPELLOUT);
$parte_entera = intval($montoTotal);
$parte_decimal = intval(($montoTotal - $parte_entera) * 100);

$texto_parte_entera = $fmt->format($parte_entera);
$texto_parte_entera = strtoupper($texto_parte_entera);

$textoMontoTotal = "" . $texto_parte_entera . " Y " . $parte_decimal . "/100 " . $tipoMoneda;

*/
ob_start();

require_once "view/reports/recibo-factura.php";

$html = ob_get_clean();

//echo $html;


$dompdf = new Dompdf();
$dompdf->set_base_path("reportes.css");

$options = $dompdf->getOptions();
$options->set(array("isRemoteEnabled" => true));
$options->setDpi(72);
$dompdf->setOptions($options);
$dompdf->loadHtml($html);
$dompdf->setPaper(array(0,0,306,850));
$dompdf->render();
$dompdf->stream("recibo_honorarios.pdf", array("Attachment" => false));
