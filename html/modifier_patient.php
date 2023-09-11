<?php
$dbco= new PDO ("mysql:host=localhost;dbname=memoire","root","") ;

//preparation de la requete
$sth = $dbco->prepare('SELECT * FROM rdv where id=:id LIMIT 1');

//liaison du parametre nommé
$sth-> BindValue (':id', $_GET['id'], PDO::PARAM_INT );

$executeIsOk= $sth -> execute();
//on recupere le patient
$user=$sth->fetch();
?>
<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page2.css"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=xzZ-rVr0qOX36uzxYEqPSXXFaFIhSGeJPjmRKLxBNQRUdy1TDeaYJx5KPGZR2hPDYMtz8J0rjJstajfPx1FijRP9vJvcfJ3CdL4HdVZ3sA6PXEDHc6K2ANqP9mwZOb-U0Vav780urjPz8GTzqvGxZI8iF9Gbi0qkGkfYP1HfUzxXjDuREUAEHzIzb7y3sm6hSpBgfwUXKomhd2qEJf62_oHiOcZDKH24HblCUVEFq6nU7dSB_y_KYnqDEAFDh1o6COhXtRkcqeGJd-uU0KE2iXMXOH3kTfcxSmEVwPCo8N3ShB3OQa8dK2uhvadfYVeAmQAZmnnxt1sWmIJ70Kf-Wg" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet"type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  

<title>Prendre RDV</title>
<style>

 .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  #mySidenav a {
    position: absolute;
    left: -140px;
    transition: 0.3s;
    padding: 15px;
    width: 150px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
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

