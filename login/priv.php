<?php
    session_start();

    if (empty($_SESSION["usuari"])) {
        header("Location: login_YaizaRoig.php");
        exit();
    }
    echo "Usuari correcte";
    ?>

    <p>
        Hola Yaiza, inici correcte.
    </p>
    <a href="logout.php">Tanca sessió</a>