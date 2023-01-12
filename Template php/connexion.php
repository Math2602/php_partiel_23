<?php

$server = "localhost"; 
$user = "root";
$pass = "root";
$database = "php_partiel";



$conn = mysqli_connect($server, $user, $pass, $database); 

if (!$conn) {
    die("Erreur : " . mysqli_connect_error());
}
echo "Connexion réussie";

mysqli_close($conn);

   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS
?>


