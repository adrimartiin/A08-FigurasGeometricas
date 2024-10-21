
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
            
            if(isset($_POST['figura'])){
                $figura = $_POST['figura'];
                echo "<h2 class='figure-title'>Cálculo de área y perímetro de la figura:" . ucfirst($figura) . "</h2>";
                switch ($figura){
                    case 'cuadrado':
                        $lado = $_POST['lado'];
                        include_once './clases/Cuadrado.php';
                        $cuadrado = new Cuadrado($lado);
                        echo "<p>Área: ". $cuadrado->calculaAreaCuadrado(). "</p>";
                        echo "<p>Perímetro: ". $cuadrado->calculaPerimetroCuadrado(). "</p>";
                        break;
                    
                    case 'triangulo':
                        $base = $_POST['lado1'];
                        $altura = $_POST['lado2'];
                        $numParaPerimetro = $_POST['lado3'];
                        include_once './clases/Triangulo.php';
                        $triangulo = new Triangulo($figura, $base, $altura, $numParaPerimetro);
                        echo "<p>Área: ". $triangulo->calculaAreaTriangulo(). "</p>";
                        echo "<p>Perímetro: ". $triangulo->calculaPerimetroTriangulo(). "</p>";
                        break;
                    
                    case 'circulo':
                        $radio = $_POST['radio'];
                        include_once './clases/Circulo.php';
                        $circulo = new Circulo($radio);
                        echo "<p>Área: ". round($circulo->calcularAreaCirculo(), 2). "</p>";
                        echo "<p>Perímetro: ". round($circulo->calcularPerimetroCirculo(), 2). "</p>";
                        break;
                    case 'rectangulo':
                        $baseRect = $_POST['base'];
                        $alturaRect = $_POST['altura'];
                        include_once './clases/Rectangulo.php';
                        $rectangulo = new Rectangulo($figura, $baseRect, $alturaRect);
                        echo "<p>Área: ". $rectangulo->calcularAreaRectangulo(). "</p>";
                        echo "<p>Perímetro: ". $rectangulo->calcularPerimetroRectangulo(). "</p>";
                        break;
                    default:
                }
            } else {
                echo "<p>No se ha seleccionado ninguna figura</p>";
            }

        ?>
    </div>
    
</body>
</html>