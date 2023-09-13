function actualizarMontos(){
    let montoTotal = document.getElementById("monto-total").value;
    document.getElementById("retencion").value = 0;
    

    if(document.getElementById("si1").checked){
        document.getElementById("retencion").value = montoTotal * (8/100);
        document.getElementById("total-neto").value = montoTotal- montoTotal * (8/100);
    }else{
        document.getElementById("total-neto").value = montoTotal;
    }

    
}