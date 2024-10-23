<?php
session_start();
if (isset($_POST['figura'])) {
    $figura = $_POST['figura'];
    switch ($figura) {
        case 'cuadrado':
            if (isset($_POST['lado'])) {
                $_SESSION['lado'] = $_POST['lado'];
                header("Location:../resultados.php");
            } else {
                echo "No se ha proporcionado el lado del cuadrado.";
            }
            break;
        case 'triangulo':
            if (isset($_POST['lado1'], $_POST['lado2'], $_POST['lado3'])) {
                $_SESSION['lado1'] = $_POST['lado1'];
                $_SESSION['lado2'] = $_POST['lado2'];
                $_SESSION['lado3'] = $_POST['lado3'];
                header("Location:../resultados.php");
            } else {
                echo "No se han proporcionado todos los lados del triángulo.";
            }
            break;
        case 'circulo':
            if (isset($_POST['radio'])) {
                $_SESSION['radio'] = $_POST['radio'];
                header("Location:../resultados.php");
            } else {
                echo "No se ha proporcionado el radio del círculo.";
            }
            break;
        case 'rectangulo':
            if (isset($_POST['base'], $_POST['altura'])) {
                $_SESSION['base'] = $_POST['base'];
                $_SESSION['altura'] = $_POST['altura'];
                header("Location:../resultados.php");
            } else {
                echo "No se han proporcionado la base y la altura del rectángulo.";
            }
            break;
    }
} else {
    echo "No se ha seleccionado ninguna figura.";
}


