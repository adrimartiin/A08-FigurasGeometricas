<?php
    session_start();
    if(isset($_SESSION['figura'])){
        session_unset();
        session_destroy();
        header ('Location: ../index.php');
        exit();
    }
?>