<?php
date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');

$fechaActual = date("Y-m-d");
$fechaAnterior = date('Y-m-d', strtotime($fechaActual . ' -2 days'));

if (!isset($_GET["p"])) {
    require_once "view/pagina-principal.php";
} else {
    switch ($_GET["p"]) {
        case "recibo":
            require_once "view/formulario-recibo-honorarios.php";
            break;
        case "boleta":
            require_once "view/formulario-boleta.php";
            break;
        case "factura":
            require_once "view/formulario-factura.php";
            break;
    }
}
