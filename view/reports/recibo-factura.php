<!DOCTYPE html>
<html lang="es">

<head>

   <title>Factura de Venta | Sistema</title>

   <link rel='stylesheet' type="text/css" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>


</head>
<style>
   * {
      font-size: 92% !important; 
      margin: 1%;
      
   }
   .contenido {
      border: 1px solid #000 !important;
   }

   .numero {
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
      </div><br>
      <div class="row contenido">
         <div class="col-xs-12">
            <h4><b>FACTURA ELECTRÓNICA</b></h4>
            <h4>F001 - 000014</h4>
            <h5>Fecha de emisión: 03-12-2023 / 00:00 AM</h5>
            <H5>Señor (es): IMPORTACIONES HOGAR FELIZ</H5>
            <h5>RUC N°: 20611012345</h5>
            <h5>Direc.: CALLE 3 DE DICIEMBRE 111 TACNA - TACNA - TACNA</h5>
            <h5>MEDIO DE PAGO: EFECTIVO</h5>
            <h5>FORMA DE PAGO: AL CONTADO</h5>
         </div>
      </div><br>
      <div class="row contenido text-center">
         <div class="col-xs-12 text-center">
            <table class="table text-center">
               <thead>
                  <tr>
                     <th>Cant.</th>
                     <th>Descripción</th>
                     <th>P. U.</th>
                     <th>Importe</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>2</td>
                     <td>A01-AGENDA</td>
                     <td>S/. 20.00</td>
                     <td>S/. 40.00</td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>A02-AGENDA</td>
                     <td>S/. 20.00</td>
                     <td>S/. 40.00</td>
                  </tr>
               </tbody>

            </table>
         </div>

         
      </div><br>

      <div class="row">
      <div class="col-xs-12 text-right">
            <h5>GRAVADA: S/. 70.00</h5>
            <h5>IGV (18.00%): S/. 10.00</h5>
            <h5>DESCUENTO: S/. 0.00</h5>
            <h5>TOTAL: S/. 80</h5>
         </div>
      </div>

      <div class="row contenido text-center">
         <div class="col-xs-12">
            <p>IMPORTE EN LETRAS: SON OCHENTA CON 00/100</p>
            <p>Representación impresa de la Factura Electrónica.</p>
            <p>VENDEDOR: CAJERO PRINCIPAL</p>
         </div>
      </div>

     

   </div>



   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="text-muted">Hora y fecha de impresión: <?= date("H:i:s d/m/Y") ?></p>
   </footer>
</body>

</html>