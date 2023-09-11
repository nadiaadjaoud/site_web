<?php
    $serveur = "localhost";
    $dbname = "memoire";
    $user = "root";
    $pass = "";
    
    $nom=$_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $jour = $_POST["jour"];
    $mois= $_POST["mois"];
    $annee = $_POST["annee"];

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare(" INSERT INTO rdv (nom, prenom, telephone,jour,mois,annee)
            VALUES(:nom, :prenom, :telephone,  :jour,:mois,:annee)");
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':telephone',$telephone);
        $sth->bindParam(':jour',$jour);
        $sth->bindParam(':mois',$mois);
        $sth->bindParam(':annee',$annee);
        
 
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
      
        $erreur = "Votre compte a bien été créé ! <a href=\" ../html/listeRdvm.php\">Me connecter</a>";
//preparation de la requete

        
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