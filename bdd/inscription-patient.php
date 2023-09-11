<?php

  $serveur = "localhost";
   $dbname = "memoire";
   $user = "root";
   $pass = "";
   
   $nom = htmlspecialchars($_POST['nom']);
   $prenom= htmlspecialchars($_POST['prenom']);
   $email = htmlspecialchars($_POST['email']);
   $conf_email = htmlspecialchars($_POST['conf_email']);
   $mdp = sha1($_POST['mdp']);
   $age=  htmlspecialchars( $_POST['age']);
   $sexe=  htmlspecialchars($_POST['sexe']);

   try{
     //On se connecte à la BDD
     $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 
        
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['conf_email']) AND !empty(sha1($_POST['mdp']))) {
           $nomlength = strlen($nom);
           $prenomlength = strlen($prenom);
           if( ($nomlength <= 30 ) and ($prenomlength<=30)) {
              if($email == $conf_email) {
                 if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $dbco->prepare("SELECT * FROM inscription WHERE email=?");
                    $reqmail->execute(array($email));
                    $emailexist = $reqmail->rowCount();
                    if($emailexist == 0) {
                     $sth = $dbco->prepare(" INSERT INTO inscription (nom, prenom, email, conf_email,mdp,age,sexe)
                     VALUES(:nom, :prenom, :email, :conf_email, :mdp,:age,:sexe)");
                 $sth->bindParam(':nom',$nom);
                 $sth->bindParam(':prenom',$prenom);
                 $sth->bindParam(':email',$email);
                 $sth->bindParam(':conf_email',$conf_email);
                 $sth->bindParam(':mdp',$mdp);
                 $sth->bindParam(':age',$age);
                 $sth->bindParam(':sexe',$sexe);
             
              
                     $sth->execute();
                          $erreur = "Votre compte a bien été créé ! <a href=\"../html/accueil.php\">Me connecter</a>";
                    } else {
                       $erreur = "Adresse mail déjà utilisée !<a href=\"../html/accueil.php\">cliquez ici pour revenir a l accueil</a>";
                    }
                 } else {
                    $erreur = "Votre adresse mail n'est pas valide ! <a href=\"../html/accueil.php\">cliquez ici pour revenir a l accueil</a>";
                 }
              } else {
                 $erreur = "Vos adresses mail ne correspondent pas ! <a href=\"../html/accueil.php\">cliquez ici pour revenir a l accueil</a>";
              }
           } else {
              $erreur = "Votre nom et prenom ne doivent pas dépasser 30 caractères ! <a href=\"../html/accueil.php\">cliquez ici pour revenir a l accueil</a>";
           }
        } else {
           $erreur = "Tous les champs doivent être complétés !<a href=\"../html/accueil.php\">cliquez ici pour revenir a l accueil</a>";
        }
     }
    
      catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
       }
?>
<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page4.css">  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=xzZ-rVr0qOX36uzxYEqPSXXFaFIhSGeJPjmRKLxBNQRUdy1TDeaYJx5KPGZR2hPDYMtz8J0rjJstajfPx1FijRP9vJvcfJ3CdL4HdVZ3sA6PXEDHc6K2ANqP9mwZOb-U0Vav780urjPz8GTzqvGxZI8iF9Gbi0qkGkfYP1HfUzxXjDuREUAEHzIzb7y3sm6hSpBgfwUXKomhd2qEJf62_oHiOcZDKH24HblCUVEFq6nU7dSB_y_KYnqDEAFDh1o6COhXtRkcqeGJd-uU0KE2iXMXOH3kTfcxSmEVwPCo8N3ShB3OQa8dK2uhvadfYVeAmQAZmnnxt1sWmIJ70Kf-Wg" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title>reponse</title>

    
</head>
<body  style=" background-color:#cccccc;">
    <header style=" background-color:#fff;">
    
        <div class="logo" style=" margin-top: -25px;" >
       <img src="../photo/logomod.png" alt="logo"></img>
       </div>
       </header>
    
    
       <div class="continer">
       <div class="alert alert" role="alert"style="color: #383d41; background-color: #e2e3e500; border-color: #d6d8db00;">
       <?php
        if(isset($erreur)) {
           echo '<font color="">'.$erreur."</font>";
       }
    ?>
     
    

    
             </div>
             </div>
             
            </body>
            </html>