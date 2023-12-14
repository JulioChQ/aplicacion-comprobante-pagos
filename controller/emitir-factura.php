<?php
require_once "../lib/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
include "../lib/barcode/barcode.php";

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
$idProductos = $_POST["id-productos"];
$descripcionProductos = $_POST["descripcion-productos"];
$precioProductos = $_POST["precio-productos"];
$cantidadProductos = $_POST["cantidad-productos"];
$total = 0;

for($i=0; $i < count($idProductos); $i++){
    $descripcionProductos[$i] = $idProductos[$i] . " - " . $descripcionProductos[$i] . " - UNIDADES";
    $importe[$i] = $cantidadProductos[$i] * $precioProductos[$i];
    $total += $importe[$i];
}

$igv = $total * 18/100;
$gravada = $total- $igv;

$fmt = new NumberFormatter("es_PE", NumberFormatter::SPELLOUT);
$parte_entera = intval($total);
$parte_decimal = intval(($total - $parte_entera) * 100);

$texto_parte_entera = $fmt->format($parte_entera);
$texto_parte_entera = strtoupper($texto_parte_entera);

$textoTotal = "" . $texto_parte_entera . " Y " . $parte_decimal . "/100 " . "SOLES";

$qrTexto = "|sdfadsadsad";
$generator = new barcode_generator();
$svg = $generator->render_image("qr", $qrTexto,"");
//echo $svg;
ob_start();
require_once "../view/reports/recibo-factura.php";

$html = ob_get_clean();

//echo $html;


$dompdf = new Dompdf();
$dompdf->set_base_path("reportes.css");

$options = $dompdf->getOptions();
$options->set(array("isRemoteEnabled" => true));
$dompdf->loadHtml($html);
$dompdf->setPaper(array(0,0,204,850));
$dompdf->render();
$dompdf->stream("recibo_honorarios.pdf", array("Attachment" => false));