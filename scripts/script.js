// Validacion para cuadrado y circulo ya que tienen un solo input
function ValidaNum() {
    if (document.getElementById("num") == null) return true;
    let num = document.getElementById("num").value;
    let inputNum = document.getElementById("num");
    let error = document.getElementById("error");

    if (num == "") {
        error.innerHTML = "El campo no debe estar vacío";
        inputNum.classList.add('error-input');
        return false;
    }

    if (isNaN(num)) {
        error.innerHTML = "El campo debe ser un número";
        inputNum.classList.add('error-input');
        return false;
    } else if (num <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        inputNum.classList.add('error-input');
        return false;
    } else {
        error.innerHTML = "";
        inputNum.classList.remove('error-input');
        return true;
    }
}

 function ValidaTrianguloLado1(){
 if (document.getElementById("lado1") == null) return true;
 let lado1 = document.getElementById("lado1").value;
 let inputLado1 = document.getElementById("lado1");
 let error = document.getElementById("error_triangulo1");


    if (lado1 == "") {
        error.innerHTML = "El campo no debe estar vacío";
        inputLado1.classList.add('error-input');
        return false;
    } if (isNaN(lado1)) {
        error.innerHTML = "El campo debe ser un número";
        inputLado1.classList.add('error-input');
        return false;
    } else if (lado1 <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        inputLado1.classList.add('error-input');
        return false;
    } else {
        error.innerHTML = "";
        inputLado1.classList.remove('error-input');
        return true;
}
}

function ValidaTrianguloLado2(){
    if (document.getElementById("lado2") == null) return true;
    let lado2 = document.getElementById("lado2").value;
    let inputLado2 = document.getElementById("lado2");
    let error = document.getElementById("error_triangulo2");
    
    if (lado2 == "") {
        error.innerHTML = "El campo no debe estar vacío";
        inputLado2.classList.add('error-input');
        return false;
    } if (isNaN(lado2)) {
        error.innerHTML = "El campo debe ser un número";
        inputLado2.classList.add('error-input');
        return false;
    } else if (lado2 <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        inputLado2.classList.add('error-input');
        return false;
    } else {
        error.innerHTML = "";
        inputLado2.classList.remove('error-input');
        return true;
    }
}

function ValidaTrianguloLado3(){
    if (document.getElementById("lado3") == null) return true;
    let lado3 = document.getElementById("lado3").value;
    let inputLado3 = document.getElementById("lado3");
    let error = document.getElementById("error_triangulo3");
    
    if (lado3 == "") {
        error.innerHTML = "El campo no debe estar vacío";
        inputLado3.classList.add('error-input');
        return false;
    } if (isNaN(lado3)) {
        error.innerHTML = "El campo debe ser un número";
        inputLado3.classList.add('error-input');
        return false;
    } else if (lado3 <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        inputLado3.classList.add('error-input');
        return false;
    } else {
        error.innerHTML = "";
        inputLado3.classList.remove('error-input');
        return true;
    }
}

function ValidaBaseRectangulo() {
    if (document.getElementById("base") == null) return true;
    let baseRectangulo = document.getElementById("base").value;
    let inputBaseRectangulo = document.getElementById("base");
    let error = document.getElementById("error_rectangulo");

    if (baseRectangulo == "") {
        error.innerHTML = "El campo no debe estar vacío";
        inputBaseRectangulo.classList.add('error-input');
        return false;
    } if (isNaN(baseRectangulo)) {
        error.innerHTML = "El campo debe ser un número";
        inputBaseRectangulo.classList.add('error-input');
        return false;
    } else if (baseRectangulo <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        inputBaseRectangulo.classList.add('error-input');
        return false;
    } else {
        error.innerHTML = "";
        inputBaseRectangulo.classList.remove('error-input');
        return true;
    }
}

function ValidaAlturaRectangulo() {
    if (document.getElementById("altura") == null) return true;
    let alturaRectangulo = document.getElementById("altura").value;
    let inputAlturaRectangulo = document.getElementById("altura");
    let error = document.getElementById("error_rectangulo2");
    console.log('alturaRectangulo : ' + alturaRectangulo);

    if (alturaRectangulo == "") {
        error.innerHTML = "El campo no debe estar vacío";
        inputAlturaRectangulo.classList.add('error-input');
        return false;
    } else if (isNaN(alturaRectangulo)) {
        error.innerHTML = "El campo debe ser un número";
        inputAlturaRectangulo.classList.add('error-input');
        return false;
    } else if (alturaRectangulo <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        inputAlturaRectangulo.classList.add(' error-input');
        return false;

    } else {
        error.innerHTML = "";
        inputAlturaRectangulo.classList.remove('error-input');
        return true;
    }
}

function ValidaForm(e) {
    if (ValidaNum() && ValidaBaseRectangulo() && ValidaAlturaRectangulo() && ValidaTrianguloLado1() && ValidaTrianguloLado2() && ValidaTrianguloLado3()){
        return ValidaNum() && ValidaBaseRectangulo() && ValidaAlturaRectangulo() && ValidaTrianguloLado1() && ValidaTrianguloLado2() && ValidaTrianguloLado3();
    } else {
        e.preventDefault();
        return false;
    }

    
}