<!DOCTYPE html>
<html lang="es">

<head>

   <title>Factura de Venta | Sistema</title>

   <link rel='stylesheet' type="text/css" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>


</head>
<style>
   * {
      margin-right: 1% !important;
      margin-left: 1% !important;
      padding: 1px !important;
      font-size: 94% !important;
      
      
   }

   tbody{
      font-size: 90%;
      padding-right: 2% !important;
   }

   .contenido {
      border: 1px solid #000 !important;
      text-align: center;
   }

   .numero {
      border: 1px solid #000 !important;
   }
</style>

<body>


   <div class="container-fluid">
      <div class="row text-center">
         <div class="col-xs-12 text-center">
            <h4>IMPORTACIONES MI DULCE HOGAR</h4>
            <h4>R.U.C. 20123456789</h4>
            <p>CALLE 2 DE MAYO 1001 TACNA - TACNA - TACNA</p>
            <p>TELEFONO: 123456789</p>
         </div>
      </div>
      <div class="row contenido">
         <div class="col-xs-12">
            <h4><b>FACTURA ELECTRÓNICA</b></h4>
            <h4>F001 - 000001</h4>
            <h5>Fecha de emisión: <?=$fechaEmision?></h5>
            <H5>Señor (es): <?=$razonSocial?></H5>
            <h5>RUC N°: <?=$numDoc?></h5>
            <h5>Direc.: <?=$domicilio?></h5>
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
                  <?php
                  for ($i=0;$i < count($idProductos); $i++){
                  ?>
                  <tr>
                     <td><?=$cantidadProductos[$i]?></td>
                     <td><?=$descripcionProductos[$i]?></td>
                     <td><?=$precioProductos[$i]?></td>
                     <td><?php echo "S/. " . $importe[$i]?></td>
                  </tr>
                  <?php
                  }
                  ?>
               </tbody>

            </table>
         </div>

         
      </div>

      <div class="row">
      <div class="col-xs-12 text-right">
            <h5>GRAVADA: S/. <?=$gravada?></h5>
            <h5>IGV (18.00%): S/. <?=$igv?></h5>
            <h5>TOTAL: S/. <?=$total?></h5>
         </div>
      </div>

      <div class="row contenido text-center">
         <div class="col-xs-12">
            <p>IMPORTE EN LETRAS: SON <?=$textoTotal?></p>
            <p>Representación impresa de la Factura Electrónica.</p>
            
            <p>VENDEDOR: CAJERO PRINCIPAL</p>
         </div>
      </div>

     

   </div>



   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="text-muted text-center">Hora y fecha de impresión: <?= date("H:i:s d/m/Y") ?></p>
   </footer>
</body>

</html>