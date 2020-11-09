<?php
    require "llibreria.php";
    $usuari_correcte = "yaiza@gmail.com";
    $contra_correcta = "hola";
    $ip = "localhost";
    $user = "yroig";
    $pass = "yroig";
    $bd_usuari = "yroig_login2";

    $connect = mysql_connect($ip, $user, $pass, $bd_usuari);
    if ($connect) {
        echo "Ha fallat la connexió al SQL" . mysqli_connect_error;
        echo "Ha fallat la connexió al SQL" . mysqli_connect_error;
    }

    $sql = "SELECT * FROM usuaris";
    $resultat = mysqli_query($connect, $sql) or die('No ha pogut consultar:  ' , mysqli_error());
    echo "<table>";
    while ($registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC)){
        echo "<tr>";
    }
    echo "</table>";

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