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
            <form action="../resultados.php" method="post">
            <?php
                if(isset($_POST['figura'])){
                    $figuraSeleccionada = $_POST['figura'];
                    echo "<h2 class='figure-title'> Figura Seleccionada: ".  ucfirst($figuraSeleccionada) ."</h2>";
                    echo "<div class='input-group'>";
                    
                    switch ($figuraSeleccionada){
                        case 'cuadrado':
                            echo "<input type='hidden' name='figura' value='cuadrado'>";
                            echo "<input type='number' name='lado' step='0.01' placeholder='Introduce el lado'><br><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;

                        case 'triangulo': 
                            echo "<input type='hidden' name='figura' value='triangulo'>";
                            echo "<input type='number' name='lado1' step='0.01' placeholder='Introduce el primer lado'><br>";
                            echo "<input type='number' name='lado2' step='0.01' placeholder='Introduce el segundo lado'><br>";
                            echo "<input type='number' name='lado3' step='0.01' placeholder='Introduce el tercer lado'><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;

                        case 'circulo':
                            echo "<input type='hidden' name='figura' value='circulo'>";
                            echo "<input type='number' name='radio' step='0.01' placeholder='Introduce el radio del circulo'><br><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;

                        case 'rectangulo':
                            echo "<input type='hidden' name='figura' value='rectangulo'>";
                            echo "<input type='number' name='base' step='0.01' placeholder='Introduce la base del rectangulo'><br><br>";
                            echo "<input type='number' name='altura' step='0.01' placeholder='Introduce la altura del rectangulo'><br><br>";
                            echo "<input type='submit' value='Calcular'>";
                        break;
                    }
                    echo "</div>"; 
                } else {
                    echo "<p>No se ha seleccionado ninguna figura</p>";
                }
            ?>
            </form>
        </div> 
    </div> 
</body>
</html>
