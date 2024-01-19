<!DOCTYPE html>
<html lang="es">

<head>

   <title>Guía de Remisión Remitente | Sistema</title>

   <link rel='stylesheet' type="text/css" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>


</head>
<style>
   .contenido {
      border: 1px solid #000 !important;
   }

   .numero {
      border: 1px solid #000 !important;
   }

   * {
      margin-right: 1% !important;
      margin-left: 1% !important;
      
      padding-right: 1px !important;
      padding-left: 1px !important;
      font-size: 97% !important;
   }

   tbody {
      font-size: 95%;
      padding-right: 2% !important;
   }
</style>

<body>


   <div class="container-fluid">
      <div class="row">
         <div class="col-xs-6">
            <h4>IMPORTACIONES MI DULCE HOGAR S.A.C</h4>
            <p>CALLE 2 DE MAYO 1001 TACNA - TACNA - TACNA</p>
            <p>TELEFONO: 123456789</p>
         </div>
         <div class="col-xs-5 text-center numero">
            <h4>R.U.C. 20123456789</h4>
            <h4>GUÍA DE REMISIÓN REMITENTE ELECTRÓNICO</h4>
            <h4>Nro. T001-00001</h4>
         </div>
      </div><br>

      <p><b>DATOS DEL TRASLADO</b></p>
      <div class="row contenido">
         <div class="row">
            <div class="col-xs-2">
               <p><b>Fecha de Emisión:</b></p>
               <p><?= $fechaEmision ?></p>
            </div>
            <div class="col-xs-2">
               <p><b>Fecha de Inicio del Traslado:</b></p>
               <p><?= $fechaTraslado ?></p>
            </div>
            <div class="col-xs-2">
               <p><b>Motivo del Traslado:</b></p>
               <p><?= $motivoTraslado ?></p>
            </div>
            <div class="col-xs-2">
               <p><b>Modalidad del Transporte:</b></p>
               <p><?= $modalidadTraslado ?></p>
            </div>
            <div class="col-xs-3">
               <p><b>Peso Bruto Total de la Guía (KGM):</b></p>
               <p><?= $pesoBruto ?></p>
            </div>

         </div>

      </div><br>

      <p><b>DATOS DEL DESTINATARIO</b></p>
      <div class="row contenido">
         <div class="row">
            <div class="col-xs-4">
               <p><b>Documento de Identidad:</b></p>
               <p><?= $tipoDoc . " - " . $numDoc ?></p>
            </div>
            <div class="col-xs-8">
               <p><b>Nombre o Razón Social:</b></p>
               <p><?= $razonSocial ?></p>
            </div>


         </div>
      </div><br>
      <p><b>DATOS DEL PUNTO DE PARTIDA Y PUNTO DE LLEGADA</b></p>
      <div class="row contenido">
         <div class="row">
            <div class="col-xs-6">
               <p><b>Dirección del Punto de Partida:</b></p>
               <p><?= $direccionPartida ?></p>
            </div>
            <div class="col-xs-6">
               <p><b>Dirección del Punto de Llegada:</b></p>
               <p><?= $direccionLlegada ?></p>
            </div>

         </div>
      </div><br>

      <p><b>DATOS DEL TRANSPORTE</b></p>
      <div class="row contenido">
         <div class="col-xs-3">
            <p><b>Datos del Vehículo</b></p>
         </div>
         <div class="col-xs-9">
            <p><b>Datos del Conductor</b></p>
         </div>
      </div>
      <div class="row contenido">
         <div>
            <div class="col-xs-3" >
               <p><b>Número de Placa:</b></p>
               <p><?= $placaVehiculo ?></p>
            </div>
         </div>

         <div>
            <div class="col-xs-2">
               <p><b>Documento de Identidad:</b></p>
               <p><?= $tipoDocConductor . " - " . $numeroDocumentoConductor ?></p>
            </div>
            <div class="col-xs-4">
               <p><b>Nombre:</b></p>
               <p><?= $nombreConductor ?></p>
            </div>
            <div class="col-xs-2">
               <p><b>Número de Licencia:</b></p>
               <p><?= $licenciaConductor ?></p>
            </div>
         </div>
         

      </div><br>

      <p><b>DATOS DE LOS BIENES</b></p>
      <div class="row contenido text-center">
         <div class="col-xs-12 text-center">
            <table class="table ">
               <thead>
                  <tr>
                     <th>Cant.</th>
                     <th>Descripción</th>
                     <th>Unidad/Medida</th>

                  </tr>
               </thead>
               <tbody>
                  <?php
                  for ($i = 0; $i < count($idProductos); $i++) {
                  ?>
                     <tr>
                        <td><?= $cantidadProductos[$i] ?></td>
                        <td><?= $descripcionProductos[$i] ?></td>
                        <td><?= "UNIDADES" ?></td>
                     </tr>
                  <?php
                  }
                  ?>
               </tbody>

            </table>
         </div>


      </div>
      <div class="row">
         <div class="col-xs-3">
            <img src="data:image/svg+xml;base64,<?php echo base64_encode($svg); ?>" alt="Imagen SVG">
         </div>
         <div class="col-xs-8 text-center">
            <br><p>Representación impresa de la Factura Electrónica.</p>
            <p>Consulte su documento en:</p>
            <p>https://comprobantesrayo.pe/consultar-cpe</p>
            <p>VENDEDOR: CAJERO PRINCIPAL</p>
         </div>
      </div>
   </div>



   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="text-muted">Hora y fecha de impresión: <?= date("H:i:s d/m/Y") ?></p>

   </footer>
</body>

</html>