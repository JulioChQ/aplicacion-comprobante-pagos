<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emisión de Recibo por Honorarios | Sistema</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>



<body>
    <section>
        <div class="container">
            <div class="row text-center titulo">
                <div class="col">
                    <br>
                    <h3 id="titulo"><b>Emisión de Recibo por Honorarios</b></h3>
                    <p>
                        Aquí puedes generar un recibo por honorarios.
                    </p>
                </div>
            </div>





            <form action="emitir-recibo.php" method="POST" target="_blank" id="formulario">
                <div class="row datos">
                    <h5><b>Datos del Usuario al que se brindó el Servicio y la Forma de Pago</b></h5>
                    <div class="col-xl-2 col-md-3">
                        <label for="tipo-documento"><b>Tipo de Documento</b></label><br>
                        <select class="form-select" name="tipo-documento" id="tipo-documento" >
                            <option value="Sin Documento">Sin Documento</option>
                            <option value="RUC" selected>RUC</option>
                            <option value="DNI">DNI</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CED. DIPLOMÁTICA DE IDENTIDAD">Cédula Diplomática de Identidad</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <label for="numero-documento"><b>Número de Documento</b></label><br>
                        <input type="text" class="input-recibo" id="numero-documento" name="numero-documento" placeholder="Ejemplo: 12345678901" required>
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
                    <h5><b>Datos del Servicio Prestado</b></h5>
                    <div class="col-xl-2 col-md-4">
                        <label for="es-gratuito"><B>¿El Servicio se prestó a Título Gratuito?</B></label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="es-gratuito" id="flexRadioDefault1" value="si">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="es-gratuito" id="flexRadioDefault2" value="no" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-8">
                        <label for="descripcion"><b>Descripción del Servicio</b></label><br>
                        <input type="text" class="input-recibo" id="descripcion" name="descripcion" required>
                    </div>

                    <div class="col-xl-3 col-md-8">
                        <label for="observacion"><b>Observación(Opcional)</b></label><br>
                        <input type="text" class="input-recibo" id="observacion" name="observacion">
                    </div>

                    <div class="col-xl-2 col-md-4">
                        <label for="fecha-emision"><b>Fecha de Emisión</b></label><br>
                        <input type="date" class="input-recibo" id="fecha-emision" name="fecha-emision" value='<?php echo $fechaActual; ?>' min="<?=$fechaAnterior?>" max="<?=$fechaActual?>">
                    </div>

                </div><br>

                <div class="row datos">
                    <h5><b>Información Adicional</b></h5>
                    <div class="col-xl-3 col-md-6">
                        <label for="tipo-renta"><b>Tipo de Renta de Cuarta Categoría</b></label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo-renta" id="inciso-a" checked value="A">
                            <label class="form-check-label" for="inciso-a" title="Inciso A: El desempeño de funciones de director de empresas, sindico, mandatario, gestor de negocios, albacea y actividades similares, incluyendo el desempeño de funciones del consejero regional, por las cuales perciban dietas.">
                                Inciso A
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo-renta" id="inciso-b" value="B">
                            <label class="form-check-label" for="inciso-b" title="Inciso B: El ejercicio individual, de cualquier profesión, arte, ciencia, oficio o actividades no incluídas expresamente en la tercera categoría.">
                                Inciso B
                            </label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6"  onchange="actualizarMontos()">
                        <label for="hay-retencion"><b>Retención del Impuesto a la Renta</b></label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-retencion" id="si1" value="si">
                            <label class="form-check-label" for="si1" >
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-retencion" id="no1" value="no"  checked>
                            <label class="form-check-label" for="no1">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <label for="hay-pago"><b>¿Se efectuó el Pago Total del Servicio?</b></label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-pago" id="si2" checked value="si">
                            <label class="form-check-label" for="si2">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-pago" id="no2" value="no" disabled>
                            <label class="form-check-label" for="no2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <label for="medio-pago"><b>Medio de Pago</b></label><br>
                        <select class="form-select" name="medio-pago" id="medio-pago" >
                            <option value="Depósito en Cuenta">Depósito en Cuenta</option>
                            <option value="Giro">Giro</option>
                            <option value="Transferencia de fondos">Transferencia de fondos</option>
                            <option value="Orden de Pago">Orden de Pago</option>
                            <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                            <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                            <option value="Efectivo" selected>Efectivo</option>
                        </select>
                    </div>
                </div><br>

                <div class="row datos">
                    <h5><b>Monto de los Honorarios</b></h5>

                    <div class="col-xl-2 col-md-3">
                        <label for="tipo-moneda"><b>Tipo de Moneda</b></label><br>
                        <select class="form-select" name="tipo-moneda" id="tipo-moneda">
                            <option value="SOLES" selected>SOL</option>
                            <option value="DOLARES">DOLAR</option>
                            
                        </select>
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="monto-total"><b>Monto total</b></label><br>
                        <input type="number" class="input-recibo" id="monto-total" name="monto-total" step="0.01" oninput="actualizarMontos()" required placeholder="0.00">
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="retencion"><b>Retención (8%)</b></label><br>
                        <input type="text" class="input-recibo" id="retencion" disabled value="0" step="0.01">
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
      <p class="text-muted">Desarrollado por el Grupo 10 del curso de Contabilidad, Costos y Presupuestos</p>

   </footer>

    <script src="formulario.js"></script>

</body>

</html>