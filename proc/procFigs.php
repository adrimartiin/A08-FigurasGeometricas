<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/script.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Figura Seleccionada</title>
</head>
<body>
    <div class="container">
        
        <div class="result-container">
            <form action="../resultados.php" method="post" onsubmit="ValidaForm(event)">
            <?php
                if(isset($_POST['figura'])){
                    $figuraSeleccionada = $_POST['figura'];
                    echo "<h2 class='figure-title'> Figura Seleccionada: ".  ucfirst($figuraSeleccionada) ."</h2>";
                    echo "<div class='input-group'>";
                    
                    switch ($figuraSeleccionada){
                        case 'cuadrado':
                            echo "<input type='hidden' name='figura' value='cuadrado'>";
                            echo "<label for='num'><strong>Lado del Cuadrado:</strong></label>";
                            echo "<input type='number' id='num' name='lado' step='0.01' placeholder='Introduce el lado' onblur='ValidaNum()'>";
                            echo "<span id='error' class='error'></span>";
                            echo "<input type='submit' value='Calcular'>";
                            
                        break;
                        
                        // Validacion diferente a la de un solo input 
                        case 'triangulo': 
                            echo "<input type='hidden' name='figura' value='triangulo'>";
                            echo "<label for='triangulo'><strong>Lado 1 del Triangulo (Este dato afectará al cálculo de área y perímetro):</strong></label>";
                            echo "<input type='number' id='triangulo' name='lado1' step='0.01' id='num' placeholder='Introduce el primer lado' onblur='ValidaTriangulo()'><br>";
                            echo "<label for='triangulo'><strong>Lado 2 del Triangulo: (Este dato afectará al cálculo de área y perímetro):</strong></label>";
                            echo "<input type='number' id='triangulo' name='lado2' step='0.01' id='num' placeholder='Introduce el segundo lado' onblur='ValidaTriangulo()'><br>";
                            echo "<label for='triangulo'><strong>Lado 3 del Triangulo: (Este dato afectará al cálculo del perímetro):</strong></label>";
                            echo "<input type='number' id='triangulo' name='lado3' step='0.01' id='num' placeholder='Introduce el tercer lado' onblur='ValidaTriangulo()'><br>";
                            echo "<span id='error_triangulo' class='error'></span>";
                            echo "<input type='submit' value='Calcular'>";
                            
                        break;
                        
                        case 'circulo':
                            echo "<input type='hidden' name='figura' value='circulo'>";
                            echo "<label><strong> Radio del Circulo:</strong></label>";
                            echo "<input type='number' id='num' name='radio' step='0.01' placeholder='Introduce el radio del circulo' onblur='ValidaNum()'>";
                            echo "<span id='error' class='error'></span>";
                            echo "<input type='submit' value='Calcular'>";
                            ;
                        break;
                        
                        // Validacion diferente a la de un solo input
                        case 'rectangulo':
                            echo "<input type='hidden' name='figura' value='rectangulo'>";
                            echo "<label><strong>Base del Rectangulo:</strong></label>";
                            echo "<input type='number' id='base' name='base' step='0.01' placeholder='Introduce la base del rectangulo' onblur='ValidaBaseRectangulo()'><br>";
                            echo "<span id='error_rectangulo' class='error'></span>";
                            echo "<label><strong> Altura del Rectangulo:</strong></label>";
                            echo "<input type='number' id='altura' name='altura' step='0.01' placeholder='Introduce la altura del rectangulo' onblur='ValidaAlturaRectangulo()'><br>";
                            echo "<span id='error_rectangulo2' class='error'></span>";
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
