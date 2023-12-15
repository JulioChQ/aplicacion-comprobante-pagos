<?php
require_once "../lib/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
include "../lib/barcode/barcode.php";

date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');


$tipoDoc = $_POST["tipo-documento"];

if($tipoDoc == "RUC"){
    $codTipoDoc = 6;
}else{
    $codTipoDoc = 1;
}

$numDoc = $_POST["numero-documento"];
$razonSocial = $_POST["razon-social"];
$domicilio = $_POST["domicilio"];
$medioPago = $_POST["medio-pago"];
$observacion = $_POST["observacion"];
$fechaEmision = $_POST["fecha-emision"];
$fechaEmision = date("d-m-Y",strtotime($fechaEmision));
$observacion = $_POST["observacion"];
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

$qrTexto =  "20123456789|03|B001|1|" . $igv . "|" . $total . "|" . $fechaEmision . "|" . $codTipoDoc . "|" . $numDoc;
$generator = new barcode_generator();

$svg = $generator->render_svg("qr", $qrTexto, "");


ob_start();
require_once "../view/reports/recibo-boleta.php";

$html = ob_get_clean();

//echo $html;


$dompdf = new Dompdf();
$dompdf->set_base_path("reportes.css");

$options = $dompdf->getOptions();
$options->set(array("isRemoteEnabled" => true));
$dompdf->loadHtml($html);
$dompdf->setPaper(array(0,0,204,850));
$dompdf->render();
$dompdf->stream("boleta.pdf", array("Attachment" => false));