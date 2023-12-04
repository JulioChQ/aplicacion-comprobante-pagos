<!DOCTYPE html>
<html lang="es">

<head>
   
   <title>Factura de Venta | Sistema</title>

   <link rel='stylesheet' type="text/css" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
   

</head>
<style>
   .contenido{
      border: 1px solid #000 !important;
   }

   .numero{
      border: 1px solid #000 !important;
   }
   </style>
<body>


   <div class="container">
      <div class="row">
         <div class="col-xs-12 text-center">
            <h4>IMPORTACIONES MI DULCE HOGAR</h4>
            <h4>R.U.C. 20123456789</h4>
            <p>CALLE 2 DE MAYO 1001 TACNA - TACNA - TACNA</p>
            <p>TELEFONO: 123456789</p>
         </div>
         <div class="col-xs-12 text-center numero">
            <h4><b>FACTURA ELECTRÓNICA</b></h4>
            <h4>F001 - 000014</h4>
            <h5>Fecha de emisión: 03-12-2023 / 00:00 AM</h5>
            <H5>Señor (es): IMPORTACIONES HOGAR FELIZ</H5>
            <h5>RUC N°: 20611012345</h5>
            <h5>Direc.: CALLE 3 DE DICIEMBRE 111 TACNA - TACNA - TACNA</h5>
         </div>
      </div><br>
      <div class="row contenido">
         <div class="row">
            <div class="col-xs-3">
               <p><b>Recibí de:</b></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Identificado con:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=$tipoDoc?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Número:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=$numDoc?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Domicilio Fiscal del usuario:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=$domicilio?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Forma de Pago:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=$formaPago?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>La suma de:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=$textoMontoTotal?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Por concepto de:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=$descripcion?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Observación:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=$observacion?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Inciso:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?='"' . $tipoRenta . '"' . " DEL ARTÍCULO 33 DE LA LEY DEL IMPUESTO A LA RENTA"?></p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-3">
               <p><b>Fecha de emisión:</b></p>
            </div>

            <div class="col-xs-9">
               <p><?=date("d",strtotime($fechaEmision))?> de <?=strftime("%B",strtotime($fechaEmision))?> del <?=date("Y",strtotime($fechaEmision))?></p>
            </div>
         </div>
      </div><br>

      <div class="row">
         <div class="col-xs-4"></div>
         <div class="col-xs-3">
            <p><b>Total por honorarios</b></p>
         </div>
         <div class="col-xs-1">
            <p>:</p>
         </div>
         <div class="col-xs-1">
            <p><?=$montoTotal?></p>
         </div>
      </div>

      <div class="row">
         <div class="col-xs-4"></div>
         <div class="col-xs-3">
            <p><b>Retención (8%) IR</b></p>
         </div>
         <div class="col-xs-1">
            <p>:</p>
         </div>
         <div class="col-xs-1">
            <p><?=$retencion?></p>
         </div>
      </div>

      <div class="row">
         <div class="col-xs-4"></div>
         <div class="col-xs-3">
            <p><b>Total Neto Recibido</b></p>
         </div>
         <div class="col-xs-1">
            <p>:</p>
         </div>
         <div class="col-xs-2">
            <p><?php echo $totalNeto . " " . $tipoMoneda;?> </p>
         </div>
      </div>


   </div>



   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="text-muted">Hora y fecha de impresión: <?= date("H:i:s d/m/Y") ?></p>

   </footer>
</body>

</html>