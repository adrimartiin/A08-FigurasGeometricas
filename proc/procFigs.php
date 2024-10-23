<?php
    session_start();
    if(!isset($_SESSION['figura'])){
        header("Location:../index.php?error=1");
    }
    $figura = false;
    if(isset($_SESSION['exito']) && $_SESSION['exito']){
        $figura = true;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.min.css" integrity="sha256-qWVM38RAVYHA4W8TAlDdszO1hRaAq0ME7y2e9aab354=" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Figura Seleccionada</title>
</head>
<body>
    <div class="container">
        
        <div class="result-container">
            <form action="procFigsResultados.php" method="post" onsubmit="ValidaForm(event)">
            <?php

                    echo "<h2 class='figure-title'> Figura Seleccionada: ".  ucfirst($_SESSION['figura']) ."</h2>";
                    echo "<div class='input-group'>";
                    
                    switch ($_SESSION['figura']){
                        case 'cuadrado':
                            echo "<input type='hidden' name='figura' value='cuadrado'>";
                            echo "<label for='num'><strong>Lado del Cuadrado:</strong></label>";
                            echo "<input type='number' id='num' name='lado' step='0.01' placeholder='Introduce el lado' onblur='ValidaNum()' value='" . (isset($_SESSION["lado"]) ? $_SESSION["lado"] : "" ) . "'>";
                            echo "<span id='error' class='error'></span>";
                            echo "<input type='submit' value='Calcular'>";
                        break;
                        
                        
                        case 'triangulo': 
                            echo "<input type='hidden' name='figura' value='triangulo'>";
                            echo "<label for='triangulo'><strong>Lado 1 del Triangulo (Este dato afectará al cálculo de área y perímetro):</strong></label>";
                            echo "<input type='number' id='lado1' name='lado1' step='0.01' placeholder='Introduce el primer lado' onblur='ValidaTrianguloLado1()' value='" . (isset($_SESSION["lado1"]) ? $_SESSION["lado1"] : "") . "'><br>";
                            echo "<span id='error_triangulo1' class='error'></span>";
                            echo "<label for='triangulo'><strong>Lado 2 del Triangulo: (Este dato afectará al cálculo de área y perímetro):</strong></label>";
                            echo "<input type='number' id='lado2' name='lado2' step='0.01' placeholder='Introduce el segundo lado' onblur='ValidaTrianguloLado2()' value='" . (isset($_SESSION["lado2"]) ? $_SESSION["lado2"] : "") . "'><br>";
                            echo "<span id='error_triangulo2' class='error'></span>";
                            echo "<label for='triangulo'><strong>Lado 3 del Triangulo: (Este dato afectará al cálculo del perímetro):</strong></label>";
                            echo "<input type='number' id='lado3' name='lado3' step='0.01' placeholder='Introduce el tercer lado' onblur='ValidaTrianguloLado3()' value='" . (isset($_SESSION["lado3"]) ? $_SESSION["lado3"] : "") . "'><br>";
                            echo "<span id='error_triangulo3' class='error'></span>";
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
                
            ?>
            </form>
        </div> 
    </div> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.all.min.js" integrity="sha256-WLPV1xrJUZx5TVzM44uDSNXrc7bXOMxSsbrQ/FC9x7M=" crossorigin="anonymous"></script>
<script>
    let swalert = <?php echo json_encode(isset($_SESSION['exito']) && $_SESSION['exito']); ?>;
if(swalert){
    Swal.fire({
        title: 'Figura Seleccionada',
        text: 'Se ha seleccionado la figura ' + "<?php echo ucfirst($_SESSION['figura']);?>",
        icon: 'success',
        confirmButtonText: 'Continuar'
    });
}

</script>
</body>
</html>

