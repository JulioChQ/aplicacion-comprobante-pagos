<?php
require_once "lib/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');

$ruc = 10123456789;
$razonSocial = "Mi pequeña empresa";
$numRecibo=1;

$tipoDoc = $_POST["tipo-documento"];
$numDoc = $_POST["numero-documento"];
$razonSocial = $_POST["razon-social"];
$domicilio = $_POST["domicilio"];
$formaPago = $_POST["forma-pago"];
$esGratuito = $_POST["es-gratuito"];
$descripcion = $_POST["descripcion"];
$observacion = $_POST["observacion"];
$fechaEmision = $_POST["fecha-emision"];
$tipoRenta = $_POST["tipo-renta"];
$hayRetencion = $_POST["hay-retencion"];
$hayPago = $_POST["hay-pago"];
$tipoMoneda = $_POST["tipo-moneda"];
$montoTotal = $_POST["monto-total"];
$retencion = 0;
if($hayRetencion == "si"){
    $retencion = $montoTotal * (8.0/100.0);
}

$totalNeto = $montoTotal - $retencion;

$fmt = new NumberFormatter("es_PE", NumberFormatter::SPELLOUT);
$parte_entera = intval($montoTotal);
$parte_decimal = intval(($montoTotal - $parte_entera) * 100);

$texto_parte_entera = $fmt->format($parte_entera);
$texto_parte_entera = strtoupper($texto_parte_entera);

$textoMontoTotal = "" . $texto_parte_entera . " Y " . $parte_decimal . "/100 " . $tipoMoneda;

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
