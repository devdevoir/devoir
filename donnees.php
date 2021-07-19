<?php
    $serveur = "localhost";
    $user = "id17223843_dev";
    $pass = "mrS9}!cQd!ZI!XfV";
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $pays = $_POST["pays"];
    $password = $_POST["password"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=id17223843_devcontact",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //On insère les données reçues
        $sql=" INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `email`, `pays`, `password``) 
        VALUES('','$_POST[nom]','$_POST[prenom]','$_POST[email]','$_POST[pays]','$_POST[password]')";
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("index.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
    echo"<h2>Votre formulaire à bien été envoyer !</h2>"
?>