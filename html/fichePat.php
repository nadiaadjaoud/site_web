<?php
$dbco= new PDO ("mysql:host=localhost;dbname=memoire","root","") ;

//preparation de la requete
$sth = $dbco->prepare('SELECT * FROM patient where id=:id LIMIT 1');

//liaison du parametre nommé
$sth-> BindValue (':id', $_GET['id'] );

$executeIsOk= $sth -> execute();
//on recupere le patient

//on recupere le patient
$user=$sth->fetch();


//preparation de la requete
$sth = $dbco->prepare('SELECT * FROM antc where id=:id');

//liaison du parametre nommé
$sth-> BindValue (':id', $_GET['id'] );

$executeIsOk= $sth -> execute();
//on recupere le patient

//on recupere le patient
$antc=$sth->fetch();


?>
<!DOCTYPE html>
<html>
    <head>
        <title>fiche patient</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initiale-scale=1.0">
        <meta name="description" content="Application Web">
        <link rel="stylesheet" href="../css/NouvConsu.css">
        <style>
            .main_btn1 {
                position: relative;
    margin-top: 0px;
    width: 142px;
    margin-left: 29%;
    bottom: -7px;
    display: inline-block;
    background: #4d97f3;
    padding: 0px 40px;
    color: #fff;
    font-family: "Arial", sans-serif;
    font-size: 13px;
    font-weight: 600;
    line-height: 48px;
    border: 1px solid #4d97f3;
    text-align: center;
    cursor: pointer;
    transition: all 300ms linear 0s;
    border-radius: 5px;
    text-transform: capitalize;
 }
  .main_btn1:hover {
    background: transparent;
    color: #3face4;
    border: 1px solid #3face4;
   }
    .main_btn2 {
        position: relative;
    margin-top: 38px;
    TOP: -81px;
    width: 178px;
    margin-left: 49%;
    /* bottom: -278px; */
    display: inline-block;
    background: #4d97f3;
    padding: 0px 40px;
    color: #fff;
    font-family: "Arial", sans-serif;
    font-size: 13px;
    font-weight: 600;
    line-height: 48px;
    border: 1px solid #4d97f3;
    text-align: center;
    cursor: pointer;
    transition: all 300ms linear 0s;
    border-radius: 5px;
    text-transform: capitalize;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
    }
      .main_btn2:hover {
        background: transparent;
        color: #3face4;
        border: 1px solid #3face4; }
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
        <a href="../bdd/deco.php"><button class="deco"style="border: none;color: black;background-color: white;cursor: pointer;font-size: 26px;height: 25%;margin-top: 25px;
    padding: 9px 10px 24px 13px; margin-left: -10px;
    border-radius: .25rem;">Deconnexion</button></a>
        </div>


        </header>
        <div id="mySidenav" class="sidenav">
     
 
     <a href="espaceDoc.php?id=1" id="accueil">accueil</a>
     <a href="listePat.php" id="LPAT">Liste patients</a>
     <a href="#" id="fp">Fiche patient</a>
     <a href="NouvConsu.php" id="Ncon">Nouvelle consultation</a>
     <a href="voiranccons.php" id="Acon">Anciennes consultation</a>

     

   </div>

 <h5 class="modal-title" id="exampleModalLongTitle" style=" color: #fff; width: 815px; margin-bottom: 2px; text-align: center; font-size: x-large; background-color: #4d97f3; padding: 12px;
    margin-top: 3px;   margin-left: 214px;"> fiche Patient</h5>
       
        <div class="infos"style="    margin-left: 215px; margin-top: -15px;border: solid #4d97f3;margin-left: 214px;margin-top: -4px;width: 833px;">
      <h5 class="modal-title" id="exampleModalLongTitle" style=" color:#4d97f3;   margin-bottom: 2px;  font-size:large;margin-left: 25px;"> Informations générales sur le patient:</h5>
      
                      
      <h5 class="n" style="font-size: 16px;    margin-left: 10px;">Nom:  <?php echo $user['nom']?></h5>
      <h5 class="p"style="margin-top: -46px;margin-left: 250px;font-size: 16px;">Prenom:  <?php echo $user['prenom']?></h5>
      <h5 class="n" style="font-size: 16px; margin-left: 10px;"> Age: <?php
   $dateNaissance = intval($user['annee']);
   $annee = date('Y');
  $age1 = $annee - $dateNaissance;
  echo $age1;
?></h5>
      <h5 class="p"style="margin-top: -46px; margin-left:250px; font-size: 16px;">Sexe:  <?php echo $user ['sexe']?></h5>
      <h5 class="n" style="font-size: 16px; margin-left: 10px;">Adresse:  <?php echo $user ['adresse']?></h5>
      <h5 class="p"style="margin-top: -46px; margin-left: 250px; font-size: 16px;">Tel:  <?php echo $user ['telephone']?></h5>
      <h5 class="n" style="font-size: 16px;    margin-left: 10px;">Situation familliale:  <?php echo $user ['sit_fam']?></h5>
      
      
     
      <div class="modal-footer"style="border-top: 1px solid #4e97ff;">
      <h5 class="modal-title" id="exampleModalLongTitle" style="margin-left: 25px; color: #4d97f3; margin-bottom: -13px;font-size: large; text-align: left; margin-top: 7px;"> Antécédents du patient:</h5>
      <h5 class="n" style="font-size: 16px;text-align: left;margin-left: 10px;">Antécédents médicaux:   <?php echo $antc['antmed']?></h5>
      <h5 class="p"style="text-align: left;font-size: 16px;margin-left: 10px;">Antécédents familiaux:    <?php echo $antc['antfam']?></h5>
      <h5 class="A" style="font-size: 16px; margin-right: 136px; margin-top: -93px; margin-left: 400px;">Antécédents cherurgicaux:   <?php echo $antc['antch']?></h5>
      <h5 class="au"style="font-size: 16px;margin-left: 400px;">Autres:   <?php echo $antc['autre']?></h5>

      </div>

</div>
<a href="NouvConsu.php?id=<?php echo $user['id']?>" class="main_btn1" type="submit" >Nouvelle consultation</a>
<a href="voiranccons.php?id=<?php echo $user['id']?>"class="main_btn2 " type="submit">Anciennes consultations</a>

    
</body>
</html>