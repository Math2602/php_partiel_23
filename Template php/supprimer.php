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


?>



  //connexion a la base de données

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php
