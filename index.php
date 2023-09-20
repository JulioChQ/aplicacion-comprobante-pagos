<?php
date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');

$fechaActual = date("Y-m-d");
$fechaAnterior = date('Y-m-d', strtotime($fechaActual . ' -2 days'));
require_once "view/formulario.php";