<?php
//ouverture d'une connexion a la bdd

$pdo= new PDO ("mysql:host=localhost;dbname=memoire","root","") ;

//preparation de la requete
$sth = $pdo->prepare ('DELETE FROM rdv where id =:id ');


//liaison du parametre nommé
$sth-> BindValue (':id', $_GET['id'], PDO::PARAM_INT );

//execution de la requete
 $sth -> execute();


    $erreur = "votre patient a été bien supprimer veuillez cliquer ! <a href=\"../html/listeRdvm.php\">ici</a>"


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