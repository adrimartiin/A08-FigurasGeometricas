<?php
 session_start();

if(isset($_POST['figura'])){
    $figuraSeleccionada = $_POST['figura'];
    $_SESSION['figura'] = $figuraSeleccionada;
    $_SESSION['exito'] = true;
    $figura = true;
    header('Location: procFigs.php');
}else {
        header("Location: ../index.php?error=1");
        exit();
    }