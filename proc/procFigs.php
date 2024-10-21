<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Figura Seleccionada</title>
</head>
<body>
    <div class="container">
        
        <div class="result-container">
            <?php
                if(isset($_POST['figura'])){
                    $figuraSeleccionada = $_POST['figura'];
                    echo "<h2 class='figure-title'> Figura Seleccionada: ".  ucfirst($figuraSeleccionada) ."</h2>";
                    echo "<div class='input-group'>";
                    
                    switch ($figuraSeleccionada){
                        case 'cuadrado':
                            echo "<input type='number' name='lado' placeholder='Introduce el lado'><br><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;

                        case 'triangulo': 
                            echo "<input type='number' name='lado1' placeholder='Introduce el primer lado'><br>";
                            echo "<input type='number' name='lado2' placeholder='Introduce el segundo lado'><br>";
                            echo "<input type='number' name='lado3' placeholder='Introduce el tercer lado'><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;

                        case 'circulo':
                            echo "<input type='number' name='radio' placeholder='Introduce el radio del circulo'><br><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;

                        case 'rectangulo':
                            echo "<input type='number' name='base' placeholder='Introduce la base del rectangulo'><br><br>";
                            echo "<input type='number' name='altura' placeholder='Introduce la altura del rectangulo'><br><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;
                    }
                    echo "</div>"; 
                } else {
                    echo "<p>No se ha seleccionado ninguna figura</p>";
                }
            ?>
        </div> 
    </div> 
</body>
</html>
