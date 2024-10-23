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

// function ValidaTriangulo(){
//     let triangulo = document.getElementById("triangulo").value;
//     let inputTriangulo = document.getElementById("triangulo");
//     let error = document.getElementById("error_triangulo");

//     if (triangulo == "") {
//         error.innerHTML = "El campo no debe estar vacío";
//         inputTriangulo.classList.add('error-input');
//         return false;
//     } if(isNaN(triangulo)){ 
//         error.innerHTML = "El campo debe ser un número";
//         inputTriangulo.classList.add('error-input');
//         return false;
//     } else if (triangulo <= 0) {
//         error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
//         inputTriangulo.classList.add('error-input');
//         return false;
//     } else {
//         error.innerHTML = "";
//         inputTriangulo.classList.remove('error-input');
//         return true;
//     }
// }

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
    if (ValidaNum() && ValidaBaseRectangulo() && ValidaAlturaRectangulo()){
        return ValidaNum() && ValidaBaseRectangulo() && ValidaAlturaRectangulo();
    } else {
        e.preventDefault();
        return false;
    }

    
}