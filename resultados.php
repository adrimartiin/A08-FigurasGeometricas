<?php
    session_start();
    if(!isset($_SESSION['figura'])){
        header("Location:./index.php?error=2");
    } 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            
            if(isset($_SESSION['figura'])){
                $figura = $_SESSION['figura'];
                echo "<h2 class='figure-title'>Cálculo de área y perímetro de la figura: " . ucfirst($figura) . "</h2>";
                
                echo "<div class='result-box'>";  

                switch ($figura){
                    case 'cuadrado':
                        if(isset($_SESSION['lado'])){
                        $lado = $_SESSION['lado'];
                        include_once './clases/Cuadrado.php';
                        $cuadrado = new Cuadrado($lado);
                        echo "<p>Área: ". $cuadrado->calculaAreaCuadrado(). "</p>";
                        echo "<p>Perímetro: ". $cuadrado->calculaPerimetroCuadrado(). "</p>";
                        } else {
                            echo "<p>No se ha proporcionado el lado del cuadrado.</p>";
                        }
                        break;
                    
                    case 'triangulo':
                        if (isset($_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3'])) {
                        $base = $_SESSION['lado1'];
                        $altura = $_SESSION['lado2'];
                        $numParaPerimetro = $_SESSION['lado3'];
                        include_once './clases/Triangulo.php';
                        $triangulo = new Triangulo($figura, $base, $altura, $numParaPerimetro);
                        echo "<p>Área: ". $triangulo->calculaAreaTriangulo(). "</p>";
                        echo "<p>Perímetro: ". $triangulo->calculaPerimetroTriangulo(). "</p>";
                        } else {
                            echo "<p>No se han proporcionado los lados del triángulo.</p>";
                        }
                        break;
                    
                    case 'circulo':
                        if(isset($_SESSION['radio'])){
                        $radio = $_SESSION['radio'];
                        include_once './clases/Circulo.php';
                        $circulo = new Circulo($radio);
                        echo "<p>Área: ". round($circulo->calcularAreaCirculo(), 2). "</p>";
                        echo "<p>Perímetro: ". round($circulo->calcularPerimetroCirculo(), 2). "</p>";
                        } else {
                            echo "<p>No se ha proporcionado el radio del círculo.</p>";
                        }
                        break;

                    case 'rectangulo':
                        if(isset($_SESSION['base'], $_SESSION['altura'])){
                        $baseRect = $_SESSION['base'];
                        $alturaRect = $_SESSION['altura'];
                        include_once './clases/Rectangulo.php';
                        $rectangulo = new Rectangulo($figura, $baseRect, $alturaRect);
                        echo "<p>Área: ". $rectangulo->calcularAreaRectangulo(). "</p>";
                        echo "<p>Perímetro: ". $rectangulo->calcularPerimetroRectangulo(). "</p>";
                        } else {
                            echo "<p>No se han proporcionado los lados del rectángulo.</p>";
                        }
                        break;
                }

                echo "</div>"; 

                
                echo "<div class='link-container'>";
                echo "<a href='./proc/procCierraSesion.php' class='btn-link'>Cerrar Sesión</a>";
                echo "<a href='./proc/procFigs.php' class='btn-link'>Volver a introducir datos</a>";
                echo "</div>";
                
            } else {
                echo "<p>No se ha seleccionado ninguna figura</p>";
            }

        ?>
    </div>
    
</body>
</html>
