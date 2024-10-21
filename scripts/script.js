// Validacion para cuadrado y circulo ya que tienen un solo input
function ValidaNum(){
    let num = document.getElementById("num").value;
    let error = document.getElementById("error");

    if (num == "") {
        error.innerHTML = "El campo no debe estar vacío";
        return false;
    } if(isNaN(num)){ 
        error.innerHTML = "El campo debe ser un número";
        return false;
    } else if (num <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        return false;
    } else {
        error.innerHTML = "";
        return true;
    }
}

function ValidaTriangulo(){
    let triangulo = document.getElementById("triangulo").value;
    let error = document.getElementById("error_triangulo");
    f
    if (triangulo == "") {
        error.innerHTML = "El campo no debe estar vacío";
        return false;
    } if(isNaN(triangulo)){ 
        error.innerHTML = "El campo debe ser un número";
        return false;
    } else if (triangulo <= 0) {
        error.innerHTML = "Para operar con el campo se debe ingresar un número mayor a 0";
        return false;
    } else {
        error.innerHTML = "";
        return true;
    }


}
function ValidaForm(){
    return ValidaNum() && ValidaTriangulo();
}