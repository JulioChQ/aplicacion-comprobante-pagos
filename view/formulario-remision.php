<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emisión de Guía de Remisión Remitente | Sistema</title>

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
                    <h3 id="titulo"><b>Emisión de Guía de Remisión Remitente</b></h3>
                    <p>
                        Aquí puedes generar una Guía de Remisión Remitente.
                    </p>
                </div>
            </div>





            <form action="controller/emitir-remision.php" method="POST" target="_blank" id="formulario">
                <div class="row datos">
                    <h5><b>Documento Electrónico Relacionado</b></h5>
                    <div class="col-xl-3 col-md-3">
                        <label for="tipo-documento-sunat"><b>Tipo de Doc. Electrónico</b></label><br>
                        <select class="form-select" name="tipo-documento-sunat" id="tipo-documento-sunat">
                            <option value="FACTURA">FACTURA</option>
                            <option value="BOLETA">BOLETA</option>
                        </select>
                    </div>

                    <div class="col-xl-3 col-md-3">
                        <label for="numero-documento-sunat"><b>Serie y Número</b></label><br>
                        <input type="text" class="input-recibo" id="numero-documento-sunat" name="numero-documento-sunat" placeholder="Ejemplo: F001-1" required>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <label for="motivo-traslado"><b>Motivo de Traslado</b></label><br>
                        <select class="form-select" name="motivo-traslado" id="motivo-traslado">
                            <option value="VENTA">VENTA</option>
                            <option value="COMPRA">COMPRA</option>
                            <option value="TRASLADO ENTRE ESTABLECIMIENTOS DE LA MISMA EMPRESA">TRASLADO ENTRE ESTABLECIMIENTOS DE LA MISMA EMPRESA</option>
                            <option value="IMPORTACIÓN">IMPORTACIÓN</option>
                            <option value="EXPORTACIÓN">EXPORTACIÓN</option>
                            <option value="OTROS">OTROS</option>
                        </select>
                    </div>




                </div><br>


                <div class="row datos">
                    <h5><b>Datos del Destinatario</b></h5>
                    <div class="col-xl-1 col-md-2">
                        <label for="tipo-documento"><b>Tipo de Documento</b></label><br>
                        <select class="form-select" name="tipo-documento" id="tipo-documento" onchange="cambiarDocumento()" disabled>
                            <option value="Sin Documento">Sin Documento</option>
                            <option value="RUC" selected>RUC</option>
                            <option value="DNI">DNI</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CED. DIPLOMÁTICA DE IDENTIDAD">Cédula Diplomática de Identidad</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <label for="numero-documento"><b>Número de Documento</b></label><br>
                        <input type="text" class="input-recibo" id="numero-documento" name="numero-documento" placeholder="Ejemplo: 12345678901">
                        <a class="btn btn-info" id="validar">Validar</a>
                    </div>
                    <div class="col-xl-4 col-md-7">
                        <label for="razon-social"><b>Nombre o Razón Social</b></label><br>
                        <input type="text" class="input-recibo" id="razon-social" name="razon-social" placeholder="Ingrese razón social de la empresa o nombre de la persona" required>
                    </div>

                    <div class="col-xl-5 col-md-12">
                        <label for="domicilio"><b>Domicilio</b></label><br>
                        <input type="text" class="input-recibo" id="domicilio" name="domicilio" placeholder="Ingrese el domicilio de la persona o empresa (calle, número, ciudad)">
                    </div>

                    
                </div><br>

                <div class="row datos">
                    <h5><b>Datos del Conductor y Vehículo</b></h5>
                    <div class="col-xl-2 col-md-2">
                        <label for="tipo-documento-conductor"><b>Tipo de Documento</b></label><br>
                        <select class="form-select" name="tipo-documento-conductor" id="tipo-documento-conductor" onchange="cambiarDocumento()" disabled>
                            <option value="DNI">DNI</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CED. DIPLOMÁTICA DE IDENTIDAD">Cédula Diplomática de Identidad</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <label for="numero-documento-conductor"><b>Número de Documento</b></label><br>
                        <input type="text" class="input-recibo" id="numero-documento-conductor" name="numero-documento-conductor" placeholder="Ejemplo: 12345678901">
                        
                    </div>
                    <div class="col-xl-4 col-md-7">
                        <label for="nombre-conductor"><b>Nombres y Apellidos</b></label><br>
                        <input type="text" class="input-recibo" id="nombre-conductor" name="nombre-conductor" placeholder="Ingrese nombre del conductor" required>
                    </div>

                    <div class="col-xl-2 col-md-6">
                        <label for="licencia-conductor"><b>Nro. de Licencia</b></label><br>
                        <input type="text" class="input-recibo" id="licencia-conductor" name="licencia-conductor" placeholder="Ingrese el número de licencia">
                    </div>

                    <div class="col-xl-2 col-md-6">
                        <label for="placa-vehiculo"><b>Placa del Vehículo</b></label><br>
                        <input type="text" class="input-recibo" id="placa-vehiculo" name="placa-vehiculo" placeholder="Ingrese la placa del vehículo">
                    </div>

                    
                </div><br>



                <div class="row datos">
                    <h5><b>Punto de Partida y Llegada</b></h5>

                    <div class="col-xl-6 col-md-12">
                        <label for="direccion-partida"><b>Dirección de Partida</b></label><br>
                        <input type="text" class="input-recibo" id="direccion-partida" name="direccion-partida" value="CALLE 2 DE MAYO 1001 TACNA - TACNA -
