<?php
require_once "../lib/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
include "../lib/barcode/barcode.php";

date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');

# Documento Relacionado
$tipoDocSunat = $_POST["tipo-documento-sunat"];
$numeroDocumentoSunat = $_POST["numero-documento-sunat"];
$motivoTraslado = $_POST["motivo-traslado"];

# Destinatario
$tipoDoc = "RUC";
$numDoc = $_POST["numero-documento"];
$razonSocial = $_POST["razon-social"];
$domicilio = $_POST["domicilio"];

# Conductor
$tipoDocConductor = "DNI";
$numeroDocumentoConductor = $_POST["numero-documento-conductor"];
$nombreConductor = $_POST["nombre-conductor"];
$licenciaConductor = $_POST["licencia-conductor"];
$placaVehiculo = $_POST["placa-vehiculo"];

# Punto Partida y Llegada
$direccionPartida = $_POST["direccion-partida"];
$direccionLlegada = $_POST["direccion-llegada"];

# Otros
#$fechaEmision = $_POST["fecha-emision"];
#$fechaEmision = date("d-m-Y",strtotime($fechaEmision));
$fechaEmision = date("d-m-Y");

# Lista de Productos
$idProductos = $_POST["id-productos"];
$descripcionProductos = $_POST["descripcion-productos"];
$cantidadProductos = $_POST["cantidad-productos"];

for($i=0; $i < count($idProductos); $i++){
    $descripcionProductos[$i] = $idProductos[$i] . " - " . $descripcionProductos[$i];
}

# Datos de Traslado
$pesoBruto = $_POST["peso-carga"];
$modalidadTraslado = $_POST["modalidad-traslado"];
$fechaTraslado = $_POST["fecha-traslado"];
$fechaTraslado = date("d-m-Y",strtotime($fechaTraslado));

# Generación de QR
$qrTexto =  "20123456789|01|T001|1|||" . $fechaEmision . "|6|" . $numDoc;
$generator = new barcode_generator();
$svg = $generator->render_svg("qr", $qrTexto, "");


# Generación de Reporte
ob_start();
require_once "../view/reports/recibo-remision.php";

$html = ob_get_clean();

#echo $html;


$dompdf = new Dompdf();
$dompdf->set_base_path("reportes.css");

$options = $dompdf->getOptions();
$options->set(array("isRemoteEnabled" => true));
$dompdf->loadHtml($html);
$dompdf->setPaper("A4");
$dompdf->render();
$dompdf->stream("guia-remision.pdf", array("Attachment" => false));