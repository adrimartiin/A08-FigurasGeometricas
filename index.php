<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Figuras Geométricas</title>
</head>
<body>

<div class="container">
    <div class="main-title">
        <h2 class="fira-sans-condensed-extralight">Figuras Geométricas</h2>
    </div>
    
    <form action="./proc/procFigs.php" method="post">
        <div class="inputs-container">
            
            <div class="container-cuadrado">
                <button type="submit" name="figura" value="cuadrado" class="add-cuadrado">
                    <img src="./img/img_cuadrado.png">
                </button>
            </div>
            
            
            <div class="container-triangulo">
                <button type="submit" name="figura" value="triangulo" class="add-triangulo">
                    <img src="./img/img_triangulo.png">
                </button>
            </div>

            
            <div class="container-circulo">
                <button type="submit" name="figura" value="circulo" class="add-circulo">
                    <img src="./img/img_circulo.png">
                </button>
            </div>

            
            <div class="container-rectangulo">
                <button type="submit" name="figura" value="rectangulo" class="add-rectangulo">
                    <img src="./img/img_rectangulo.png">
                </button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
