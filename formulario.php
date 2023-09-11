<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emisión de Recibo por Honorarios | Sistema</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>



<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <br>
                    <h3 id="titulo">Emisión de Recibo por Honorarios</h3>
                    <p>
                        Aquí puedes generar un recibo por honorarios.
                    </p>
                </div>
            </div>





            <form action="emitir-recibo.php" method="POST" target="_blank">
                <div class="row">
                    <h5>Datos del usuario al que se brindó el servicio y la Forma de Pago</h5>
                    <div class="col-xl-2 col-md-3">
                        <label for="tipo-documento">Tipo de Documento</label><br>
                        <select class="form-select" name="tipo-documento" id="tipo-documento">
                            <option value="Sin Documento">Sin Documento</option>
                            <option value="RUC" selected>RUC</option>
                            <option value="DNI">DNI</option>
                            <option value="DESTACADO">Destacado</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CED. DIPLOMÁTICA DE IDENTIDAD">Cédula Diplomática de Identidad</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <label for="numero-documento">Número de Documento</label><br>
                        <input type="text" class="input-recibo" id="numero-documento" name="numero-documento">
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <label for="razon-social">Razón Social</label><br>
                        <input type="text" class="input-recibo" id="razon-social" name="razon-social" required>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <label for="forma-pago">Elija la Forma de Pago</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="forma-pago" id="contado" checked value="AL CONTADO">
                            <label class="form-check-label" for="contado">
                                Al contado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="forma-pago" id="credito" value="AL CRÉDITO">
                            <label class="form-check-label" for="credito">
                                Al crédito
                            </label>
                        </div>
                    </div>

                </div><br>

                

                <div class="row">
                    <h5>Datos del Servicio prestado</h5>
                    <div class="col-xl-2 col-md-3">
                        <label for="es-gratuito">¿El servicio se prestó a título gratuito?</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="es-gratuito" id="flexRadioDefault1" checked value="si">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="es-gratuito" id="flexRadioDefault2" value="no">
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-5">
                        <label for="descripcion">Descripción del servicio</label><br>
                        <input type="text" class="input-recibo" id="descripcion" name="descripcion" required>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <label for="observacion">Observación(Opcional)</label><br>
                        <input type="text" class="input-recibo" id="observacion" name="observacion">
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="fecha-emision">Fecha de Emisión</label><br>
                        <input type="date" class="input-recibo" id="fecha-emision" name="fecha-emision" value='<?php echo $fechaActual; ?>'>
                    </div>

                </div><br>

                <div class="row">
                    <h5>Información Adicional</h5>
                    <div class="col-xl-3 col-md-4">
                        <label for="tipo-renta">Tipo de Renta de Cuarta Categoría</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo-renta" id="inciso-a" checked value="A">
                            <label class="form-check-label" for="inciso-a">
                                Inciso A
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo-renta" id="inciso-b" value="B">
                            <label class="form-check-label" for="inciso-b">
                                Inciso B
                            </label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <label for="hay-retencion">Retención del Impuesto a la renta</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-retencion" id="si1" checked value="si">
                            <label class="form-check-label" for="si1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-retencion" id="no1" value="no">
                            <label class="form-check-label" for="no1">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <label for="hay-pago">¿Se efectuó el pago total?</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-pago" id="si2" checked value="si">
                            <label class="form-check-label" for="si2">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hay-pago" id="no2" value="no">
                            <label class="form-check-label" for="no2">
                                No
                            </label>
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <h5>Monto de los Honorarios</h5>

                    <div class="col-xl-2 col-md-3">
                        <label for="tipo-moneda">Tipo de Moneda</label><br>
                        <select class="form-select" name="tipo-moneda" id="tipo-moneda">
                            <option value="SOLES" selected>SOL</option>
                            <option value="DOLARES">DOLAR</option>
                            
                        </select>
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="monto-total">Monto total</label><br>
                        <input type="number" class="input-recibo" id="monto-total" name="monto-total" step="0.01">
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="retencion">Retención (8%)</label><br>
                        <input type="text" class="input-recibo" id="retencion" disabled>
                    </div>

                    <div class="col-xl-2 col-md-3">
                        <label for="total-neto">Total Neto Recibido</label><br>
                        <input type="text" class="input-recibo" id="total-neto" disabled>
                    </div>
                </div><br>


                <div class="row text-center">
                    <div class="col-12">
                        <input type="submit" name="emitir-recibo" class="btn btn-primary" value="Emitir Recibo" id="generar">
                        <a class="btn btn-secondary" href="">Descartar Cambios</a>

                    </div>

                </div>



            </form>

        </div>
    </section>

</body>

</html>