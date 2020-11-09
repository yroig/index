<?php
    $conn = new mysqli('localhost', 'yroig', 'yroig', 'yroig_login2');

    require "llibreria.php";
    $usuari_correcte = "yaiza@gmail.com";
    $contra_correcta = "hola";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM usuaris ";
    $resultat = $conn->prepare($sql);
    
    if (!$resultat = $conn->query($sql)){
        die("error executant la consulta: ".$conn->error);
    }

    echo $resultat->num_rows."<br>";
    if ($resultat->num_rows>=0){
        while ($usuari = $resultat->fetch_assoc()){
            echo $usuari["id"].",".$usuari["nom"].",".$usuari["email"].",".$usuari["contrasenya"]."<br>";
        }
    }
    if (($_REQUEST["usuari"]) == "yroig" && ($_REQUEST["constrasenya"]) == "hola"){
        if($resultat->num_rows >0){
            while ($usuari = $resultat->fetch_assoc()){
                if($_REQUEST["usuari"] == $usuari["nom"] && $_REQUEST["contrasenya"] == $usuari["contrasenya"]){
                    $_SESSION['usuari'] = ($usuari['usuari']);
                    $_SESSION['contrasenya'] = ($password['contrasenya']);
                    $conn->close();
                }
            }
        }
        session_start();
        $_SESSION["usuari"] = $usuari;
        header("Location: priv.php");
    } else {
        echo "L usuari o la contrasenya son incorrectes";
    }
?>
    <br>
    <a href="logout.php">Tanca sessió</a>