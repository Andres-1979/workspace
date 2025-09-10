function Sumar(){
    let suma1 = document.getElementById("sumando1").value;
    let suma2 = document.getElementById("sumando2").value;

    let resultado = parseInt (suma1) + parseInt(suma2);

    let resultadosuma = document.getElementById("resultadoSuma");
    resultadosuma.innerHTML = resultado;
    alert("el resultado es");
    alert(resultado);

}

function Restar(){
    let resta1 = document.getElementById("restando1").value;
    let resta2 = document.getElementById("restando2").value;

    let resultado = parseInt (resta1) - parseInt(resta2);

    let resultadosuma = document.getElementById("resultadoResta");
    resultadosuma.innerHTML = resultado;
    alert("el resultado es");
    alert(resultado);

}

function Multiplicar(){
    let multiplicar1 = document.getElementById("multiplicar1").value;
    let multiplicar2 = document.getElementById("multiplicar2").value;

    let resultado = parseInt(multiplicar1) * parseInt(multiplicar2);

    let resultadoMultiplicar = document.getElementById("resultadoMultiplicar");
    resultadoMultiplicar.innerHTML = resultado;
    alert("el resultado es");
    alert(resultado);



}

function Dividir(){
    let division1 = document.getElementById("division1").value;
    let division2 = document.getElementById("division2").value;

    let resultado = parseFloat(division1) / parseFloat(division2);

    let resultadoDivision = document.getElementById("resultadoDivision");
    resultadoDivision.innerHTML = resultado;
    alert("el resultado es");
    alert(resultado);



}