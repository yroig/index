<?php
    require "llibreria.php";
    $usuari_correcte = "yaiza@gmail.com";
    $contra_correcta = "hola";

    $usuari = $_POST["usuari"];
    $contra = $_POST["contra"];
    if ($usuari === $usuari_correcte && $contra === $contra_correcta) {
        session_start();
        $_SESSION["usuari"] = $usuari;
        header("Location: priv.php");
    } else {
        echo "L'usuari o la contrasenya son incorrectes";
    }
?>
    <br>
    <a href="logout.php">Tanca sessió</a>