<?php

$ruc=$_POST["ruc"];


if(strlen($ruc)<11 || strlen($ruc)>11)
{
    $consulta=1;
}
else{
    
    $consulta=file_get_contents('https://api.apis.net.pe/v1/ruc?numero='.$ruc.'');
}








echo $consulta;

$token = 'apis-token-5491.2ydG0fkdpjPjT8Lx2yip3hHzpmTIH0Zk';
$ruc = $_POST["ruc"];

// Iniciar llamada a API
$curl = curl_init();

// Buscar ruc sunat
curl_setopt_array($curl, array(
  // para usar la versión 2
  CURLOPT_URL => 'https://api.apis.net.pe/v2/sunat/ruc?numero=' . $ruc,
  // para usar la versión 1
  // CURLOPT_URL => 'https://api.apis.net.pe/v1/ruc?numero=' . $ruc,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: http://apis.net.pe/api-ruc',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// Datos de empresas según padron reducido


// Datos listos para usar
//$persona = json_decode($response);


?>