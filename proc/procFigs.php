<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $figuraSeleccionada = $_POST['figura'];

    echo "<h2> Figura Seleccionada: $figuraSeleccionada </h2>";

    switch ($figuraSeleccionada){
        case 'Cuadrado':
            echo "<label>" . $figuraSeleccionada . "</label>";
            echo "<input type'number' name='lado' placeholder='Introduce el lado'>";
        break;

        case 'Triangulo':
            echo "<label>" . $figuraSeleccionada . "</label>";
            echo "<input type'number' name='lado1' placeholder='Introduce el primer lado'>";
            echo "<input type'number' name='lado2' placeholder='Introduce el segundo lado'>";
            echo "<input type='number' name='lado3' placeholder='Introduce el tercer lado'>";
        break;

        case 'Circulo':
            echo "<label>" . $figuraSeleccionada . "</label>";
            echo "<input type'number' name='radio' placeholder='Introduce el radio del circulo'>";
        break;

        case 'Rectangulo':
            echo "<label>". $figuraSeleccionada. "</label>";
            echo "<input type'number' name='base' placeholder='Introduce la base del rectangulo'>";
            echo "<input type'number' name='altura' placeholder='Introduce la altura del rectangulo'>";
        break;

    }
}