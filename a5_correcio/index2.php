<?php

$conn = new mysqli('localhost', 'yroig', 'yroig', 'yroig_login2');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email="yaiza@gmail.com";
$pass="0000";
$sql = "SELECT * FROM usuaris where email='$email' and password=md5('$pass') ";

if (!$resultado = $conn->query($sql)) {
    die("error ejecutando la consulta:".$conn->error);
}
echo $resultado->num_rows."<br>";
if ($resultado->num_rows >= 0) {

    while ($usuari = $resultado->fetch_assoc()) {
       echo $usuari["id"].",".$usuari["nom"].",".$usuari["email"].",".$usuari["password"]."<br>";
        
    }

}

$resultado->free();
$conn->close();

?>

hola