<?php
    $serveur = "localhost";
    $dbname = "memoire";
    $user = "root";
    $pass = "";
    

   
    $id=$_POST["id"];
    $diag=$_POST["diag"];
    $poid=$_POST["poid"];
    $taille=$_POST["taille"];
    $signph = $_POST["signph"];
    $siegedl = $_POST["siegedl"];
    $motifv = $_POST["motifv"];
    $signf= $_POST["signf"];
    $signg = $_POST["signg"];
    $remq = $_POST["remq"];
  
     
    $antmed=$_POST["antmed"];
    $antch=$_POST["antch"];
    $antfam=$_POST["antfam"];
    $autre = $_POST["autre"];
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
      
      
      
        
        $sth = $dbco->prepare("INSERT INTO fichepat (id,diag,poid,taille,signph, siegedl,motifv,signf,signg,remq)
        VALUES(:id,:diag,:poid,:taille,:signph,:siegedl,:motifv,:signf,:signg,:remq)" );
      
     $sth->bindParam(':id',$id);
    $sth->bindParam(':diag',$diag);
    $sth->bindParam(':poid',$poid);
    $sth->bindParam(':taille',$taille);
    $sth->bindParam(':signph',$signph);
    $sth->bindParam(':siegedl',$siegedl);
    $sth->bindParam(':motifv',$motifv);
    $sth->bindParam(':signf',$signf);
    $sth->bindParam(':signg',$signg);
    $sth->bindParam(':remq',$remq);

    $sth->execute();
    
     $st = $dbco->prepare("INSERT INTO antc (id,antmed,antch,antfam, autre)VALUES(:id,:antmed,:antch,:antfam,:autre)");
     $st->bindParam(':id',$id);
 $st->bindParam(':antmed',$antmed);
 $st->bindParam(':antch',$antch);
 $st->bindParam(':antfam',$antfam);
 $st->bindParam(':autre',$autre);

 

 $st->execute();
 
 
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
       <div class="alert alert" styl="background-color: #CCC; border-color: #CCC;">
    
  <strong STYLE="font-weight: unset;FONT-SIZE: x-large;"> veuillez cliquez </strong>  <a style="font-weight: unset; FONT-SIZE: x-large;color:#007bff;" href="../html/fichePat.php?id=<?php echo $id?>" class="alert-link">ici
  </a>.
</div>
             </div>
             </div>
  
</body>
            </html>