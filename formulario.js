function actualizarMontos(){
    var montoTotal = document.getElementById("monto-total").value;

    /*
    if(montoTotal >= 1500){
        document.getElementById("si1").removeAttribute("disabled");
        //document.getElementById("si1").checked = true;
        //document.getElementByName("hay-retencion").value = "si";
        //document.getElementById("no1").setAttribute("disabled","true");
    }else{
        
        document.getElementById("no1").checked = true;
        //document.getElementByName("hay-retencion").value = "no";
        document.getElementById("si1").disabled = true;
    }
    */
    

    if(document.getElementById("si1").checked == true){
        document.getElementById("retencion").value = montoTotal * (8/100);
        document.getElementById("total-neto").value = montoTotal- montoTotal * (8/100);
    }else{
        if(document.getElementById("no1").checked == true){
            document.getElementById("retencion").value = 0;
            document.getElementById("total-neto").value = montoTotal;
        }
    }

    
}


var formulario = document.getElementById("formulario");

// Agrega un evento "submit" al formulario
formulario.addEventListener("submit", function(event) {
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