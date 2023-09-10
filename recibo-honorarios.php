<!DOCTYPE html>
<html lang="es">

<head>
   
   <title>Recibo por Honorarios | Sistema</title>

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
         <div class="col-xs-6">
            <h4>Juan Pedro Lopez Mamani</h4>
            <p>Calle 2 de mayo 1001</p>
            <p>Telefono: 123456789</p>
         </div>
         <div class="col-xs-5 text-center numero">
            <h4>R.U.C. 10123456789</h4>
            <h4>RECIBO POR HONORARIOS ELECTRÓNICO</h4>
            <h4>Nro: E001-32</h4>
         </div>
      </div><br>
      <div class="row contenido">
         <div class="row">
            <div class="col-xs-2">
               <p>Recibí de:</p>
            </div>

            <div class="col-xs-10">
               <p>Juan Pedro lopez mamani</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Identificado con:</p>
            </div>

            <div class="col-xs-10">
               <p>RUC</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Número:</p>
            </div>

            <div class="col-xs-10">
               <p>10123456789</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Domicilio Fiscal del usuario:</p>
            </div>

            <div class="col-xs-10">
               <p>Calles Asturias nro 105 LIMA-LIMA-PUEBLO LIBRE</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Forma de Pago:</p>
            </div>

            <div class="col-xs-10">
               <p>Al Crédito</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>La suma de:</p>
            </div>

            <div class="col-xs-10">
               <p>Quinientos y 00/100 soles</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Por concepto de:</p>
            </div>

            <div class="col-xs-10">
               <p>Servicio de Asesoría Contable y otros requerimientos del mes de enero 2022</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Observación:</p>
            </div>

            <div class="col-xs-10">
               <p>Servicio de Asesoría Contable y otros requerimientos del mes de enero 2022</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Inciso:</p>
            </div>

            <div class="col-xs-10">
               <p>"A" DEL ARTÍCULO 33 DE LA LEY DEL IMPUESTO A LA RENTA</p>
            </div>
         </div>

         <div class="row">
            <div class="col-xs-2">
               <p>Fecha de emisión:</p>
            </div>

            <div class="col-xs-10">
               <p>12 de Enero del 2022</p>
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
            <p>500.00</p>
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
            <p>0.00</p>
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
            <p>500.00 SOLES</p>
         </div>
      </div>


   </div>



   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="text-muted">Hora y fecha de impresión: <?= date("H:i:s d/m/Y") ?></p>

   </footer>
</body>

</html>