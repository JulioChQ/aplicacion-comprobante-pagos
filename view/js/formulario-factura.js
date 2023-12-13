$("#validar").click(function () {
    var tipoDocumento = $("#tipo-documento").val();
    var numeroDocumento = $("#numero-documento").val();
    console.log(numeroDocumento);

    switch (tipoDocumento) {
        case "RUC":
            $.ajax({
                type: "POST",
                url: "controller/consultar-ruc.php",
                data: 'ruc=' + numeroDocumento,
                dataType: 'json',
                success: function (data) {


                    if (data == 1) {
                        alert('El RUC tiene que tener 11 digitos');
                    }
                    else {
                        console.log(data);
                        document.getElementById("razon-social").value = data.razonSocial;
                        let domicilio = "" + data.direccion + " " + data.departamento + " - " + data.provincia + " - " + data.distrito + "";
                        document.getElementById("domicilio").value = domicilio;

                    }
                }
            });
            break;
        case "DNI":
            $.ajax({
                type: "POST",
                url: "controller/consultar-dni.php",
                data: 'dni=' + numeroDocumento,
                dataType: 'json',
                success: function (data) {
                    if (data == 1) {
                        alert('El DNI tiene que tener 8 digitos');
                    }
                    else {
                        console.log(data);
                        nombreCompleto = data.apellidoPaterno + " " + data.apellidoMaterno + ", " + data.nombres;
                        document.getElementById("razon-social").value = nombreCompleto;

                        document.getElementById("domicilio").value = "";

                    }


                }
            });
            break;
        default:
            break;


    }



})

function actualizarResumen() {
    var listaProductos = document.getElementById('lista-productos');
    var total = 0;

    for (var i = 1; i < listaProductos.rows.length; i++) { // Comenzamos en 1 para omitir la fila de encabezado
        var precio = parseFloat(listaProductos.rows[i].cells[8].innerHTML); // Suponiendo que el precio está en la segunda celda (índice 1)

        if (!isNaN(precio)) {
            total += precio;
        }
    }
    var igv = total * (18/100);
    var gravada = total - igv;

    document.getElementById("gravada").value = gravada;
    document.getElementById("igv").value = igv;
    document.getElementById("total").value = total;
}

function agregarProducto() {
    let id = document.getElementById("id-producto").value;
    let descripcion = document.getElementById("descripcion-producto").value;
    let cantidad = document.getElementById("cantidad-producto").value;
    let precio = document.getElementById("precio-producto").value;

    var listaProductos = document.getElementById("lista-productos").getElementsByTagName("tbody")[0];

    var newRow = listaProductos.insertRow(listaProductos.rows.length);

    // Insertar celdas con los datos del producto
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    var cell9 = newRow.insertCell(8);
    var cell10 = newRow.insertCell(9);

    cell1.innerHTML = id;
    cell1.setAttribute("name", "id-productos[]");

    cell2.innerHTML = descripcion;
    cell2.setAttribute("name", "descripcion-productos[]")

    cell3.innerHTML = "GRAVADO";
    cell4.innerHTML = "UNIDADES";
    cell5.innerHTML = precio;
    cell5.setAttribute("name", "precio-productos[]");

    cell6.innerHTML = cantidad;
    cell6.setAttribute("name", "cantidad-productos[]")
    cell7.innerHTML = precio * cantidad;
    cell8.innerHTML = (cantidad * precio) * 18 / 100;
    cell9.innerHTML = precio * cantidad;
    cell10.innerHTML = '<p class="btn btn-danger" onclick="eliminarProducto(this)">Quitar</p>';


    document.getElementById("id-producto").value = "";
    document.getElementById("descripcion-producto").value = "";
    document.getElementById("cantidad-producto").value = 1;
    document.getElementById("precio-producto").value = "0.00";
    document.getElementById("importe-producto").value = "0.00";

    actualizarResumen();
}

function eliminarProducto(row) {
    var i = row.parentNode.parentNode.rowIndex; // Obtiene el índice de la fila
    document.getElementById('lista-productos').deleteRow(i); // Elimina la fila
    actualizarResumen();
}

function actualizarImporte() {
    let cantidad = document.getElementById("cantidad-producto").value;
    let precio = document.getElementById("precio-producto").value;

    document.getElementById("importe-producto").value = cantidad * precio;
}