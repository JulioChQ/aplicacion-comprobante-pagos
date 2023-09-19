<?php
date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');

$numero = 12345.67;
$idioma = 'es_PE'; // Idioma: español de España

$fmt = new NumberFormatter("es_PE", NumberFormatter::SPELLOUT);
$texto = $fmt->format($numero);

//echo "Número: $numero<br>";
//echo "Texto: $texto";

$fechaActual = date("Y-m-d");
$fechaAnterior = date('Y-m-d', strtotime($fechaActual . ' -2 days'));
require_once "view/formulario.php";