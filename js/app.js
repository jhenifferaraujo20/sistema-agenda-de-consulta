function Periodo(){
    let hora = document.getElementById("hora").value;
    let horaCompleta = hora.split(":");
    let horaNumero = parseInt(horaCompleta[0]);

    if(horaNumero >= 7 && horaNumero <= 12){
        document.getElementById("periodo").value = "Manhã"
    }else if(horaNumero > 12 && horaNumero <= 18){
        document.getElementById("periodo").value = "Tarde"
    }else{
        document.getElementById("periodo").value = "Noite"
    }
}
