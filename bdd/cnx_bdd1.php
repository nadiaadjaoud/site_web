<?php
  $serveur = "localhost";
   $dbname = "memoire";
   $user = "root";
   $pass = "";
   
   $nom = htmlspecialchars($_POST['nom']);
   $prenom= htmlspecialchars($_POST['prenom']);
   $email = htmlspecialchars($_POST['email']);
   $telephone = htmlspecialchars($_POST['telephone']);
   $adresse = htmlspecialchars($_POST['adresse']);
   $sit_fam = htmlspecialchars($_POST['sit_fam']);
   $mdp =sha1($_POST['mdp']);
   $jour=htmlspecialchars( $_POST['jour']);
   $mois=htmlspecialchars( $_POST['mois']);
   $annee=htmlspecialchars( $_POST['annee']);
   $sexe=htmlspecialchars($_POST['sexe']);

   try{
     //On se connecte à la BDD
     $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

                     $sth = $dbco->prepare("INSERT INTO patient (nom, prenom, telephone,email,mdp,adresse,jour,mois,annee,sit_fam,sexe)
                     VALUES(:nom, :prenom, :telephone, :email,:mdp,:adresse,:jour,:mois,:annee,:sit_fam,:sexe)");
                 $sth->bindParam(':nom',$nom);
                 $sth->bindParam(':prenom',$prenom);
                 $sth->bindParam(':telephone',$telephone);
                 $sth->bindParam(':email',$email);
                 $sth->bindParam(':mdp',$mdp);
                 $sth->bindParam(':adresse',$adresse);
                 $sth->bindParam(':jour',$jour);
                 $sth->bindParam(':mois',$mois);
                 $sth->bindParam(':annee',$annee);
                 $sth->bindParam(':sit_fam',$sit_fam);
                 $sth->bindParam(':sexe',$sexe);
             
              
                     $sth->execute();
                     $erreur = "votre patient a été bien enregister veuillez cliquez  <a href=\"../html/nouveaupatient.php\">ici</a>";
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
  
</body>
            </html>