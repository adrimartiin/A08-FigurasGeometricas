<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.min.css" integrity="sha256-qWVM38RAVYHA4W8TAlDdszO1hRaAq0ME7y2e9aab354=" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Figuras Geométricas</title>
</head>
<body>

<div class="container">
    <div class="main-title">
        <h2 class="fira-sans-condensed-extralight">Figuras Geométricas</h2>
    </div>
    
    <form action="./proc/procComprobacion.php" method="post">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.all.min.js" integrity="sha256-WLPV1xrJUZx5TVzM44uDSNXrc7bXOMxSsbrQ/FC9x7M=" crossorigin="anonymous"></script>
<script>
    const url = new URLSearchParams(window.location.search);
    if(url.get('error') === '1'){
        Swal.fire({
        icon: "error",
        title: "No se ha seleccionado una figura!",
        text: "No puedes acceder si no se selecciona una figura!",
        confirmButtonText: "Aceptar"
        });
    }

    if(url.get('error') === '2'){
        Swal.fire({
        icon: "error",
        title: "No se ha seleccionado una figura!",
        text: "No puedes acceder si no se selecciona una figura!",
        confirmButtonText: "Aceptar"
        });
    }

    
</script>
</body>
</html>
