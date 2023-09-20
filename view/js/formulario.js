// EVENTO DE BOTON VALIDAR
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
                        
                        document.getElementById("domicilio").value ="";
                        
                    }


                }
            });
            break;
        default:
            break;

            
    }



})


// FUNCIONES DE EVENTOS
function actualizarMontos() {
    var montoTotal = document.getElementById("monto-total").value;

    if (document.getElementById("si1").checked == true) {
        document.getElementById("retencion").value = montoTotal * (8 / 100);
        document.getElementById("total-neto").value = montoTotal - montoTotal * (8 / 100);
    } else {
        if (document.getElementById("no1").checked == true) {
            document.getElementById("retencion").value = 0;
            document.getElementById("total-neto").value = montoTotal;
        }
    }


}


var formulario = document.getElementById("formulario");

// Agrega un evento "submit" al formulario
formulario.addEventListener("submit", function (event) {
    var montoTotal = document.getElementById("monto-total").value;
    var retencion = document.getElementById("retencion").value;
    var moneda = document.getElementById("tipo-moneda").value;

    // Muestra una alerta de confirmación
    var mensaje = "¿Estás seguro de que deseas EMITIR este Recibo por Honorarios por un MONTO TOTAL de " + montoTotal + " " + moneda + " y con una RETENCIÓN DEL IR de " + retencion + " " + moneda + " ?";

    var confirmacion = confirm(mensaje);

    // Si el usuario hace clic en "Aceptar", el formulario se enviará,
    // de lo contrario, se detendrá el envío del formulario
    if (!confirmacion) {
        event.preventDefault(); // Detener el envío del formulario
    }
});

function cambiarDocumento(){
    document.getElementById("numero-documento").value = "";
    document.getElementById("razon-social").value = "";
    document.getElementById("domicilio").value = "";
}