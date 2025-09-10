function negativo(){
    let numero = document.getElementById("numero").value;
    let resultado = document.getElementById("resultado");

    if (numero < 0){
        resultado.innerHTML = "El numero " + numero + " es negativo"
    } else{
         resultado.innerHTML = "El numero " + numero + " es positivo"
    }
        console.log(resultado)

}