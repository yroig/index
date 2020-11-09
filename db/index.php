<?php

$conn = new mysqli('localhost', 'yroig', 'yroig', 'yroig_login2');

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

$resultat->free();
$conn->close();
?>
