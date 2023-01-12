<!DOCTYPE html>
<html lang="en">
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


   include('connexion.php'); // on précise a la page de run le fichier db.php avant de run ce fichier ci, il va nous connecter a la db
   if (isset($_POST['ajouter'])) { //si l'utilisateur a cliqué sur le bouton enregistrer du formulaire HTML ci dessous
   
   
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $age = $_POST['age'];
    
     
     //récupérer les données mentionnées dans le formulaire et leur donner des nom de variables 
   
     $select = mysqli_query($conn, "SELECT * FROM utilisateur WHERE nom = '".$_POST['nom']."'"); //ici je défini la variable select, on demande a mysqli de rechercher
     // dans la base de données 'users' et dans la colonne 'email' là ou un endroit est égal a l'email mentionné dans le formulaire
   
   if (mysqli_num_rows ($select) > 0) { //si mysqli a trouvé plus de 0 email similaires a celui mentionné dans le formulaire (donc 1)
     header ('index.php'); 
     echo "<center>Ce nom est déjà enregistrée.</center>";
     //on redirige vers la page index.php et on affiche un message sans faire l'inscription
   
   } else {
     $req = "INSERT INTO utilisateur(nom, prenom, email) VALUES(?,?,?,?)";
     $execute = $pdo->prepare($req);
     $stm = $execute->execute([$nom, $prenom, $email, $mdp]);
     echo "<center>Inscription effectuée avec succès !</center>";
     //sinon, on défini la variable req, qui va demander d'insérer les valeurs données plus tard dans les colonnes de la db users
     //ensuite on va définir la variable execute, qui va demander au PDO (mis en place dans db.php) de 'préparer' les choses demandées dans la variable req
     //enfin, la variable stm (composée de prepare et execute voir https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php) va exécuter la requete 
     //(req) préparée plus haut en utilisant les variables du formulaire
     
   }
   }
   


   
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un utilisateur</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>âge</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>