TACNA">
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <label for="direccion-llegada"><b>Dirección de Llegada</b></label><br>
                        <input type="text" class="input-recibo" id="direccion-llegada" name="direccion-llegada">
                    </div>
                </div><br>

                

                <div class="row datos">
                    <h5><b>Lista de Productos</b></h5>

                    <div class="col-xl-1 col-md-2">
                        <label for="id-producto"><b>ID</b></label><br>
                        <input type="text" class="input-recibo" id="id-producto" name="id-producto">
                    </div>

                    <div class="col-xl-9 col-md-6">
                        <label for="descripcion-producto"><b>Descripción</b></label><br>
                        <input type="text" class="input-recibo" id="descripcion-producto" name="descripcion-producto">
                    </div>

                    <div class="col-xl-1 col-md-2">
                        <label for="cantidad-producto"><b>Cant.</b></label><br>
                        <input type="number" class="input-recibo" id="cantidad-producto" name="cantidad-producto" value="1" oninput="actualizarImporte()">
                    </div>

                    

                    <div class="col-xl-1 col-md-2 text-center">
                        <a class="btn btn-success" onclick="agregarProducto()">Agregar</a>
                    </div>

                    <div class="col text-center">
                        <table class="table" id="lista-productos">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Unidad/Medida</th>
                                    <th>Cantidad</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                    </div>


                </div><br>

                <div class="row datos">
                    <h5><b>Datos de Traslado</b></h5>

                    <div class="col-xl-3 col-md-4">
                        <label for="peso-carga"><b>Peso Bruto Total de la Carga (KGM)</b></label><br>
                        <input type="number" class="input-recibo" id="peso-carga" name="peso-carga" step="0.01">
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <label for="modalidad-traslado"><b>Modalidad de Traslado</b></label><br>
                        <select class="form-select" name="modalidad-traslado" id="modalidad-traslado">
                            <option value="PRIVADO">PRIVADO</option>
                            <option value="PÚBLICO">PÚBLICO</option>
                        </select>
                    </div>

                    <div class="col-xl-3 col-md-4">
                        <label for="fecha-traslado"><b>Fecha de Inicio de Traslado</b></label><br>
                        <input type="date" class="input-recibo" id="fecha-traslado" name="fecha-traslado" value='<?php echo $fechaActual; ?>' min="<?= $fechaActual ?>" >
                    </div>
                </div><br>


                <div class="row text-center">
                    <div class="col-12">
                        <input type="submit" name="emitir-recibo" class="btn btn-primary" value="Emitir" id="generar">
                        <a class="btn btn-secondary" href="index.php?p=remision">Eliminar Datos</a>

                    </div>

                </div>



            </form>

        </div>
    </section>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-center">
        <p class="text-muted text-center">Desarrollado por el Grupo 10 del curso de Contabilidad, Costos y Presupuestos</p>

    </footer>

    <script src="view/js/formulario-remision.js"></script>


</body>

</html>