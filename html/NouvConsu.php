<?php
$dbco= new PDO ("mysql:host=localhost;dbname=memoire","root","") ;

//preparation de la requete
$sth = $dbco->prepare('SELECT * FROM patient where id=:id LIMIT 1');

//liaison du parametre nommé
$sth-> BindValue(':id', $_GET['id'],PDO::PARAM_INT );

$executeIsOk= $sth -> execute();
//on recupere le patient

//on recupere le patient
$user=$sth->fetch();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nouvelle Consultation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initiale-scale=1.0">
        <meta name="description" content="Application Web">
        <link rel="stylesheet" href="../css/NouvConsu.css">
        <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          #mySidenav a {
  position: absolute;
    left: -178px;
    transition: 0.3s;
    padding: 16px;
    width: 167px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 12px 12px 0;
}

#mySidenav a:hover {
left: 0;
}


#accueil {
top: 90px;
background-color: #2196F3;
}

#LPAT{
top: 140px;
background-color: #2196F3;
}
#fp{
top: 190px;
background-color: #2196F3;
}
#Ncon{
  top: 240px;
  background-color: #2196F3;
  }
  #Acon{
    top: 310PX;
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

    <body>
        <header>
            <div class="logo">
                <img src="../photo/logomod.png" alt="logo" style="width:100%; height:100px ; overflow: hidden;margin-top: -14px;"> 
            </div>
            <div class="deconnexion">
                       
                <svg class="icon0" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="96" height="96"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-1_44051_gr1"><stop offset="0" stop-color="#5ab6de"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient><linearGradient x1="86" y1="14.10938" x2="86" y2="95.43044" gradientUnits="userSpaceOnUse" id="color-2_44051_gr2"><stop offset="0" stop-color="#a8d0e9"></stop><stop offset="1" stop-color="#70afff"></stop></linearGradient><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-3_44051_gr3"><stop offset="0" stop-color="#4fa0d2"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M86,155.875c-34.08556,0 -61.8125,-27.72694 -61.8125,-61.8125c0,-24.31381 14.33781,-46.45881 36.52581,-56.41869l2.19838,4.902c-20.25838,9.09719 -33.34919,29.31794 -33.34919,51.51669c0,31.11856 25.31894,56.4375 56.4375,56.4375c31.11856,0 56.4375,-25.31894 56.4375,-56.4375c0,-22.2095 -13.09887,-42.43294 -33.368,-51.52475l2.19837,-4.902c22.20144,9.9545 36.54462,32.10219 36.54462,56.42675c0,34.08556 -27.72694,61.8125 -61.8125,61.8125z" fill="url(#color-1_44051_gr1)"></path><path d="M96.75,80.625c0,5.93669 -4.81331,10.75 -10.75,10.75v0c-5.93669,0 -10.75,-4.81331 -10.75,-10.75v-53.75c0,-5.93669 4.81331,-10.75 10.75,-10.75v0c5.93669,0 10.75,4.81331 10.75,10.75z" fill="url(#color-2_44051_gr2)"></path><path d="M86,139.75c-25.19263,0 -45.6875,-20.49487 -45.6875,-45.6875c0,-17.62462 9.847,-33.368 25.69787,-41.09456l2.35694,4.83481c-13.99112,6.8155 -22.67981,20.70988 -22.67981,36.25975c0,22.22831 18.08419,40.3125 40.3125,40.3125c22.22831,0 40.3125,-18.08419 40.3125,-40.3125c0,-15.54719 -8.686,-29.44156 -22.67444,-36.25975l2.35694,-4.82944c15.84819,7.72388 25.6925,23.46725 25.6925,41.08919c0,25.19263 -20.49487,45.6875 -45.6875,45.6875z" fill="url(#color-3_44051_gr3)">

        </path></g></g></svg>
        <a href="../bdd/deco.php"><button class="deco"style="font-size:26px">Deconnexion</button></a>
        </div>


        </header>
        <div id="mySidenav" class="sidenav">
     
 
     <a href="espaceDoc.php?id=1" id="accueil">accueil</a>
     <a href="listePat.php" id="LPAT">Liste patients</a>
     <a href="fichePat.php" id="fp">Fiche patient</a>
     <a href="#" id="Ncon">Nouvelle consultation</a>
     <a href="voiranccons.php" id="Acon">Anciennes consultation</a>

     

   </div>
   <form  action="../bdd/bdd-consult.php" method="post">

<div class="mahi_holder" style="margin-left: 106px; margin-top: -13px;">
    <div class="container">
 
            <input class="effect-1" type="number" name="id" value="<?=$user['id']?>"hidden >
            
          
    
        <div class="col-3">
            <input class="effect-1" type="text" name="motifv" placeholder="Motif de la visite">
            
          </div>
        <div class="col-3">
            <input class="effect-2" type="number" name="poid"placeholder="Poids (kg)" min="30" >
              <span class="focus-border"></span>
          </div>
        <div class="col-3">
            <input class="effect-3" type="number" name="taille" placeholder="Taille(cm)" min="140">
              <span class="focus-border"></span>
          </div> 
              </div>

        <div class="col-3">
          <textarea class="effect-4"  name="signph" placeholder="Signes Physiques:"></textarea>
              <span class="focus-border"></span>
          </div>
        <div class="col-3">
          <textarea class="effect-5"  name="siegedl" placeholder="Siége Des Lésions: "></textarea>
              <span class="focus-border"></span>
          </div>
        <div class="col-3">
         <textarea class="effect-6"  name="signf" placeholder="Signe Fonctionnel:"></textarea>
              <span class="focus-border"></span>
          </div>        
        <div class="col-3">
          <textarea class="effect-7"  name="signg" placeholder="Signes Généraux:"></textarea>
              <span class="focus-border">
                <i></i>
              </span>
          </div>
        <div class="col-3">
            <textarea class="effect-8"  name="diag" placeholder="Diagnostic:"></textarea>
              <span class="focus-border">
                <i></i>
              </span>
          </div>
        <div class="col-3">
           <textarea class="effect-9" name="remq" placeholder="Remarques:"></textarea>
              <span class="focus-border">
                <i></i>
              </span>
          </div>
      </div> 
     
      </div>
     
    </div>
</div>
<div id="modal" style=" bottom: 0%;">
    <h2 style="color:#4e97ff;">    Antécédents du Patient:</h2>
   
    

  <textarea class="effect-11" name="antmed" placeholder="Antécédents Medicaux:"></textarea>
  <textarea class="effect-12" name="antch" placeholder="Antécédents Chirurgicaux:"></textarea>
  <textarea class="effect-13" name="antfam" placeholder="Antécédents Familiaux:"></textarea>
  <textarea class="effect-14" name="autre" placeholder="Autre:"></textarea> <br>

 </div>
<div>
<button class="btn btn-primary" type="submit" style="margin-left: 91%; padding: 10px; BACKGROUND-COLOR: #4d97f3; BORDER: #4d97f3; width: 88px; color: #fff; MARGIN-TOP: 18%;"><span class="fa fa-send" style="color:#fff;padding-right: 5px;"></span>valider </button>
</div>

</form>


 

 


</body>

