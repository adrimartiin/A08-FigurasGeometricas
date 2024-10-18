<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="main-title">
        <h2 class="fira-sans-condensed-extralight">Figuras Geométricas</h2>
    </div>
    
    <form action = "./proc/procFigs.php" method="post">
    <div class="inputs-container">
        
        <div class="container-cuadrado">
            <input type="button" name="figura" class="add-cuadrado">
        </div>

        <div class="container-triangulo">
            <input type="button" name="figura"  class="add-triangulo">
        </div>

        <div class="container-circulo">
            <input type="button" name="figura" class="add-circulo">
        </div>

        <div class="container-rectangulo">
            <input type="button" name="figura"  class="add-rectangulo">
        </div>
    </div>
    </form>
    

</div>



</body>
</html>