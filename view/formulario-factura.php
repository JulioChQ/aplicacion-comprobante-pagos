<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emisión de Factura de Venta | Sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="view/styles.css">
    <script src="lib/jquery.min.js"></script>
</head>



<body>
    <section>
        <div class="container">
            <div class="row text-center titulo">
                <div class="col">
                    <br>
                    <h3 id="titulo"><b>Emisión de Factura de Venta</b></h3>
                    <p>
                        Aquí puedes generar una Factura de Venta.
                    </p>
                </div>
            </div>





            <form action="controller/emitir-factura.php" method="POST" target="_blank" id="formulario">
                <div class="row datos">
                    <h5><b>Datos del Cliente</b></h5>
                    <div class="col-xl-2 col-md-3">
                        <label for="tipo-documento"><b>Tipo de Documento</b></label><br>
                        <select class="form-select" name="tipo-documento" id="tipo-documento" onchange="cambiarDocumento()">
                            <option value="Sin Documento">Sin Documento</option>
                            <option value="RUC" selected>RUC</option>
                            <option value="DNI">DNI</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CED. DIPLOMÁTICA DE IDENTIDAD">Cédula Diplomática de Identidad</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <label for="numero-documento"><b>Número de Documento</b></label><br>
                        <input type="text" class="input-recibo" id="numero-documento" name="numero-documento" placeholder="Ejemplo: 12345678901">
                        <a class="btn btn-info" id="validar">Validar</a>
                    </div>
                    <div class="col-xl-7 col-md-6">
                        <label for="razon-social"><b>Nombre o Razón Social</b></label><br>
                        <input type="text" class="input-recibo" id="razon-social" name="razon-social" placeholder="Ingrese razón social de la empresa o nombre de la persona" required>
                    </div>

                    <div class="col-xl-8 col-md-8">
                        <label for="domicilio"><b>Domicilio</b></label><br>
                        <input type="text" class="input-recibo" id="domicilio" name="domicilio" placeholder="Ingrese el domicilio de la persona o empresa (calle, número, ciudad)">
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <label for="forma-pago"><b>Elija la Forma de Pago</b></label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="forma-pago" id="contado" checked value="AL CONTADO">
                            <label class="form-check-label" for="contado">
                                Al contado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="forma-pago" id="credito" value="AL CRÉDITO" disabled>
                            <label class="form-check-label" for="credito">
                                Al crédito
                            </label>
                        </div>
                    </div>
                </div><br>



                <div class="row datos">
                    <h5><b>Datos del Documento</b></h5>


                    <div class="col-xl-2 col-md-4">
                        <label for="fecha-emision"><b>Fecha de Emisión</b></label><br>
                        <input type="date" class="input-recibo" id="fecha-emision" name="fecha-emision" value='<?php echo $fechaActual; ?>' min="<?= $fechaAnterior ?>" max="<?= $fechaActual ?>">
                    </div>



                    <div class="col-xl-3 col-md-8">
                        <label for="observacion"><b>Observación(Opcional)</b></label><br>
                        <input type="text" class="input-recibo" id="observacion" name="observacion">
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <label for="medio-pago"><b>Medio de Pago</b></label><br>
                        <select class="form-select" name="medio-pago" id="medio-pago">
                            <option value="Depósito en Cuenta">Depósito en Cuenta</option>
                            <option value="Giro">Giro</option>
                            <option value="Transferencia de fondos">Transferencia de fondos</option>
                            <option value="Orden de Pago">Orden de Pago</option>
                            <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                            <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                            <option value="Efectivo" selected>Efectivo</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <label for="tipo-moneda"><b>Tipo de Moneda</b></label><br>
                        <select class="form-select" name="tipo-moneda" id="tipo-moneda">
                            <option value="SOLES" selected>SOL</option>
                            <option value="DOLARES">DOLAR</option>

                        </select>
                    </div>

                </div><br>

                <div class="row datos">
                    <h5><b>Lista de Productos/Servicios</b></h5>


                    <div class="col-12 text-center">
                        <button class="btn btn-success">Agregar</button>
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Quitar</button>
                    </div>

                    <div class="col text-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Tipo IGV</th>
                                    <th>Unidad/Medida</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                    <th>IGV</th>
                                    <th>Importe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A01</td>
                                    <td>AGENDA</td>
                                    <td>EXONERADO</td>
                                    <td>UNIDADES</td>

                                </tr>
                            </tbody>
                            
                        </table>
                    </div>


                </div><br>


                <div class="row datos">
                    <h5><b>Resumen del Documento</b></h5>


                    <div class="col-xl-2 col-md-3">
                        <label for="monto-total"><b>Monto total</b></label><br>
                        <input type="number" class="input-recibo" id="monto-total" name="monto-total" step="0.01" oninput="actualizarMontos()" required placeholder="0.00">
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="igv"><b>IGV (18%)</b></label><br>
                        <input type="text" class="input-recibo" id="igv" disabled value="0" step="0.01">
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="total-neto"><b>Total Neto Recibido</b></label><br>
                        <input type="text" class="input-recibo" id="total-neto" disabled value="0">
                    </div>
                </div><br>


                <div class="row text-center">
                    <div class="col-12">
                        <input type="submit" name="emitir-recibo" class="btn btn-primary" value="Emitir Recibo" id="generar">
                        <a class="btn btn-secondary" href="index.php">Eliminar Datos</a>

                    </div>

                </div>



            </form>

        </div>
    </section>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-center">
        <p class="text-muted text-center">Desarrollado por el Grupo 10 del curso de Contabilidad, Costos y Presupuestos</p>

    </footer>

    <script src="view/js/formulario-factura.js"></script>


</body>

</html>