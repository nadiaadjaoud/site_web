<?php
session_start();
 
$serveur = "localhost";
$dbname = "memoire";
$user = "root";
$pass = "";
try{
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id']) AND $_GET['id'] > 0) {
      $getid = intval($_GET['id']);
      $requser = $dbco->prepare('SELECT * FROM inscription WHERE id = ?');
      $requser->execute(array($getid));
      $userinfo = $requser->fetch();
    }
  }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        }
        

?>
<html>
   <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ListRdv.css"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=xzZ-rVr0qOX36uzxYEqPSXXFaFIhSGeJPjmRKLxBNQRUdy1TDeaYJx5KPGZR2hPDYMtz8J0rjJstajfPx1FijRP9vJvcfJ3CdL4HdVZ3sA6PXEDHc6K2ANqP9mwZOb-U0Vav780urjPz8GTzqvGxZI8iF9Gbi0qkGkfYP1HfUzxXjDuREUAEHzIzb7y3sm6hSpBgfwUXKomhd2qEJf62_oHiOcZDKH24HblCUVEFq6nU7dSB_y_KYnqDEAFDh1o6COhXtRkcqeGJd-uU0KE2iXMXOH3kTfcxSmEVwPCo8N3ShB3OQa8dK2uhvadfYVeAmQAZmnnxt1sWmIJ70Kf-Wg" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <title>espace secretaire</title>
      <style>
          /* Style the links inside the sidenav */
#mySidenav a {
  position: absolute;
    left: -176px;
    transition: 0.3s;
    padding: 17px;
    width: 195px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    /* margin-left: -38px; */
    border-radius: 0 12px 12px 0;
}

#mySidenav a:hover {
  left: 0;
}


#accueil {
  top: 90px;
  background-color: #2196F3;
}

#Lrdv{
  top: 150px;
  background-color: #2196F3;
}


#Ardv {
  top: 210px;
  background-color: #2196F3;
}
#np{
  top: 270px;
  background-color: #2196F3;
}

.icon{
	margin-right: -20px;
    margin-left: 1099px;
    margin-top: -102px;
    margin-bottom: 36px;
    padding-left: 18px;
}




</style>
</head>


  </style>
   </head>
   <body style=" position:fixed; background-color: #cccccc;width: 101%; left: 0%;">
    <header style=" margin-left: 1px;">
            <div class="logo" style="top:-2px;  margin-left: 1px; ">
                <img src="../photo/logomod.png" alt="logo" style="width:100%; height:100px ; overflow: hidden;margin-top: -14px;"> 
            </div>
            <div class="deconnexion"style="margin-right: -68px;">
                       
                <svg class="icon1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="96" height="96"
                 viewBox="0 0 172 172"
                   style=" fill:#000000;"><defs><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-1_44051_gr1"><stop offset="0" stop-color="#5ab6de"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient><linearGradient x1="86" y1="14.10938" x2="86" y2="95.43044" gradientUnits="userSpaceOnUse" id="color-2_44051_gr2"><stop offset="0" stop-color="#a8d0e9"></stop><stop offset="1" stop-color="#70afff"></stop></linearGradient><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-3_44051_gr3"><stop offset="0" stop-color="#4fa0d2"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M86,155.875c-34.08556,0 -61.8125,-27.72694 -61.8125,-61.8125c0,-24.31381 14.33781,-46.45881 36.52581,-56.41869l2.19838,4.902c-20.25838,9.09719 -33.34919,29.31794 -33.34919,51.51669c0,31.11856 25.31894,56.4375 56.4375,56.4375c31.11856,0 56.4375,-25.31894 56.4375,-56.4375c0,-22.2095 -13.09887,-42.43294 -33.368,-51.52475l2.19837,-4.902c22.20144,9.9545 36.54462,32.10219 36.54462,56.42675c0,34.08556 -27.72694,61.8125 -61.8125,61.8125z" fill="url(#color-1_44051_gr1)"></path><path d="M96.75,80.625c0,5.93669 -4.81331,10.75 -10.75,10.75v0c-5.93669,0 -10.75,-4.81331 -10.75,-10.75v-53.75c0,-5.93669 4.81331,-10.75 10.75,-10.75v0c5.93669,0 10.75,4.81331 10.75,10.75z" fill="url(#color-2_44051_gr2)"></path><path d="M86,139.75c-25.19263,0 -45.6875,-20.49487 -45.6875,-45.6875c0,-17.62462 9.847,-33.368 25.69787,-41.09456l2.35694,4.83481c-13.99112,6.8155 -22.67981,20.70988 -22.67981,36.25975c0,22.22831 18.08419,40.3125 40.3125,40.3125c22.22831,0 40.3125,-18.08419 40.3125,-40.3125c0,-15.54719 -8.686,-29.44156 -22.67444,-36.25975l2.35694,-4.82944c15.84819,7.72388 25.6925,23.46725 25.6925,41.08919c0,25.19263 -20.49487,45.6875 -45.6875,45.6875z" fill="url(#color-3_44051_gr3)">

                     </path></g></g></svg>
       <a href="../bdd/deco.php"><button class="deco">Deconnexion</button></a>
         
     </header>
     <div id="mySidenav" class="sidenav">
     
 
  <a href="#" id="accueil">accueil</a>
  <a href="ListeRdvm.php" id="Lrdv">Liste RDV</a>
    <a href="ajouter_rdv.php"id="Ardv">Ajouter RDV</a>
    <a href="nouveaupatient.php"id="np">Nouveau Patient</a>
</div>

</body>
  </div>
      <div align="center">
      


        <h2 style="font-weight: 500; line-height: 1.2;margin-top: 182px;">soyez la bienvenue dans votre espace </h2>
         
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
      
     
         <?php
         }
         ?>
      </div>
   </body>
</html>