.icon{
	margin-right: -20px;
    margin-left: 1099px;
    margin-top: -102px;
    margin-bottom: 36px;
    padding-left: 18px;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


  </style>
</head>

    
</head>
<body  style="background-color:#cccccc">

    <header>
    
        <div class="logo" >
       <img src="../photo/logomod.png" alt="logo"></img> </div>
       <div class="deco">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="96" height="96"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><defs><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-1_44051_gr1"><stop offset="0" stop-color="#5ab6de"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient><linearGradient x1="86" y1="14.10938" x2="86" y2="95.43044" gradientUnits="userSpaceOnUse" id="color-2_44051_gr2"><stop offset="0" stop-color="#a8d0e9"></stop><stop offset="1" stop-color="#70afff"></stop></linearGradient><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-3_44051_gr3"><stop offset="0" stop-color="#4fa0d2"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M86,155.875c-34.08556,0 -61.8125,-27.72694 -61.8125,-61.8125c0,-24.31381 14.33781,-46.45881 36.52581,-56.41869l2.19838,4.902c-20.25838,9.09719 -33.34919,29.31794 -33.34919,51.51669c0,31.11856 25.31894,56.4375 56.4375,56.4375c31.11856,0 56.4375,-25.31894 56.4375,-56.4375c0,-22.2095 -13.09887,-42.43294 -33.368,-51.52475l2.19837,-4.902c22.20144,9.9545 36.54462,32.10219 36.54462,56.42675c0,34.08556 -27.72694,61.8125 -61.8125,61.8125z" fill="url(#color-1_44051_gr1)"></path><path d="M96.75,80.625c0,5.93669 -4.81331,10.75 -10.75,10.75v0c-5.93669,0 -10.75,-4.81331 -10.75,-10.75v-53.75c0,-5.93669 4.81331,-10.75 10.75,-10.75v0c5.93669,0 10.75,4.81331 10.75,10.75z" fill="url(#color-2_44051_gr2)"></path><path d="M86,139.75c-25.19263,0 -45.6875,-20.49487 -45.6875,-45.6875c0,-17.62462 9.847,-33.368 25.69787,-41.09456l2.35694,4.83481c-13.99112,6.8155 -22.67981,20.70988 -22.67981,36.25975c0,22.22831 18.08419,40.3125 40.3125,40.3125c22.22831,0 40.3125,-18.08419 40.3125,-40.3125c0,-15.54719 -8.686,-29.44156 -22.67444,-36.25975l2.35694,-4.82944c15.84819,7.72388 25.6925,23.46725 25.6925,41.08919c0,25.19263 -20.49487,45.6875 -45.6875,45.6875z" fill="url(#color-3_44051_gr3)">

        </path></g></g></svg>
        <a href="../bdd/deco.php"> <button class="btn btn-1 btn-sep icon-info"style=" font-size: 22px; margin-bottom: 14px;  margin-left: 6px;">Deconnexion</button>
         
     
   


    </header>
    <div id="mySidenav" class="sidenav">
     
 
  <a href="espaceSecr.php?id=2"id="accueil">accueil</a>
  <a href="ListeRdvm.php" id="Lrdv">Liste RDV</a>
    <a href="#"id="Ardv">Ajouter RDV</a>
  
</div>
      
 

  
<div class="abc" style="margin-top: 13%;  MARGIN-LEFT: 11%;">
   
     <div style="margin-top: -182px;padding-top: 137px;">
     <form class="form-style-9" id="myForm" method="POST" action="../bdd/updatePatient.php" style="margin-top: -108px; padding-top: 219px;padding: 65px 46px;    background-color: #ffffff00; margin-left:-57px;
    width: 109%;
    ">
            <ul style="MARGIN-LEFT: 104px;" >
            <li>
            <input type="hidden" class="field-style field-split align-left" name="id"value="<?=$user['id']?>">
                <input type="hidden" class="field-style field-split align-left" name="time"value="<?=$user['time']?>">

                <svg class="icon1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="96" height="96"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z">

                </path></g></g></svg>
      
                <input type="text"name="nom" value="<?=$user['nom']?>"style=" float: left;  margin-left: -5px;  width: 400px;" id="nom"class="field-style field-split align-left" placeholder="Entrer votre nom" required />
             
              
                <svg class="icon2" style="margin-left: -15px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="96" height="96"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z">

                </path></g></g></svg>
 
                <input  type="text" value="<?=$user['prenom']?>" name="prenom" id="prenom" class="field-style field-split align-right3"STYLE=" width: 400px; margin-top: -2px;" placeholder="Entrer votre prenom" required />
                </li>
        
            <li>
                <svg class="icon1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="96" height="96"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#4f9fd1"><path d="M80.625,21.5c-5.87891,0 -11.16992,0.20996 -16.125,0.50391v-0.08398c-0.37793,0 -0.71386,0.08398 -1.09179,0.08398c-16.83888,1.00781 -28.5127,3.40136 -36.23926,5.71094c-4.36719,1.34375 -8.18848,4.07324 -11.21192,7.64258c-2.98145,3.52734 -5.20703,7.97851 -5.20703,13.01757v16.125h32.33399l0.46191,-4.87109c0,0 0.71388,-7.22266 3.90528,-14.19335c1.5957,-3.44336 3.77929,-6.76075 6.55078,-9.02832c2.01563,-1.67969 4.2832,-2.93946 7.22266,-3.44336c0.71386,-0.04199 1.21777,-0.12597 1.97362,-0.20996c0.042,0 0.08399,0.04199 0.12598,0c5.16504,-0.29395 10.91797,-0.50391 17.30078,-0.50391c6.38281,0 12.13574,0.20996 17.30078,0.50391c0.04199,0.04199 0.08399,0 0.12598,0c0.16797,0.04199 0.33594,0.04199 0.5459,0.08399c0.50391,0 0.92383,0.08398 1.42774,0.12597c2.93945,0.50391 5.20703,1.76368 7.22266,3.44336c2.77148,2.26757 4.95507,5.58496 6.55078,9.02832c3.19141,6.9707 3.90527,14.19335 3.90527,14.19335l0.41992,4.87109h32.37598v-16.125c0,-5.03906 -2.22558,-9.49023 -5.20703,-13.01757c-3.02344,-3.56934 -6.84473,-6.29883 -11.21192,-7.64258c-7.72656,-2.30957 -19.40039,-4.70312 -36.23925,-5.71094c-0.37794,0 -0.71388,-0.08398 -1.0918,-0.08398v0.08398c-4.95507,-0.29395 -10.24609,-0.50391 -16.125,-0.50391zM40.77442,35.56739c-1.13379,1.80567 -2.26758,3.61132 -3.06543,5.41699c-2.98145,6.4668 -3.06544,9.74219 -3.52734,12.76563h-12.68165v-5.375c0,-1.67969 0.92383,-4.03125 2.6875,-6.08886c1.76368,-2.05761 4.19922,-3.69531 6.13086,-4.24121c2.6875,-0.83984 6.34081,-1.67969 10.45605,-2.47754zM120.47558,35.56739c4.11524,0.79785 7.76856,1.6377 10.49805,2.47754c1.88965,0.5459 4.3252,2.18359 6.08886,4.24121c1.76368,2.05761 2.6875,4.40918 2.6875,6.08886v5.375h-12.68164c-0.46192,-3.02344 -0.54591,-6.29882 -3.48535,-12.76562c-0.83984,-1.80567 -1.97364,-3.61132 -3.10743,-5.41699zM53.75,64.5v11.42188l-0.50391,0.33594c0,0 -7.76855,5.66895 -15.5371,14.19336c-7.81055,8.48242 -16.20899,19.94628 -16.20899,33.17382v10.75c0,8.86035 7.26465,16.125 16.125,16.125h86c8.86035,0 16.125,-7.26465 16.125,-16.125v-10.75c0,-13.22754 -8.39844,-24.69141 -16.16699,-33.17382c-7.81055,-8.52442 -15.5791,-14.19336 -15.5791,-14.19336l-0.50391,-0.33594v-11.42187h-10.75v10.75h-32.25v-10.75zM58.45313,86h44.34375c0.96582,0.75586 6.4248,4.70313 12.80761,11.67383c7.0127,7.64257 13.39551,17.67871 13.39551,25.95117v10.75c0,3.02344 -2.35156,5.375 -5.375,5.375h-86c-3.02344,0 -5.375,-2.35156 -5.375,-5.375v-10.75c0,-8.27246 6.38281,-18.30859 13.35352,-25.95117c6.4248,-6.97071 11.88378,-10.91797 12.8496,-11.67383zM53.75,96.75v10.75h10.75v-10.75zM75.25,96.75v10.75h10.75v-10.75zM96.75,96.75v10.75h10.75v-10.75zM53.75,118.25v10.75h10.75v-10.75zM75.25,118.25v10.75h10.75v-10.75zM96.75,118.25v10.75h10.75v-10.75z">

</path></g></g></svg>
                <input type="text" value="<?=$user['telephone']?>" name="telephone" id="telephone"style=" width: 400px;"class="field-style field-split align-left" placeholder="Entrer votre numero de telephone" required/>
                
                
                    <div class="date">
                        <label    style=" margin-left: 69px">DATE DE RDV :</label>
                        <input class="l1" value="<?=$user['jour']?>" type="number" id="jour" name="jour" placeholder="jj" min="1" max="31"style="width:32px">
                        <input type="number" value="<?=$user['mois']?>" class="l1" id="mois" name="mois"placeholder="mm" min="1" max="12"style="width:50px">
                        <input type="number" value="<?=$user['annee']?>" class="3" id="annee" name="annee" placeholder="aaaa" min="2020" max="3000">
                       
                       
                            
                </li>
                </ul>
                 <input  type="submit" class="btn btn-primary btn-lg active" value="confirmer" name="inscrire" id="submit" style="padding: 4px 25px;
                 background-color: #0096FF;margin-top: 9%;
                 margin: 15px; margin-left: 775px;" class="button">
                <input  type="reset"  class="btn btn-primary btn-lg active" value="annuler" name="annuler" id="annuler" style="padding: 4px 35px;
                background-color: #ff0000ad;;
                margin: 15px;" class="button">
                
                    
                   
                    </form>
                    </div>
                    </div>
  
         </body>
         </html>