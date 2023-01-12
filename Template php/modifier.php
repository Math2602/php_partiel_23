<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier l'employé : <?= $row['nom'] ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="nom">
            <label>Prénom</label>
            <input type="text" name="prenom" value="prenom">
            <label>âge</label>
            <input type="number" name="age" value="age">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>

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



</body>






</html>